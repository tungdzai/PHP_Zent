<?php

//Lấy data từ form
$heso_a = isset($_POST ['heso_a']) ? $_POST ['heso_a'] : ''; // a ?? b === a ? a : b ==== a ? b : c     
$heso_b = isset($_POST ['heso_b']) ? $_POST ['heso_b'] : '';
$heso_c = isset($_POST ['heso_c']) ? $_POST ['heso_c'] : '';

if ($heso_a != '' && $heso_b != '' && $heso_c != ''){
    giaiPHuongTrinhBac2($heso_a,$heso_b,$heso_c);
}

//Giải phương trình bậc 2:
function giaiPHuongTrinhBac2($a,$b,$c){
    if ($a == ""){
        $a = 0;
    }
    if ($b== ""){
        $b = 0;
    }
    if ($c == ""){
        $c = 0;
    }
    echo "Phương trình: " . $a . "x2 + " . $b . "x + " . $c . " = 0";
    echo "<br>";
    //Trường hợp a=0 && b =0
    if($a==0){
        if ($b == 0) {
            if( $c == 0){
                echo ("Phương trình vô số nghiệm!");
            } else {
                echo ("Phương trình vô nghiệm!");
            }
        } else {
            echo ("Phương trình có một nghiệm: " . "x = " . (- $c / $b));
        }
        return;
        
    }
    // Delta.
    $delta = $b * $b - 4 * $a * $c;
    $x1 = "";
    $x2 = "";
    if($delta == 0){
        $x1 = (- $b / (2 * $a));
        echo ("Phương trình có nghiệm kép: x1 = x2 = " . $x1);
    }elseif ($delta > 0) {
        $x1 = (- $b + sqrt ( $delta )) / (2 * $a);
        $x2 = (- $b - sqrt ( $delta )) / (2 * $a);
        echo ("Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
    }else{
        echo "Phương trình vô nghiệm !";
    }
}
?>
<form action="" method="post">
    <p>Giá trị của hệ số a:</p>
    <input type="number" name="heso_a" value="<?php $heso_a?>">
    <p>Giá trị của hệ số b:</p>
    <input type="number" name="heso_b" value="<?php $heso_b?>">
    <p>Giá trị của hệ số c:</p>
    <input type="number" name="heso_c" value="<?php $heso_c?>">
    <input type="submit" value="Kết quả">
</form>
