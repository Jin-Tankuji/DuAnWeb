<?php
// định nghia url.
$url_server =$_SERVER['HTTP_HOST'];
define('_WEB_URL', 'http://' . $url_server);

$arr_name_project = explode('/', $_SERVER['REQUEST_URI']);
define('_NAME_PROJECT', $arr_name_project[1]); 
define('_WEB_ROOT', 'http://' . $_SERVER['HTTP_HOST'] . '/'. _NAME_PROJECT);

require_once("database.php");

$username = "root";
$password = "";
$sever = "localhost";
$dbname = "shop_apple";

$conn = mysqli_connect("$sever", "$username", "$password", "$dbname")
    or die("Không thể kết nối đến database");

mysqli_select_db($conn, "$dbname") or die("Chưa có database");

mysqli_query($conn, "SET NAMES 'utf8'");
