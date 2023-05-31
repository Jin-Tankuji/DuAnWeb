<?php

include 'db/connect.php';
include 'vnpay/vnpay_create_payment.php';

// Thêm shipping
if (isset($_POST['add_shipping'])) {
  $name = $_POST['Name'];
  $phone = $_POST['Phone'];
  $address = $_POST['Address'];
  $note = $_POST['Note'];
  $customerId = $_POST['customer_id'] ?? 1;
  $totalPrice = $_POST['Total_price'] ?? 10000;

  // Tạo shipping
  $data = array(
    'fullName' => $name,
    'phoneNumber' => $phone,
    'address' => $address,
    'note' => $note,
    'customer_id' => $customerId,
    'total_price' => $totalPrice,
  );

  $id_insert = db_insert("tbl_shippings", $data);

  // Chuyển hướng đến trang hình thức thanh toán
  header('Location: thanhtoan.php?shipping_id=' . $id_insert);
}


// Xử lý hình thức thanh toán
if (isset($_POST['payment'])) {

  $shipping_id = $_POST['shipping_id'];
  $payment_type = $_POST['payment_type'];

  $item = findShippingById($shipping_id);

  // Nếu không tìm thấy shipping_id chuyển hướng về trang thanh toán
  if (!isset($item)) {
    header('Location: vanchuyen.php');
    die();
  }

  if ($payment_type == 'OFFLINE') {
    // Thanh toán khi nhận hàng. Tại đây chuyển hướng đến trang thanh toán thành công.
    header('Location: return.php?shipping_id=' . $shipping_id);
    die();
  }

  // Thanh toán bằng vnpay. Mặc định tài khoản test là Ngân hàng NCB.
  /**
      Ngân hàng: NCB
      Số thẻ: 9704198526191432198
      Tên chủ thẻ:NGUYEN VAN A
      Ngày phát hành:07/15
      Mật khẩu OTP:123456
   */
  update_payment_type($shipping_id);
  $order_id = rand(1, 10000);
  add_transaction($shipping_id, $order_id, $item['total_price']);
  create_url_payment($item['total_price'], $payment_type,  $_SERVER['REMOTE_ADDR'], $order_id);
}
