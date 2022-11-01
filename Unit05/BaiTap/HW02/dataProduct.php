<?php
session_start();
$product_list = array();
$product_list[] = array(
    "id" => "IP1",
    "name" => "IPhone 14 pro max 1TB",
    "price" => 50000000,
    "quantily" => 100,
    "image" => "https://cdn.hoanghamobile.com/i/productlist/dsp/Uploads/2022/09/08/1111.png",

);
$product_list[] = array(
    "id" => "IP2",
    "name" => "Macbook Air 13 2020 - M1 256GB",
    "price" => 22390000,
    "quantily" => 60,
    "image" => "https://cdn.hoanghamobile.com/i/preview/Uploads/2021/09/23/macmoi256.png",

);
$product_list[] = array(
    "id" => "IP3",
    "name" => "Tai nghe Apple AirPods Pro",
    "price" => 4750000,
    "quantily" => 10,
    "image" => "https://cdn.hoanghamobile.com/i/preview/Uploads/2020/10/27/image-removebg-preview%20(32).png",

);
$product_list[] = array(
    "id" => "IP4",
    "name" => "Đồng hồ thông minh Apple Watch SE 2022 GPS",
    "price" => 8750000,
    "quantily" => 70,
    "image" => "https://cdn.hoanghamobile.com/i/preview/Uploads/2022/09/09/apple-watch-se-2022-lte-44mm-trang-kem-thumbtz-650x650.png",

);
$_SESSION["DataSanPham"] = $product_list;
?>