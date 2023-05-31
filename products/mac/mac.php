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
        <link rel="stylesheet" href="../../style.css">
        <link rel="stylesheet" href="../../chitietsanpham/cart.css">
        <link rel="stylesheet" href="../../chitietsanpham/detail.css">
        <title>Macbook, Mac mini, iMac chính hãng</title>
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

            input[type="number"]{
                color: #000000;
            }
        </style>
    </head>
    <body>
        <header>
            <div class="logo">
                <a href="../../index.php">
                    <img src="../../img/MR.LEE.png" style="width: 100px; height: 50px; float: left"></img>
                </a>
            </div>
            <div class="menu" style="padding-right: 8px; font-family: Times New Roman">
            <li><a href="../iphone/iphone.php">iPhone</a>
                <ul class="menu1">
                    <li><a href="../iphone/iphone_phanloai.php?phanloai=1">iPhone 14</a></li>
                    <li><a href="../iphone/iphone_phanloai.php?phanloai=2">iPhone 13</a></li>
                    <li><a href="../iphone/iphone_phanloai.php?phanloai=3">iPhone 12</a></li>
                    <li><a href="../iphone/iphone_phanloai.php?phanloai=4">iPhone 11</a></li>
                    <li><a href="../iphone/iphone_phanloai.php?phanloai=5">iPhone SE</a></li>
                </ul>
            </li>
            <li><a href="./mac.php">Mac</a>
                <ul class="menu2">
                    <li><a href="./mac_phanloai.php?phanloai=6">Macbook Air</a></li>
                    <li><a href="./mac_phanloai.php?phanloai=7">Macbook Pro</a></li>
                    <li><a href="./mac_phanloai.php?phanloai=20">iMac</a></li>
                    <li><a href="./mac_phanloai.php?phanloai=21">Mac Mini</a></li>
                </ul>
            </li>
            <li><a href="../ipad/ipad.php">iPad</a>
                <ul class="menu3">
                    <li><a href="../ipad/ipad_phanloai.php?phanloai=8">iPad Gen</a></li>
                    <li><a href="../ipad/ipad_phanloai.php?phanloai=9">iPad Pro</a></li>
                    <li><a href="../ipad/ipad_phanloai.php?phanloai=10">iPad Air</a></li>
                </ul>
            </li>
            <li><a href="../watch/watch.php">Watch</a>
                <ul class="menu4">
                    <li><a href="../watch/watch_phanloai.php?phanloai=11">Apple Watch Series 7</a></li>
                    <li><a href="../watch/watch_phanloai.php?phanloai=12">Apple Watch Series 8</a></li>
                    <li><a href="../watch/watch_phanloai.php?phanloai=13">Apple Watch Ultra</a></li>
                </ul>
            </li>
            <li><a href="../homepod/homepod.php">HomePod</a>
                <ul class="menu5">
                    <li><a href="../homepod/homepod_phanloai.php?phanloai=14">HomePod Mini</a></li>
                    <li><a href="../homepod/homepod_phanloai.php?phanloai=15">HomePod</a></li>
                </ul>
            </li>
            <li><a href="../phukien/phukien.php">Phụ kiện</a>
                <ul class="menu6">
                    <li><a href="../phukien/phukien_phanloai.php?phanloai=16">Airpods</a></li>
                    <li><a href="../phukien/phukien_phanloai.php?phanloai=17">Airtags</a></li>
                    <li><a href="../phukien/phukien_phanloai.php?phanloai=22">Magsafe</a></li>
                    <li><a href="../phukien/phukien_phanloai.php?phanloai=18">Case</a></li>
                    <li><a href="../phukien/phukien_phanloai.php?phanloai=19">Keyboard</a></li>
                </ul>
            </li>
        </div>
            <form id="products-search" method="GET">
                <div class="others">
                    <li><input placeholder="Tìm kiếm" type="text" value="<?=isset($_GET['tensanpham']) ? $_GET['tensanpham'] : ""?>" name="tensanpham"><i class="fas fa-search"></i></li>
                    <li class="cart-li"><span class="fa fa-shopping-bag" style="background-color: transparent; color: white"></span>
                        <div class="cart">
                            <div class="cart-header">
                                <span>Giỏ hàng</span>
                            </div>
                            <div class="cart-list">

                            </div>
                            <div class="cart-footer cartPayment">
                                <div class="cart-footer_left">
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
                    <li>
                        <?php
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
        <!------------------------------ Category ------------------------------>
        <section class="cartegory" style="padding-top: 89px">
            <div class="container">
                <div class="row">
                    <div class="cartegory-left">    
                        <ul>
                            <li class="cartegory-left-li"><a href="#">iPhone</a>
                                <ul>
                                    <li><a href="/products/iphone/iphone_phanloai.php?phanloai=1">iPhone 14</a></li>
                                    <li><a href="/products/iphone/iphone_phanloai.php?phanloai=2">iPhone 13</a></li>
                                    <li><a href="/products/iphone/iphone_phanloai.php?phanloai=3">iPhone 12</a></li>
                                    <li><a href="/products/iphone/iphone_phanloai.php?phanloai=4">iPhone 11</a></li>
                                    <li><a href="/products/iphone/iphone_phanloai.php?phanloai=5">iPhone SE</a></li>
                                </ul>
                            </li>
                            <li class="cartegory-left-li"><a href="#">Mac</a>
                                <ul>
                                    <li><a href="/products/mac/mac_phanloai.php?phanloai=6">Macbook Air</a></li>
                                    <li><a href="/products/mac/mac_phanloai.php?phanloai=7">Macbook Pro</a></li>
                                    <li><a href="/products/mac/mac_phanloai.php?phanloai=20">iMac</a></li>
                                    <li><a href="/products/mac/mac_phanloai.php?phanloai=21">Mac Mini</a></li>
                                </ul>
                            </li>
                            <li class="cartegory-left-li"><a href="#">iPad</a>
                                <ul>
                                    <li><a href="/products/ipad/ipad_phanloai.php?phanloai=8">iPad Gen</a></li>
                                    <li><a href="/products/ipad/ipad_phanloai.php?phanloai=9">iPad Pro</a></li>
                                    <li><a href="/products/ipad/ipad_phanloai.php?phanloai=10">iPad Air</a></li>
                                </ul>
                            </li>
                            <li class="cartegory-left-li"><a href="#">Watch</a>
                                <ul>
                                    <li><a href="/products/watch/watch_phanloai.php?phanloai=11">Apple Watch Series 7</a></li>
                                    <li><a href="/products/watch/watch_phanloai.php?phanloai=12">Apple Watch Series 8</a></li>
                                    <li><a href="/products/watch/watch_phanloai.php?phanloai=13">Apple Watch Ultra</a></li>
                                </ul>
                            </li>
                            <li class="cartegory-left-li"><a href="#">HomePod</a>
                                <ul>
                                    <li><a href="/products/homepod/homepod_phanloai.php?phanloai=14">HomePod Mini</a></li>
                                    <li><a href="/products/homepod/homepod_phanloai.php?phanloai=15">HomePod</a></li>
                                </ul>
                            </li>
                            <li class="cartegory-left-li"><a href="#">Phụ kiện</a>
                                <ul>
                                    <li><a href="/products/phukien/phukien_phanloai.php?phanloai=16">Airpods</a></li>
                                    <li><a href="/products/phukien/phukien_phanloai.php?phanloai=17">Airtags</a></li>
                                    <li><a href="/products/phukien/phukien_phanloai.php?phanloai=22">Magsafe</a></li>
                                    <li><a href="/products/phukien/phukien_phanloai.php?phanloai=18">Case</a></li>
                                    <li><a href="/products/phukien/phukien_phanloai.php?phanloai=19">Keyboard</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    
                    <!------------------------------ Products ------------------------------>
                    <div class="products">
                        <?php
                            $param = "";
                            $orderCondition = "";
                            $sortParam = "";
                            // Tìm kiếm
                            $search = isset($_GET['tensanpham']) ? $_GET['tensanpham'] : "";
                            if ($search)
                            {
                                $where = "WHERE tensanpham LIKE '%" . $search . "%'";
                                $param .= "tensanpham=".$search."&";
                                $sortParam = "tensanpham=".$search."&";
                            }
                            // Sắp xếp 
                            $orderField = isset($_GET['field']) ? $_GET['field'] : "";
                            $orderSort = isset($_GET['sort']) ? $_GET['sort'] : "";
                            if (!empty($orderField) && !empty($orderSort))
                            {
                                $orderCondition = "ORDER BY ". $orderField." ". $orderSort;
                                $param .= "field=".$orderField."&sort=".$orderSort."&";
                            }

                            require("../../connect.php");
                            $item_per_page = !empty ($_GET['per_page'])?$_GET['per_page']: 9;
                            $page = null;
                            $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
                            $offset = ($current_page - 1) * $item_per_page;

                            if ($search)
                            {
                                $products = mysqli_query($conn, "SELECT * FROM tb_sanpham ".$where." ".$orderCondition." LIMIT ".$item_per_page." OFFSET ".$offset);
                                $total_item = mysqli_query($conn, "SELECT * FROM tb_sanpham WHERE tensanpham LIKE '%" . $search . "%'");
                            }
                            else 
                            {
                                $products = mysqli_query($conn, "SELECT * FROM tb_sanpham WHERE id_mathang = 2 ".$orderCondition." LIMIT ".$item_per_page." OFFSET ".$offset);
                                $total_item = mysqli_query($conn, "SELECT * FROM tb_sanpham WHERE id_mathang = 2");
                            }
                            $total_item = $total_item->num_rows;
                            $total_page = ceil($total_item / $item_per_page);

                                while($row = mysqli_fetch_assoc($products)) {
                                    echo "<a href = ../../chitietsanpham/detail.php?proid=".$row['id_sanpham'].">"; // Phần để thao tác chuyển sang thẻ mới  //
                                    echo "<div class='container_main-product' style='font-family: \"Times New Roman\";'>";
                                    echo "<img src =".$row['hinhanh']." </img>";
                                    echo "<div class='product-name' style='padding: 0px'> ";
                                    echo "<h3>" . $row['tensanpham'] . "</h3>";
                                    echo "</div>";
                                    echo "<div class='product-price' style='padding: 0px'>";
                                    echo "<h2 >" . number_format($row['giaban']) . "</h2>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</a>";
                        }
                        ?>
                    </div>
                    <div class="cartegory-right row">
                        <div class="cartegory-right-top-select">
                            <select id="sort-box" onchange="this.options[this.selectedIndex].value && (window.location=this.options[this.selectedIndex].value);">
                                <option value="">Sắp xếp giá</option>
                                <option <?php if(isset($_GET['sort']) && $_GET['sort'] == "asc") { ?> selected <?php } ?> value="?<?=$sortParam?>field=giaban&sort=asc">Giá tăng dần</option>
                                <option <?php if(isset($_GET['sort']) && $_GET['sort'] == "desc") { ?> selected <?php } ?> value="?<?=$sortParam?>field=giaban&sort=desc">Giá giảm dần</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="cartegory-right-bottom row">
            <?php
                if ($current_page > 3) {
                    $first_page = 1;
                    echo "<a class='pagelink' href='?".$param."page=".$first_page."'>First</a>";
                }

                if ($current_page > 1) {
                    $prev = $current_page - 1;
                    echo "<a class='pagelink' href='?".$param."page=".$prev."'>Prev</a>";
                }

                for ($i = 1; $i <= $total_page; $i++) {
                    if ($i != $current_page) {
                        if ($i > $current_page - 3 && $i < $current_page + 3) {
                            echo "<a class='pagelink' href='?".$param."page=".$i."'>".$i."</a>";
                        }
                    } else {
                        echo "<strong class='pagelink' href='?".$param."page=".$i."'>".$i."</strong>";
                    }
                }

                if ($current_page < $total_page) {
                    $next = $current_page + 1;
                    echo "<a class='pagelink' href='?".$param."page=".$next."'>Next</a>";
                }

                if ($current_page < $total_page - 3) {
                    $last_page = $total_page;
                    echo "<a class='pagelink' href='?".$param."page=".$last_page."'>Last</a>";
                }
            ?>
        </div>
        <section id="Slide">
        </section>
        <!------------------------------ app-container ------------------------------>
        <section class="app-container" style="font-family: Times New Roman">
            <p>Nhận thông báo từ Mr.Lee</p>
            <div class="input-email">
                <input type="text" placeholder="Nhập email của bạn" style="color: white;">
                <i class="fas fa-arrow-left" style="bottom: 13px"></i>
            </div>
        </section>
        <!------------------------------ footer ------------------------------>
        <div class="footer-items" style="font-family: Times New Roman">
            <li><a href=""></a>Liên hệ</li>
            <li><a href=""></a>Tuyển dụng</li>
            <li><a href=""></a>Giới thiệu</li>
            <li>
                <a href="" class="fab fa-facebook-f"></a>
                <a href="" class="fab fa-twitter"></a>
                <a href="" class="fab fa-youtube"></a>
            </li>
        </div>
        <div class="footer-text" style="font-family: Times New Roman">
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>"
               <script src="../../index.js"></script>
        <script src="../../chitietsanpham/cart.js"></script>
        <script>
            $(document).ready(function(){
                $('.btnCheckout').click(function(){

                    window.location.href='../../thanhtoan';
                });
            });
        </script>
    </body>
</html>