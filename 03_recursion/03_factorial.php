<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/9 0009
 * Time: 上午 11:44
 */

function fact($x)
{
    if ($x==1) return 1;
    else return $x*fact($x-1);
}

echo fact(5);