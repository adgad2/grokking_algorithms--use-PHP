<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/12 0012
 * Time: 上午 10:14
 */


if ($word[$i]==$word[$j]){
    $cell[$i][$j]=$cell[$i][$j]+1;
}else{
    $cell[$i][$j]=max($cell[$i-1][$j],$cell[$i][$j-1]);
}