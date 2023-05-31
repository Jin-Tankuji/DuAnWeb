<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <title>VNPAY RESPONSE</title>
  <!-- Bootstrap core CSS -->
  <link href="./assets/bootstrap.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="./assets/jumbotron-narrow.css" rel="stylesheet">
  <script src="./assets/jquery-1.11.3.min.js"></script>
</head>

<body>
  <?php
  require_once("./db/connect.php");

  $shipping_id = $_GET['shipping_id'];

  $item = findShippingById($shipping_id);

  // Nếu không tìm thấy shipping_id chuyển hướng về trang thanh toán
  if (!isset($item)) {
    header('Location: vanchuyen.php');
    die();
  }
  ?>
  <!--Begin display -->
  <div class="container">
    <div class="header clearfix">
      <h3 class="text-muted">HOÀN THÀNH</h3>
    </div>
    <div class="table-responsive">
      <div class="form-group">
        <label>Mã đơn hàng:</label>

        <label><?php echo $item['id_shipping'] ?></label>
      </div>
      <div class="form-group">

        <label>Số tiền:</label>
        <label><?php echo $item['total_price'] ?></label>
      </div>
      <div class="form-group">
        <label>Nội dung thanh toán:</label>
        <label><?php echo $item['note'] ?></label>
      </div>
      <div class="form-group">
        <label>Hình thức thanh toán:</label>
        <label>Thanh toán khi nhận hàng</label>
      </div>
      <div class="form-group">
        <label>Kết quả:</label>
        <label>
          <span style='color:blue'>GD Thanh cong</span>
        </label>
      </div>
      <a href="/" class="btn btn-success">Quan lại trang vận chuyển</a>
    </div>
    <p>
      &nbsp;
    </p>
    <footer class="footer">
      <p>&copy; VNPAY <?php echo date('Y') ?></p>
    </footer>
  </div>
</body>

</html>