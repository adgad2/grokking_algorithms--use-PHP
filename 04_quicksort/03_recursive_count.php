<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/9 0009
 * Time: 下午 3:05
 */

//上一个版本的改良
function recursive_count(array $arr)
{
    if (empty($arr)) return 0;

    array_pop($arr);
    return 1+recursive_count($arr);
}

echo recursive_count([1,2,3,4,5,6]);