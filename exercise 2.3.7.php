<?php
function exercise($arr, $x)
{
    for($i=0;$i<count($arr);$i++){
        $var = $x - $arr[$i];
        if(binarySearch($arr, $var, 0, count($arr)-1)) return true;;
    }
    return false;
}

function binarySearch($arr, $val, $start, $end)
{
    $num = $end - $start;
    $average = ceil($num/2);
    if($num>1){

        if($arr[$start+$average] == $val) return ($start+$average);
        if($arr[$start+$average] < $val) return binarySearch($arr, $val, $start + $average, $end);
        return binarySearch($arr, $val, $start ,$start + $average-1);
    }
    if($arr[$start] == $val) return $start;
    if($arr[$end] == $val) return $end;
    return false;
}
