<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Session trong PHP</h1>
    <pre>
    https://toidicode.com/session-va-cookie-trong-php-65.html
    Session trong PHP là cách để lưu trữ thông tin trong biến đồng bộ
    trên nhiều trang của website.
    Ví dụ :
    Khi tạo ra 1 session đăng nhập session này sẽ làm việc trên trang chủ ( home.php )
    trang tin tức ( new.php ) trang danh mục ( category.php ) ...
    Session thường được sử dụng để lưu trữ thông tin đăng nhập , data giỏ hàng của khách hàng
    trên các trang mua sắm ...
    Để bắt đầu sử dụng session chúng ta cần có hàm session_start() ở đầu trang web
    hàm này sẽ khởi đầu session trong php
    Biến session được đặt trong 1 biến global của php là $_SESSION
</pre>
<h1>Cách tạo ra 1 session trong PHP</h1>

<?php
// tạo ra 1 session trong php
$_SESSION["user_name"] = "ThanhMinh";
$_SESSION["user_email"] = "Chuthanhminh9x@gmail.com";
$_SESSION["user_location"] = "Nghệ An";
// xem tất cả các session
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>
</body>
</html>
