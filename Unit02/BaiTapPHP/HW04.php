<?php
//Tính tổng s= 1 + 1/2 +1/3 + ... +1/100
$n =100;
$sum=0;
for($i =1 ; $i <=$n;$i++){
    $sum += 1/$i;
}
echo "Tổng S=".$sum;

?>