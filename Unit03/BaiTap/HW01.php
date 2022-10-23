<?php
$input = array(1,8,56,4,59);
$tmp="";
for($i=0;$i<count($input);$i++){
    for ($j=$i+1;$j<count($input);$j++){
        if ($input[$j]<$input[$i]){
            $tmp=$input[$i];
            $input[$i]=$input[$j];
            $input[$j]=$tmp;
        }
    }
}
echo $input[count($input)-1];
