<?php
class Format{
    public function formatDate($date){
        $arr1=explode("-",$date);
        $arr2=array_reverse($arr1);
        $formatDate="";
        foreach ($arr2 as $index => $item) {
            $formatDate .= $item."/";
        }
        return rtrim($formatDate,"/");
    }
}
