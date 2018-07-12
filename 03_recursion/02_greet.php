<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/9 0009
 * Time: 上午 10:50
 */

function greet($name)
{
    echo 'hello,'.$name.'!'.PHP_EOL;
    greet2($name);
    echo 'getting ready to say bay...'.PHP_EOL;
    bye();
}

function greet2($name)
{
    echo 'how are you,'.$name.'?'.PHP_EOL;
}

function bye()
{
    echo 'ok,bay';
}

greet('一男');