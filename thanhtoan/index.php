<?php
if (!isset($_SESSION)) session_start();
require_once("db/connect.php");

if (!isset($_SESSION['email'])) {
	header("Location: account/login.php");
	die();
}

$user = findUserByEmail($_SESSION['email']);

?>


<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>

<!-- Head -->

<head>


	<title>Thông tin vận chuyển</title>

	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="keywords" content="Existing Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-Tags -->

	<link href="/thanhtoan/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />

	<!-- Style -->
	<link rel="stylesheet" href="/thanhtoan/css/vanchuyen.css" type="text/css" media="all">

	<!-- Fonts -->
	<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->

<body>

	<h1>Thông tin vận chuyển</h1>

	<div class="w3layoutscontaineragileits">

		<form action="/thanhtoan/handle.php" method="post">
			<input type="text" name="Name" placeholder="Họ và tên" required="">
			<input type="text" name="Phone" placeholder="Số Điện Thoại" required="">
			<input type="text" name="Address" placeholder="Địa Chỉ" required="">
			<input type="text" name="Total_price" placeholder="Tổng giá tiền" required="">
			<input type="text" name="Note" placeholder="Ghi Chú" required="" style="height: 60px;">
			<input type="text" name="customer_id" value="<?= $user['id_khachhang'] ?>" hidden>
			<ul class="agileinfotickwthree">
				<li>
					<input type="checkbox" id="brand1" value="">
					<label for="brand1"><span></span>Ghi Nhớ Thông Tin</label>
				</li>
			</ul>
			<input type="text" hidden name="add_shipping">
			<div class="aitssendbuttonw3ls">
				<input type="submit" value="THÊM VẬN CHUYỂN">
				<div class="clear"></div>
			</div>
		</form>
	</div>




	<script type="text/javascript" src="/thanhtoan/js/jquery-2.1.4.min.js"></script>


</body>
<!-- //Body -->

</html>