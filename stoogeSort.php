<?php
function stoogeSort(&$arr, $end, $start=0)
{
    if($arr[$start]>$arr[$end-1]){
        $item = $arr[$start];
        $arr[$start] = $arr[$end-1];
        $arr[$end-1] = $item;
    }
    if(($end-$start)>2){
        $number = floor(($end-$start)/3);
        stoogeSort($arr, $end-$number, $start);
        stoogeSort($arr,$end, $number+$start);
        stoogeSort($arr, $end-$number, $start);
    };
    return $arr;
}