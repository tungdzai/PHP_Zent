<?php
$name="   NgUyễn   VIệt tùNg";
$name1=explode(" ",$name);
for ($i=0;$i<count($name1);$i++){
    if ($name1[$i] != null ){
        $nameFomat=ucfirst(strtolower($name1[$i]));
        echo $nameFomat. " ";
    }
}
