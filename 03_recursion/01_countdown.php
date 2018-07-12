<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/9 0009
 * Time: 上午 9:38
 */

function countdown($i){
    echo $i;
    if ($i <= 0) return;
    else countdown($i - 1);
}

countdown(10);