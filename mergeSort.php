<?php

function mergeSort($arr) {
    if(count($arr)>1) {

        $middleVal = floor(count($arr)/2);
        $arr1 = mergeSort(array_slice($arr, 0, $middleVal));
        $arr2 = mergeSort(array_slice($arr, $middleVal, count($arr)));
        $counter1 = $counter2 = 0;

        for ($i=0; $i<count($arr); $i++) {
            if($counter1 == count($arr1)) {
                $arr[$i] = $arr2[$counter2];
                $counter2++;
            } elseif (($counter2 == count($arr2)) or ($arr1[$counter1] < $arr2[$counter2])) {
                $arr[$i] = $arr1[$counter1];
                $counter1++;
            } else {
                $arr[$i] = $arr2[$counter2];
                $counter2++;
            }
        }
    }
    return $arr;
}