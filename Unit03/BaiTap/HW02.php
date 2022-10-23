<?php
$input = array(1,8,56,4,7);
echo "<pre>";
print_r($input);
echo "</pre>";
$tmp="";
for ($i = 0, $j = count($input)-1; $i < $j; $i++, $j--){
    $temp = $input[$i];
    $input[$i]=$input[$j];
    $input[$j]=$temp;

}
echo "<pre>";
    print_r($input);
echo "</pre>";