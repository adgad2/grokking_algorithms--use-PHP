<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/10 0010
 * Time: 下午 2:32
 */


function person_is_seller(string $name):bool
{
    return $name[strlen($name)-1] == 'm';
}


$graph = [];
$graph["you"] = ["alice", "bob", "claire"];
$graph["bob"] = ["anuj","peggy"];
$graph["alice"] = ["peggy"];
$graph["claire"] = ["thom","jonny"] ;
$graph["anuj"] = [] ;
$graph["peggy"] = [] ;
$graph["thom"]= [] ;
$graph["jonny"] = [];

function enqueue(\SplQueue $queue, array $persons)
{
    foreach ($persons as $person){
        $queue->enqueue($person);
    }
}


function search(string $name):bool
{
    global $graph;
    $searchQueue=new \SplQueue();
    enqueue($searchQueue,$graph[$name]);
    $searched=[];
    while (!$searchQueue->isEmpty()){
        $person=$searchQueue->dequeue();
        if (!isset($searched[$person])) {
            if (person_is_seller($person)){
                echo $person.' is a mango seller'.PHP_EOL;
                return true;
            }else{
                enqueue($searchQueue,$graph[$person]);
                $searched[$person]=true;
            }
        }
    }
    return false;
}


search('you');