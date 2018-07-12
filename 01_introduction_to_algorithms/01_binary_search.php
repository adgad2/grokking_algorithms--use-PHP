<?php

function binarySearch($needle, $array){
    $low = 0;
    $high = count($array) - 1;

    while ($low <= $high) {
        //如果不是偶数，向下取整
        $mid = intval(($low + $high)/ 2);
        //每次都猜中间的值
        $guess = $array[$mid];
        if ($guess == $needle) return $mid;

        //如果猜的值小了，修改low的值，下同
        if ($guess < $needle) $low = $mid + 1;

        if ($guess > $needle) $high = $mid - 1;
    }
    //没有指定的元素
    return NULL;
}

echo binarySearch(9,[1,3,5,7,9]);