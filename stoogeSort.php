<?php
function stoogeSort(&$arr, $end, $start=0)
{
    echo 'start= ', $start, ' end= ', $end, '<br>';
    if($arr[$start]>$arr[$end-1]){
        $item = $arr[$start];
        $arr[$start] = $arr[$end-1];
        $arr[$end-1] = $item;
        echo 'ZAMENA! ', $item, ' NA ', $arr[$start], '<br>' ;
    }
    if(($end-$start)>2){
        print_r($arr);
        echo '<br>';
        $number = floor(($end-$start)/3);
        stoogeSort($arr, $end-$number, $start);
        stoogeSort($arr,$end, $number+$start);
        stoogeSort($arr, $end-$number, $start);
    };
    return $arr;
}

$arr = array(234, 88, 5, 34, 7, 12, 78, 3, 4, 34, 67, 7,9);
var_dump($arr);
var_dump(stoogeSort($arr, count($arr)));