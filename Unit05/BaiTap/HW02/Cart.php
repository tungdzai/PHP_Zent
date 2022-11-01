<?php
session_start();
$productcart = $_SESSION["Cart"];

$sum = 0;
foreach ($productcart as $key => $product) {
    $sum += $product["price"]*$product["quantily"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Danh sách sản phẩm trong giỏ hàng</h2>
    <a href="product_list.php">Xem trang sản phầm</a>
    <table class="table table-bordered" >
        <thead>
        <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá tiền</th>
            <th>Số lượng</th>
            <th>Hình ảnh</th>
            <th>Thành tiền</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($productcart as $key => $product) { ?>
            <tr>
                <td><?= $product["id"] ?></td>
                <td><?= $product["name"] ?></td>
                <td><?= number_format($product["price"]) ?></td>
                <td>
                    <input type="number" name="quantily_cart" value="<?= $product["quantily"] ?>" min=1>
                </td>

                <td><img width="100px" height="100px" src="<?= $product["image"] ?>" alt=""></td>
                <td><?= number_format($product["price"] * $product["quantily"]) ?></td>
                <td>
                    <button style="background-color: red; border: none ;padding: 1px 25px;color: white;font-size: 20px;border-radius: 10px">
                        <a href="deleteProduct.php?id=<?= $key ?>" style="color: white">DELETE</a>
                    </button>
                </td>
            </tr>
        <?php }
        ?>
        </tbody>
    </table>
    <p>Tổng tiền: <?= number_format($sum) . " VNĐ" ?> </p>
</div>
</body>
</html>
