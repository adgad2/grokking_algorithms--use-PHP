<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/9 0009
 * Time: 下午 5:15
 */

$vote=[];
function check_voter($name)
{
    global $vote;
    if (array_key_exists($name,$vote)) echo 'kick them out!';
    else {
        $vote[$name]=true;
        echo 'let them vote!';
    }
}

check_voter('Tom');//let them vote!
check_voter('Tom');//kick them out!
