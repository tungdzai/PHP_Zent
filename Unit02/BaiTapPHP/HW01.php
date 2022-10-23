<?php
for ($i=1;$i<=100;$i++){
    if($i%3==0&&$i%5==0){
        echo "<br/>FizzBuzz";
    }else{
        if($i%3==0){
            echo "Fizz";
        }elseif($i%5==0){
            echo "Buzz";
        }
    }
}
?>