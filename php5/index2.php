<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
include_once "function.php";
$r =5;
$ketqua = tinhchuvihinhtron($r);
echo "tinh chu vi hinh tròn";
echo "<br>";
var_dump($ketqua);
/*
 * Xuất hiện lỗi
 * Fatal error: Uncaught Error: Call to undefined function tinhchuvihinhtron() in E:\xampp\htdocs\1902e\M6.PHP\day5\project-include\index1.php:19 Stack trace: #0 {main} thrown in E:\xampp\htdocs\1902e\M6.PHP\day5\project-include\index1.php on line 19
 * Do không tìm thầy hàm tính chu vi hình tròn
 */
?>
</body>
</html>
