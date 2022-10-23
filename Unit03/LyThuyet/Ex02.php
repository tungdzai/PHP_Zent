<?php
$arr_info=array();
$arr_info[0][0]=10;
$arr_info[0][1]=20;
$arr_info[0][2]=30;

$arr_info[1][0]=40;
$arr_info[1][1]=50;
$arr_info[1][2]=60;

$arr_info[2][0]=70;
$arr_info[2][1]=80;
$arr_info[2][2]=90;

echo "<pre>";
    print_r($arr_info);
echo "</pre>";

$arr_name = array("Nguyen Viet Tung","Nguyen Duy Hung");
$arr_info[2][2]=$arr_name;
echo "<pre>";
    print_r($arr_info);
echo "</pre>";
echo $arr_info[2][2][1];

// Mảng không tuần tự
$arr_database=array();
$arr_database[]=array(
    "ID"=>"123",
    "name"=>"Nguyen Viet Tung",
    "numberPhone"=>"0334463900",
    "email"=>"tungnguyen0603202@gmail.com"
);
$arr_database[]=array(
    "ID"=>"124",
    "name"=>"Dinh Thu Hien",
    "numberPhone"=>"0335188326",
    "email"=>"thuhien070302@gmail.com",
);
$arr_database[]=array(
    "ID"=>"125",
    "name"=>"Nguyen Duy Hung",
    "numberPhone"=>"0387986597",
    "email"=>"duyhung1310@gmail.com",
);

echo "<pre>";
    print_r($arr_database);
echo "</pre>";
echo $arr_database[0]["name"];

foreach ( $arr_database as $key => $info) {
    echo "<br/>";
    echo "<br/> Thứ tự sinh viên :".($key+1);
    echo "<br/> -ID :".$info["ID"];
    echo "<br/> -Họ và Tên :".$info["name"];
    echo "<br/> -Số điện thoại :".$info["numberPhone"];
    echo "<br/> -Email :".$info["email"];


}