<?php
require __DIR__ . '/vendor/autoload.php';

$islandGenerator = new App\IslandGenerator();
$islandCounter = new App\IslandCounter();

$map = $islandGenerator->generateMap(5, 5);
$islands = $islandCounter->count($map);

echo json_encode([
    'map' => $map,
    'islands' => $islands
]);