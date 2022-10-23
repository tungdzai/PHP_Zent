<?php
//Cách khai báo mảng

//C1
$array_name = array("Zent", 6, "Nguyen Duy Hung", 9.4);
//C2 khai báo mảng gắn với key.
$arr_name = array(
    0 => "Zent",
    1 => 6,
    2 => "Nguyen Viet Tung",
    3 => 9.4
);
var_dump($arr_name);
echo "<br/>";
print_r($arr_name);
echo "<br/>";

echo "<pre>";
    print_r($arr_name);
echo "</pre>";

//Xóa phần từ của mảng unset
unset($arr_name[1]);
echo "<pre>";
    print_r($arr_name);
echo "</pre>";

//Xóa phần từ của mảng array_splice
echo "<pre>";
    print_r($array_name);
echo "</pre>";
array_splice($array_name,2,1);
echo "<pre>";
    print_r($array_name);
echo "</pre>";

//Xóa phẩn dự dựa theo sự khác nhau của 2 mảng .Array_diff.
$arr_int=array(1,2,3,4,5,6,7,8,9);
echo "<pre>";
    print_r($arr_int);
echo "</pre>";
$arr_new= array_diff($arr_int,[1,3,5]);
echo "<pre>";
    print_r($arr_new);
echo "</pre>";

//foreach
$arr_Student=array(
  0=>"Tung",
  1=>"Hien",
  2=>"Hung",
);
echo "<pre>";
    print_r($arr_Student);
echo "</pre>";

foreach ( $arr_Student as $giaTriKey => $value) {
    echo "<br/>".$giaTriKey.":".$value;
}

foreach ( $arr_Student as $giaTriKey ) {
    echo "<br/>".$giaTriKey;
}

