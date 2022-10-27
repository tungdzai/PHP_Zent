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
    "name" => "IPhone 14 pro max 1TB",
    "price" => 50000000,
    "quantily" => 60,
    "image" => "https://cdn.hoanghamobile.com/i/productlist/dsp/Uploads/2022/09/08/1111.png",

);
$product_list[] = array(
    "id" => "IP3",
    "name" => "IPhone 14 pro max 1TB",
    "price" => 50000000,
    "quantily" => 10,
    "image" => "https://cdn.hoanghamobile.com/i/productlist/dsp/Uploads/2022/09/08/1111.png",

);
$product_list[] = array(
    "id" => "IP4",
    "name" => "IPhone 14 pro max 1TB",
    "price" => 50000000,
    "quantily" => 70,
    "image" => "https://cdn.hoanghamobile.com/i/productlist/dsp/Uploads/2022/09/08/1111.png",

);
$_SESSION["DataSanPham"] = $product_list;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Danh sách sản phẩm trong kho</h2>
    <a style="background-color: aqua;padding: 3px 10px;border-radius: 5px" href="Cart.php">Cart</a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá tiền</th>
            <th>Số lượng</th>
            <th>Hình ảnh</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($product_list as $key => $product) { ?>
            <tr>
                <td><?= $product["id"] ?></td>
                <td><?= $product["name"] ?></td>
                <td><?= $product["price"] ?></td>
                <td><?= $product["quantily"] ?></td>
                <td><img width="100px" height="100px" src="<?= $product["image"] ?>" alt=""></td>
                <td>
                    <button style="background-color: #0066ff; border: none ;padding: 1px 25px;color: white;font-size: 20px;border-radius: 10px">
                        <a href="addToCart.php?id=<?= $key ?>" style="color: white">Thêm</a>
                    </button>
                </td>
            </tr>
        <?php }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>
