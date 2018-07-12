<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/9 0009
 * Time: 下午 3:05
 */

function recursive_max(array $arr)
{
    static $max=0;
    //如果没有元素了，则返回$max
    if (empty($arr)) return $max;
    //和第一个元素比较
    if($max < current($arr)) $max=current($arr);
    //移除比较完的元素
    array_shift($arr);
    //比较下一个
    return recursive_max($arr);
}

echo recursive_max([5, 9, 10, 2, 1]);