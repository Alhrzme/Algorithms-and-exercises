return position of element >= $val
<?php
function binarySearch($arr, $val, $start, $end)
{
    $num = $end - $start;
    $ceilNum = ceil($num/2);
    if($num>1){
        if($arr[$start+$ceilNum+1]>$val&&$arr[$start+$ceilNum]>=$val){
            return binarySearch($arr, $val, $start, $start+$ceilNum);
        } elseif($arr[$start+$ceilNum]<$val) {
            return binarySearch($arr, $val, $start+$ceilNum+1, $end);
        } else {
            return $end;
        }
    }
    else {
        if($arr[$end]>=$val&&($arr[$start]<$val)){
            return $end;
        } else return $start;
    }
}