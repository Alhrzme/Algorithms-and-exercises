<?php
function bogosort($arr)
{
    while(!isSorted($arr)){
        shuffle($arr);
        print 'Не сортирован';
    }
    print_r($arr);
}

function isSorted($arr)
{
    for($i=1; $i<count($arr); $i++){
        if($arr[$i-1]>$arr[$i]){
            return false;
        }
    }
    return true;
}