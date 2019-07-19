<?php
function helloword($str)
{
    echo "<br>Hello".$str;

}
/**
 * Lambda Hàm không tên
 * @param $str
 *
 */
/**
 * Clouse là lambda nhưng có thể sử dụng nhưng biến bên ngoài
 *  Khi gán lambda cho 1 biến thì phải kết thúc ngoặc ngọn bằng ;
 * @param $str
 */

$lang ="PHP";

$hello = function($str) use ($lang){
    echo "<br>Hello".$str.$lang;

};
//gọi lambda khi được gắn vào biến
$hello("World");