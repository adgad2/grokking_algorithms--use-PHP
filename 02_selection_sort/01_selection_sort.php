<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/7 0007
 * Time: 下午 2:15
 */

function findSmallest($array){
    //使用这种 可以解决原来实例里不能排序下标为非0的数组的问题
    $smallest = current($array);
    $smallest_index = key($array);
    foreach ($array as $k => $v) {
        if ($smallest > $v) {
            $smallest = $v;
            $smallest_index = $k;
        }
    }
    return $smallest_index;
}

echo findSmallest([5,3,6,2,10]).PHP_EOL;

function selectionSort($array){
    $arr = [];
    for ($i = 0,$len=count($array); $i < $len; $i++) {
        $k = findSmallest($array);
        $arr[] = $array[$k];
        unset($array[$k]);
    }
    return $arr;
}


print_r(selectionSort([5,3,6,2,10]));