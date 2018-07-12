<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/11 0011
 * Time: 下午 5:18
 */

$states_needed=['mt','wa','or','id','nv','ut','ca','az'];

$stations=[];
$stations['kone']=['id','nv', 'ut',];
$stations["kone"] = ["id", "nv", "ut"];
$stations["ktwo"] = ["wa", "id", "mt"];
$stations["kthree"] = ["or", "nv", "ca"];
$stations["kfour"] = ["nv", "ut"];
$stations["kfive"] = ["ca", "az"];

$final_stations=[];

while ($states_needed){
    $best_station=NULL;
    $states_covered=[];

    foreach ($stations as $radio=>$station){
        $covered = array_intersect($states_needed,$station);
        if (count($covered) >count($states_covered)){
            $best_station=$radio;
            $stations_covered=$covered;
        }
    }
    $states_needed = array_diff($states_needed, $stations_covered);
    $final_stations[]=$best_station;
}

print_r($final_stations);

/*
 * Array
(
    [0] => kfive
    [1] => kfour
    [2] => kthree
    [3] => ktwo
)
 */
