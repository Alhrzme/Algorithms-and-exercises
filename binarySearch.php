return position of element >= $val
<?php
function getBinarySearch($arr, $val)
{
    return binarySearch($arr, $val, 0, count($arr)-1);
}
function binarySearch($arr, $val, $start, $end)
{
    $num = $end - $start;
    if($num>1){
        $average = ceil($num/2);
        if($arr[$start + $average] == $val) return $start + $average;
        if($arr[$start + $average] > $val) return binarySearch($arr, $val, $start, $start + $average-1);
        return binarySearch($arr, $val, $start+$average, $end);
    }
    if($arr[$end]>=$val&&($arr[$start]<$val)){
        return $end;
    }
    return $start;
}