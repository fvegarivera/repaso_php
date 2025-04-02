<?php

$beers = [
    "Carolus",
    "London Porter",
    "Delirium Red"
];

array_push($beers, "Karmeliten");
$beer1 = array_pop($beers);

echo $beer1;

// echo count($beers);

// print_r($beers);