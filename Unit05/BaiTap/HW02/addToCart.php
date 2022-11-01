<?php
session_start();
$products = $_SESSION["DataSanPham"];

$key = $_GET["id"];
$product = $products[$key];
$product["quantily"] = 1;

foreach ($_SESSION["Cart"] as $key => $productcheck) {
    if ($productcheck["id"] == $product["id"]) {
        $product["quantily"]+=$productcheck["quantily"];
        unset($_SESSION["Cart"][$key]);
    }
}
$_SESSION["Cart"][] = $product;
echo  "<pre>";
print_r($_SESSION["Cart"]);
echo "</pre>";
header('Location:Cart.php');

?>


