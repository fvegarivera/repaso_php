<?php

$beer = new Beer("Corona", "Bavaria", 4.5, true);

$json = json_encode($beer);
// echo $json;

$jsonBeer = '{"name":"Corona","brand":"Bavaria","alcohol":4.5,"isStrong":true}';
$objBeer = json_decode($jsonBeer);
// echo $objBeer->name . "\n";

$arr = [
    "name" => "Knita",
    "coubntry" => "Bulgaria",
];

$newJson = json_encode($arr);
// echo $newJson . "\n";

$newArr = json_decode($newJson, true);
echo $newArr["name"] . "\n";

class Beer {
    public string $name;
    public string $brand;
    public float $alcohol;
    public bool $isStrong;

    public function __construct(string $name, string $brand, float $alcohol, bool $isStrong) {
        $this->name = $name;
        $this->brand = $brand;
        $this->alcohol = $alcohol;
        $this->isStrong = $isStrong;
    }
}