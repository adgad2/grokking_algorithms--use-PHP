<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/9 0009
 * Time: 下午 2:44
 */

function recursive_count(array $arr)
{
    static $count=0;
    if (empty($arr)) return 0;
    else{
        $count+=1;
        array_pop($arr);
        recursive_count($arr);
    }
    return $count;
}


echo recursive_count([1,2,3,4,5,6]);