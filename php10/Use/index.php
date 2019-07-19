<?php
/**
 * Nạp 2 file chứa class category vào
 * Namespace áp dụng để giải quyết vấn đề trùng tên class hay trung tên hàm
 */
include_once "App/Backend/Studen.php";
include_once "App/Fontend/Studen.php";

$Minh = new App\Fontend\Studen();
$Minh = new App\Backend\Studen();
?>
