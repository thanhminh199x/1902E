<?php

$json1 = '["Ngh\u1ec7 An","H\u00e0 t\u0129nh","H\u00e0 N\u1ed9i"]';
$json2 = '{"name":"Chu Thanh Minh","age":23,"location":"Ngh\u1ec7 An"}';

$convert1 = json_decode($json1);
$convert2 = json_decode($json2);

echo "<pre>";
print_r($convert1);
echo "</pre>";
echo "<pre>";
print_r($convert2);
echo "</pre>";