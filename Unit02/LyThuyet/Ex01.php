<?php
// Khai báo biến tring php thêm " $ " vào trước biến đó
$number= 10;
$name = "Tùng";

var_dump($name); // Kiểm tra kiểu dữ liệu dùng var_dump
echo "Xin chào ".$name;
echo "<br/>";

$bien_toan_cuc="Luật biển - Biến toàn cục"; // $Global
function luat_viet_nam(){
    $bien_cuc_bo= "Đi bên phải đường_ Biến cục bộ";
    echo"Luật trong nước(Cục bộ):".$bien_cuc_bo;
    echo "<br/>";
    echo"Luật quốc tế(Toàn cục):".$GLOBALS["bien_toan_cuc"];
}
luat_viet_nam();

//Hằng số.
define("PI",3.14); // Biến hằng(const)
echo "<br/>".PI;

//Ép kiểu
$string_number="123";
echo "<br/>";
var_dump($string_number);
echo "<br/>";
$number123= (int)$string_number;
var_dump($number123);

?>

