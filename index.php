<?php

$guestData = [
    [
        'name' => 'Алексей Паравин',
        'is_confirmed' => true,
        'side' => 'groom',
        'alcohol' => ['wine', 'beer', 'vodka'],
    ],
    [
        'name' => 'Ирина Андреева',
        'is_confirmed' => false,
        'side' => 'bride',
        'alcohol' => ['wine', 'champagne'],
    ],
];

$totalDrinks = 0;
$allAlcoholType = [];

foreach ($guestData as $guest) {
    if ($guest['is_confirmed'] === true) {
        echo "{$guest['name']} подверждён." . PHP_EOL;
    } else {
        echo "{$guest['name']} на уточнении." . PHP_EOL;
    };
    if ($guest['side'] === 'groom') {
        echo "{$guest['name']} сторона жениха." . PHP_EOL;
    } else {
        echo "{$guest['name']} сторона невесты." . PHP_EOL;
    }
    $totalDrinks += count($guest['alcohol']);
    $allAlcoholType = array_merge($allAlcoholType, $guest['alcohol']);
}
$uniqueAlcohol = array_unique($allAlcoholType);
$alcoholString = implode(", ", $uniqueAlcohol) . ".";
echo ($alcoholString);
