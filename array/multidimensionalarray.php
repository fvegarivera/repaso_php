<?php

$beers = [
    [
        "name" => "Erdinger",
        "alcohol" => 8.5,
        "country" => "Alemania"
    ],
    [
        "name" => "Erdinger 2",
        "alcohol" => 4.7,
        "country" => "Suiza"
    ]
];

// echo $beers[1]["name"];

foreach($beers as $beer) {
    foreach($beer as $value) {
        echo $value."<br>";
    }
}