<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/10 0010
 * Time: 下午 5:28
 */
//整个图的散列
$graph['start'] = [];
$graph['start']['a'] = 6;
$graph['start']['b'] = 2;

$graph['a']['fin'] = 1;
$graph['b']['a'] = 3;
$graph['b']['fin'] = 5;

$graph['fin'] = [];

//开销数组
$costs = [];
$costs['a'] = 6;
$costs['b'] = 2;
$costs['fin'] = PHP_INT_MAX;//终点设为无穷大

//存储父节点的散列
$parents = [];
$parents['a'] = 'start';
$parents['b'] = 'start';
$parents['fin'] = 'fin';

$processed = [];

function find_lowest_cost_node($costs)
{
    global $processed;
    $lowest_cost = PHP_INT_MAX;
    $lowest_cost_node = NULL;
    foreach ($costs as $node => $cost) {
        if ($cost < $lowest_cost and !array_key_exists($node, $processed)) {
            $lowest_cost = $cost;
            $lowest_cost_node = $node;
        }
    }
    return $lowest_cost_node;
}

$node = find_lowest_cost_node($costs);
while (!is_null($node)) {

    $cost = $costs[$node];
    $neighbors = $graph[$node];
    foreach ($neighbors as $k => $v) {
        $new_cost = $cost + $v;
        if ($costs[$k] > $new_cost) {
            $costs[$k] = $new_cost;
            $parents[$k] = $node;
        }
    }
    $processed[$node] = true;
    $node = find_lowest_cost_node($costs);
}

print_r($costs);
//Array
//(
//    [a] => 5
//    [b] => 2
//    [fin] => 6
//)