<?php
//echo "HelloWorld";
//echo "<br/>";
//echo "Hihi"."Haha";
//var_dump($_SERVER);
//var_dump(phpinfo());
//echo phpinfo()
for ($i=1;$i<=10;$i++){
    if ($i<10){
        echo "$i -";
    }else{
        echo "$i .";
    }
}
echo "<br/>";
$sum=0;
for ($i =1;$i<=20;$i++){
    $sum+=$i;
}
echo $sum;
echo "<br/>";

for ( $i=1 ;$i<=5 ;$i++){
    for ( $j=1; $j <=$i; $j++){
        echo "* ";
    }
    echo "<br>";
};
for($i=5; $i >= 1; $i--)
{
    for($j=1; $j <= $i; $j++)
    {
        echo ' * ';
    }
    echo '<br>';
}

//Tính giai thừa ;
$n=10;
$x=1;
for ($i=1 ;$i<=10;$i++){
    $x*=($i+1);
}
echo "Giá trị của $n!:$x ";
echo '<br>';

for ($i =2 ; $i<=9;$i++){
    for ($j=1;$j<=9;$j++) {
        $n = $i * $j;
        echo "$i x $j = " . $n;
        echo "<br/>";
    }
}

echo "<br/>";

$n = 5;
echo "n = " . $n . "<br>";
$count = 1;
for ($i = $n; $i > 0; $i--) {
    for ($j = $i; $j < $n + 1; $j++) {
        printf("%4s", $count);
        $count++;
    }
    echo "<br>";
}
?>
