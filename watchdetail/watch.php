<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anomymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
<!--    <link rel="stylesheet" href="../../style.css">-->
    <link rel="stylesheet" href="../../chitietsanpham/detail.css">
    <link rel="stylesheet" href="watch.css">
    <link rel="stylesheet" href="../../chitietsanpham/cart.css">
    <style>
        .cartPayment{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            color: #ffffff;
            font-family: Arial, Helvetica, sans-serif;
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

        h1.titledetail {
            margin-top: 13%;
        }
        input[type="number"]{
            color: #000000;
        }
    </style>
</head>

<body>
    <!-- Phần thân trên -->
    <header>
        <div class="logo">
            <a href="/index.php">
                <img src="/img/MR.LEE.png" style="width: 100px; height: 50px; float: left"></img>
            </a>
        </div>
        <div class="menu" style="padding-right: 5px; font-family: Times New Roman">
            <li><a href="/products/iphone/iphone.php">iPhone</a>
                <ul class="menu1">
                    <li><a href="../products/iphone/iphone_phanloai.php?phanloai=1">iPhone 14</a></li>
                    <li><a href="../products/iphone/iphone_phanloai.php?phanloai=2">iPhone 13</a></li>
                    <li><a href="../products/iphone/iphone_phanloai.php?phanloai=3">iPhone 12</a></li>
                    <li><a href="../products/iphone/iphone_phanloai.php?phanloai=4">iPhone 11</a></li>
                    <li><a href="../products/iphone/iphone_phanloai.php?phanloai=5">iPhone SE</a></li>
                </ul>
            </li>
            <li><a href="/products/mac/mac.php">Mac</a>
                <ul class="menu2">
                    <li><a href="/products/mac/mac_phanloai.php?phanloai=6">Macbook Air</a></li>
                    <li><a href="/products/mac/mac_phanloai.php?phanloai=7">Macbook Pro</a></li>
                </ul>
            </li>
            <li><a href="/products/ipad/ipad.php">iPad</a>
                <ul class="menu3">
                    <li><a href="/products/ipad/ipad_phanloai.php?phanloai=8">iPad Gen</a></li>
                    <li><a href="/products/ipad/ipad_phanloai.php?phanloai=9">iPad Pro</a></li>
                    <li><a href="/products/ipad/ipad_phanloai.php?phanloai=10">iPad Air</a></li>
                </ul>
            </li>
            <li><a href="/products/watch/watch.php">Watch</a>
                <ul class="menu4">
                    <li><a href="/products/watch/watch_phanloai.php?phanloai=11">Apple Watch Series 7</a></li>
                    <li><a href="/products/watch/watch_phanloai.php?phanloai=12">Apple Watch Series 8</a></li>
                    <li><a href="/products/watch/watch_phanloai.php?phanloai=13">Apple Watch Ultra</a></li>
                </ul>
            </li>
            <li><a href="/products/homepod/homepod.php">HomePod</a>
                <ul class="menu5">
                    <li><a href="/products/homepod/homepod_phanloai.php?phanloai=14">HomePod Mini</a></li>
                    <li><a href="/products/homepod/homepod_phanloai.php?phanloai=15">HomePod</a></li>
                </ul>
            </li>
            <li><a href="/products/phukien/phukien.php">Phụ kiện</a>
                <ul class="menu6">
                    <li><a href="/products/phukien/phukien_phanloai.php?phanloai=16">Airpods</a></li>
                    <li><a href="/products/phukien/phukien_phanloai.php?phanloai=17">Airtags</a></li>
                    <li><a href="/products/phukien/phukien_phanloai.php?phanloai=22">Magsafe</a></li>
                    <li><a href="/products/phukien/phukien_phanloai.php?phanloai=18">Case</a></li>
                    <li><a href="/products/phukien/phukien_phanloai.php?phanloai=19">Keyboard</a></li>
                </ul>
            </li>
        </div>
            <form id="products-search" method="GET">
                <div class="others">
                    <li><input placeholder="Tìm kiếm" type="text"><i class="fas fa-search" style="bottom: 3px"></i></li>
                    <li class="cart-li"><span class="fa fa-shopping-bag" style="background-color: black; color: white"></span>
                        <div class="cart">
                            <div class="cart-header">
                                <span>Giỏ hàng</span>
                            </div>
                            <div class="cart-list">

                            </div>
                            <div class="cart-footer cartPayment">
                                <div class="cart-footer_left" style="padding: 6px 0;color: white;list-style: none;text-align: -webkit-match-parent;background-color: #3e3e3f">
                                    <span>Tổng tiền : </span>
                                    <span id="priceTotal">0</span>
                                </div>
                                <div class="cart-footer_right" >
                                    <button class="btnCheckout" type="button">
                                        Thanh toán
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li><?php
                        if (isset($_SESSION['email'])) {
                            echo '<a href="/account/logout.php"><i class="fa fa-sign-out" style="color: #ffffff; background-color: black"></i></a>';
                        } else {
                            echo '<a href="/account/login.php"><i class="fa fa-user" style="color: #ffffff"></i></a>';
                        }
                        ?>
                    </li>
                </div>
        </form>
    </header>

    <!-- tieu de -->
    <section>
        <article>
            <div class="warpper-title-author">
                <h1 class="titledetail">iPhone, iPad - Giảm đến 2 triệu đồng khi tham gia thu cũ đổi mới tại Mr.Lee, cơ
                    hội lên đời cho 'dế yêu' đây rồi</h1>


            </div>
            <div class="warpper-content" style="padding-bottom: 0">
                <div class="imgwrap"><img
                        alt="iPhone, iPad - Giảm đến 2 triệu đồng khi tham gia thu cũ đổi mới tại TopZone"
                        data-original="https://cdn.tgdd.vn/Files/2022/02/26/1417401/iphone-ipad-thu-cu-doi-moi.jpg"
                        src="https://cdn.tgdd.vn/Files/2022/02/26/1417401/iphone-ipad-thu-cu-doi-moi.jpg"
                        title="iPhone, iPad - Giảm đến 2 triệu đồng khi tham gia thu cũ đổi mới tại TopZone"></div>
                <h2>Ưu đãi cực sốc dành cho các fan nhà Táo đây,&nbsp;<a href="https://www.topzone.vn/iphone"
                        target="_blank" title="iPhone" type="iPhone">iPhone</a>, <a href="https://www.topzone.vn/ipad"
                        target="_blank" title="iPad" type="iPad">iPad</a> - Giảm khi tham gia thu cũ đổi mới tại <a
                        href="https://www.topzone.vn/" target="_blank" title="TopZone" type="TopZone">Mr.Lee</a>
                    . Nếu các bạn có ý định lên đời "dế yêu" của mình thì đây là cơ hội tuyệt vời đó, nhanh chân đến cửa
                    hàng để quẹo lựa thôi nào!</h2>
                <p><strong>1. Thời gian áp dụng:</strong>&nbsp;Từ 01/01 - 31/05/2023.</p>
                <p><strong>2. Đối tượng tham gia:&nbsp;</strong>Khách hàng hiện là chủ sở hữu điện thoại hoặc tablet cũ.
                </p>
                <p><em><strong>Lưu ý:</strong> Thoả các yêu cầu về tình trạng thiết bị như bên dưới và muốn nâng cấp lên
                        điện thoại iPhone, máy tính bảng iPad mới.</em></p>
                <div class="imgwrap"><img alt="iPhone, iPad - Giảm 1.500.000đ khi tham gia thu cũ đổi mới tại TopZone"
                        title="iPhone, iPad - Giảm 1.500.000đ khi tham gia thu cũ đổi mới tại TopZone"
                        data-src="https://cdn.tgdd.vn/Files/2022/02/26/1417401/iphoneipad.jpg"
                        class=" ls-is-cached lazyloaded"
                        src="https://cdn.tgdd.vn/Files/2022/02/26/1417401/iphoneipad.jpg"></div>
                <p><strong>3. Điều kiện máy cũ tham gia:</strong></p>
                <ul>
                    <li>Máy có thể mở, tắt nguồn, sạc nguồn, không lỗi khởi động.</li>
                    <li>Máy đã được tắt hoặc ngắt hoạt động và log out khỏi tất cả các tính năng bảo mật máy và khoá máy
                        từ xa như: Báo mất điện thoại hoặc tablet, khóa Android, khóa màn hình, khóa mã pin, khóa vân
                        tay, khóa mã đăng nhập, khóa nhận diện khuôn mặt...</li>
                    <li>Không bị hỏng hoặc bể, vỡ LCD, LCD không bị hỏng điểm ảnh, sọc màn hình, hiển thị mờ, chảy mực,
                        bầm màu, lưu ảnh màn hình,...</li>
                </ul>
                <p>Chương trình Thu Cũ Đổi Mới (áp dụng trên các hệ thống TopZone trên toàn quốc):</p>
                <ul>
                    <li><a href="" target="_blank" title="iPhone 14" type="iPhone 14">iPhone 14</a> Series, <a href=""
                            target="_blank" title="iPad 10" type="iPad 10">iPad 10</a>, <a href="" target="_blank"
                            title="iPad Pro M2" type="iPad Pro M2">iPad Pro M2</a>: Tài trợ đến 2 triệu.</li>
                    <li>Các model iPhone, iPad khác: Không có tiền hỗ trợ.</li>
                </ul>
                <p><em><strong>Lưu ý:</strong> Liên hệ nhân viên cửa hàng để biết chính xác danh sách model được áp
                        dụng.</em></p>
                <div class="warpper-info">


                </div>

            </div>
       
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="../../chitietsanpham/cart.js"></script>
    <script>
        $(document).ready(function(){
            $('.btnCheckout').click(function(){
                window.location.href='../../thanhtoan';
            });
            $("h3").css("background-color");
        });
    </script>
    <!-- <a href="/watchdetail/watch.php">Xem chi tiết</a> -->