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


	<title>Phương thức thanh toán</title>

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

	<h1>Phương thức thanh toán</h1>

	<div class="w3layoutscontaineragileits">

		<form action="/thanhtoan/handle.php" method="post">

			<ul class="agileinfotickwthree">
				<li>
					<input type="radio" checked id="brand1" name="payment_type" value="OFFLINE">
					<label for="brand1"><span style="color:white">Thanh toán khi nhận hàng</span></label>
				</li>
				<li>
					<input type="radio" id="brand3" name="payment_type" value="VNBANK">
					<label for="brand3"><span style="color:white">Thanh toán qua thẻ ATM/Tài khoản nội địa</span></label>
				</li>
			</ul>
			<div class="aitssendbuttonw3ls">
				<input type="text" hidden name="payment">
				<input type="text" name="shipping_id" value="<?= $_GET['shipping_id'] ?>" hidden>
				<input type="submit" value="Tiếp tục">
				<div class="clear"></div>
			</div>
		</form>
	</div>




	<script type="text/javascript" src="/thanhtoan/js/jquery-2.1.4.min.js"></script>


</body>
<!-- //Body -->

</html>