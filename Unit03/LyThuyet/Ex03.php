<?php
function chanLe($number){
    if ($number%2==0){
        echo "Số chẵn";

    }else{
        echo "Số lẻ";
    }
}
function sum($a,$b,$c=false){
    $tong=$a+$b;
    if ($c != false){
        $tong+= $c;
    }
    return $tong;
}
chanLe(11);
echo "<br/>";
$tong=sum(10,20,30);