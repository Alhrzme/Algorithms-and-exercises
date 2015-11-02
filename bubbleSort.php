<?php
function bubbleSort($arr)
{
    for($i=count($arr)-1; $i>=0; $i--){
        for($j=0; $j<$i; $j++){
            if($arr[$j+1]<$arr[$j]){
                $item = $arr[$j+1];
                $arr[$j+1] = $arr[$j];
                $arr[$j] = $item;
            }
        }
    }
    return $arr;
}