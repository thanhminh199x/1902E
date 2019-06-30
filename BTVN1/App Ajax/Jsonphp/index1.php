<?php

$phpArray = array("Nghệ An", "Hà tĩnh", "Hà Nội");
Class Student
{
    public $name;
    public $age;
    public $location;
    public function __construct($name, $age, $location)
    {
        $this->name = $name;
        $this->age = $age;
        $this->location = $location;
    }
}
    $Minh = new Student("Chu Thanh Minh", 23, "Nghệ An");
echo "<pre>";
print_r($phpArray);
echo "</pre>";
echo "<pre>";
echo "<pre>";
print_r($Minh);
echo "</pre>";
/**
 * Chuyển đối tượng và mảng trong php sang chuỗi json
 * Cú pháp: json_encode()
 */
$phpJson1 = json_encode($phpArray);
echo "<pre>";
print_r($phpJson1);
echo "</pre>";
$phpJson2 = json_encode($Minh);
echo "<pre>";
print_r($phpJson2);
echo "</pre>";

/**
 * Giá trị trả về của 2 hàm là chuỗi mã json
 * $phpJson1 : ["Nghệ An","Hà Tĩnh","Hà Nội"]
 * $phpJson2 : {"name":"Chu Thanh Minh","age":21,"location":"Nghệ An"}
 *
 * {"name":"Chu Thanh Minh","age":23,"location":"Ngh\u1ec7 An"}**/