<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/9 0009
 * Time: 下午 2:33
 */

function sum(array $arr)
{
    $total=0;
    foreach ($arr as $k=>$v) $total+=$v;
    return $total;
}

echo sum([1,2,3,4]);