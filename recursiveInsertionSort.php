<?php
function insertSort(&$arr, $numb=1)
{
    if($numb<count($arr)){
        for($i=$numb-1; $i>=0; $i--){
            if($arr[$i]>$arr[$i+1]){
                $item = $arr[$i];
                $arr[$i] = $arr[$i+1];
                $arr[$i+1] = $item;
            }
        }
        insertSort($arr,$numb+1);
    }
}