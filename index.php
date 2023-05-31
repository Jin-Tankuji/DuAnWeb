<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anomymous"></script>
    <link rel="stylesheet" href="./style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="./chitietsanpham/cart.css">

    <link rel="stylesheet" href="./chitietsanpham/detail.css">

<!--    <link rel="stylesheet" href="./chitietsanpham/style.css">-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Mr.Lee - Cửa hàng Apple chính hãng</title>
    <style>
        .cartPayment{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
        }

        .cart-footer_right{
            box-sizing: border-box;
        }
        .cart-footer_right button{
            font-size: 15px;
            cursor: pointer;
            width: 120px;
            border: none;
            background: #ffffff;
            border-radius: 10px;
            padding: 10px 7px;
        }

        input[type="number"]{
            color: #000000;
        }

    </style>
</head>

<body>
    <?php
    include 'layouts/header.php';
    if(isset($_GET['logoutSuccess'])){
        echo '<script>alert("Đăng xuất thành công")</script>';
    }
    ?>
    <!------------------------------ Slide ------------------------------>
    <section id="Slide">
        <div class="aspect-ratio-169">
            <img src="img/slide1.png">
            <img src="img/slide2.png">
        </div>
        <div class="dot-container">
            <div class="dot active"></div>
            <div class="dot"></div>
        </div>
    </section>
    <!------------------------------ app-container ------------------------------>
    <section class="app-container" style="font-family: 'Times New Roman'">
        <p>Nhận thông báo từ Mr.Lee</p>
        <div class="input-email">
            <input type="text" placeholder="Nhập email của bạn" style="color: white;">
            <i class="fas fa-arrow-left"></i>
        </div>
    </section>
    <!------------------------------ footer ------------------------------>
    <div class="footer-items" style="font-family: 'Times New Roman'">
        <li><a href=""></a>Liên hệ</li>
        <li><a href=""></a>Tuyển dụng</li>
        <li><a href=""></a>Giới thiệu</li>
        <li>
            <a href="" class="fab fa-facebook-f"></a>
            <a href="" class="fab fa-twitter"></a>
            <a href="" class="fab fa-google"></a>
        </li>
    </div>
    <div class="footer-text" style="font-family: 'Times New Roman'">
        <p>
            Cửa hàng chuyên phân phối thiết bị Apple chính hãng Mr.Lee <br>
            Địa chỉ: 220 An Dương Vương, TP.Quy Nhơn, Bình Định <br>
            Đặt hàng online: <b>0843048799</b>
        </p>
    </div>
    <div class="footer-bottom" style="color: black">
        © Mr.Lee All rights reserved
    </div>
    <!------------------------------ script ------------------------------>
    <script src="./index.js"></script>
    <?php
    include 'layouts/footer.php';
    ?>
</body>

</html>