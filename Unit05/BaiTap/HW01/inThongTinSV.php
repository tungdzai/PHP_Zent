<?php
session_start();
$infoSV = $_SESSION["thongtinSV"];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Thông tin sinh viên</title>
</head>
<body>
<div class="container">
    <?php
    foreach ($infoSV as $value) { ?>
        <ul>
            <p>---</p>
            <li>Họ và tên:<?= $value["fullname"] ?></li>
            <li>Giới tính: <?= $value["sex"] ?> </li>
            <li>Ngày sinh:  <?= $value["bithday"] ?> </li>
            <li>Quê quán: <?= $value["village"] ?> </li>
            <li>Ngoại ngữ:
                <?php
                foreach ($value["ngoaingu"] as $cacngonngu) {
                    echo $cacngonngu." ";
                }
                ?>
            </li>
            <li>Thông tin thêm: <?= $value["intro"] ?> </li>
        </ul>
    <?php } ?>

</div>
</body>
</html>
