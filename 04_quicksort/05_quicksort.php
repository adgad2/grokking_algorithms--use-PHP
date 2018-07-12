<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/9 0009
 * Time: 下午 4:10
 */

function quicksort(array $arr)
{
    if (count($arr) <2) return $arr;
    $pivot=current($arr);
    $less=array_filter ($arr,function($x) use ($pivot){
        if($x<$pivot) return true;
    });

    $greater=array_filter ($arr,function($x) use ($pivot){
        if($x>$pivot) return true;
    });
    //这里一开始我本来是用+实现的，但是我发现+的话相同键名会覆盖(包括数字键名），而array_merge()函数则会对数字键名以连续方式重新索引
    //当然也可以考虑使用+，但我这里的做法是每次过滤会重新对数字进行索引，包括$pivot参数也是建立在重新索引的基础上的，所以这里我就不改了
    return array_merge(quicksort($less),[$pivot],quicksort($greater));
}

print_r(quicksort([6,10,20,3,50]));