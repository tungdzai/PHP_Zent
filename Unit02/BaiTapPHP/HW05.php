<?php
$so_nguyen=isset($_POST["so_nguyen"])?$_POST["so_nguyen"]:'';
function sum($so_nguyen){
    $tongChuSo = 0;
    do {
        $tongChuSo = $tongChuSo + ($so_nguyen % 10);// phần dư
        $so_nguyen= floor ( $so_nguyen / 10 );// Phần nguyên

    } while ( $so_nguyen > 0 );
    return $tongChuSo;
}
echo ("Tổng của các chữ số của $so_nguyen là: " .sum($so_nguyen));
?>
<form action="" method="post">
    <input type="number" name="so_nguyen" value="<? $so_nguyen?>">
</form>
