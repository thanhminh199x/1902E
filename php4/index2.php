<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Hàm trong PHP</h1>
<pre>
        Hàm là 1 tập hợp các dòng code để thực hiện 1 chức năng
        ví dụ như hàm tính chu vi hình tròn , hàm tính diện tích hình chữ nhật
        hàm xuất file PDF ...
        - Thay vì phải viết lại nhiều dòng code khi thực hiện 1 chức năng
        nhiều lần người ta sử dụng hàm . Để khi cần dùng chỉ cần gọi tên hàm và sử dụng
        Hàm khai báo bằng từ khóa function
        function tên_hàm(tham_số_1, tham_số_2 ...) {
            // code chạy trong hàm

            // return có thể có hoặc không
            // và sẽ kết thúc hàm tại câu lệnh return
            return giá_trị;


          Nếu không truyền biến hoặc là giá trị cho tham số của hàm
        thì sẽ bị lỗi
        Fatal error: Uncaught ArgumentCountError:
        Too few arguments to function tinhchuvihinhtron(),
        0 passed in E:\xampp\htdocs\1902e\M6.PHP\day4\index7.php on line 25
        and exactly 1 expected in E:\xampp\htdocs\1902e\M6.PHP\day4\index7.php:18
        Stack trace: #0 E:\xampp\htdocs\1902e\M6.PHP\day4\index7.php(25): tinhchuvihinhtron() #1
        {main} thrown in E:\xampp\htdocs\1902e\M6.PHP\day4\index7.php on line 18

        Để tránh điều này nếu trong 1 số trường hợp người ta sẽ gán giá tri mặc định
        cho tham số


        - Biến cục bộ : chỉ có ảnh hưởng và chỉ sử dụng được trong 1 không gian nhất định
        - Biến toàn cục : có ảnh hưởng và có thể sử dụng ở mọi nơi
        - Nếu tên biến bị trùng thì nếu sử dụng ngoài hàm thì php sẽ lấy giá trị của biến
        toàn cục
        ***
        Tham số khi khai báo hàm là biến cục bộ và chỉ có tác dụng trong hàm
        ví dụ như là biến $r là biến cục bộ
        }
    </pre>
<?php
/*
 * khai báo hàm $r là tham số cần truyền vào
 */
function tinhchuvihinhtron($r) {
    $chuvi = 3.14*$r*2;
    return $chuvi;
}
//gọi hàm
$ketqua = tinhchuvihinhtron(5);
echo "<br> chu vi hinh tron la : ". $ketqua;


function tinhdientichhinhtron($r){
    $dientich = 3.14*$r*$r;
    return $dientich;
}
    //gọi hàm
    $ketqua1 = tinhdientichhinhtron (10);
        echo "<br> dien tich hinh tron la: " . $ketqua1;
    echo '<br>Test thử biến $r: ' . $r;
?>
</body>
</html>
