<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
for($i = 1; $i < 10; $i++) {
if ($i == 5) {
// câu lệnh break sẽ tiến hành dừng vòng lặp
break;
}
echo '<br>' . $i;
}

for ($i = 1; $i < 10; $i++) {
    if ($i == 5) {
        // Lệnh continue nó sẽ bỏ qua các câu lệnh bên dưới của vòng lặp
        // và chạy sang lần lặp tiếp theo
        continue;
    }
    echo '<br>' . $i;
}
$arr1 = array(1,2,3,7,9,11);
// Đếm số phần tử của mảng này
// sử dụng hàm count để đếm
echo count($arr1);


$arr1 = array(24,7,28,100,1,7,9);
/**
 * Sắp xếp lại mảng theo thứ tự tăng dần
 * sử dụng hàm sort();
 */
echo "<pre>";
print_r($arr1);
echo "</pre>";
sort($arr1);
echo "<pre>";
print_r($arr1);
echo "</pre>";

$arr1 = array(24,7,28,100,1,7,9);
/**
 * Sắp xếp lại mảng theo thứ tự giảm dần
 * sử dụng hàm rsort();
 */
echo "<pre>";
print_r($arr1);
echo "</pre>";
rsort($arr1);
echo "<pre>";
print_r($arr1);
echo "</pre>";
?>
</body>
</html>
