<?php
function checkSoNGuyenTo($a){
    $canbacA= sqrt($a);
    if($a<2){
        return false;
    }
    for($i = 2 ;$i <= $canbacA; $i++){
        if( $a % $i == 0 ){
            return false;
        }
    }
    return true;

}
echo "Các số nguyên tố nhỏ hơn 100 :";
for($i =0 ;$i < 100 ;$i++){
    if(checkSoNGuyenTo($i)){
        echo $i." , ";
    }
}
?>