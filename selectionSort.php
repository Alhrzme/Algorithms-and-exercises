<?php
function selectionSort($arr)
{
    for($i=0; $i<(count($arr)-1); $i++){
        $min = $i;
        for($j=$i+1; $j<count($arr); $j++){
            if($arr[$j]<$arr[$min]){
                $min = $j;
            }
        }
        $swapNum = $arr[$i];
        $arr[$i] = $arr[$min];
        $arr[$min] = $swapNum;

    }
    return $arr;
}