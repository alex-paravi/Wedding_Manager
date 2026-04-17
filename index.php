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

$prices = [
    'wine' => 800,
    'beer' => 250,
    'vodka' => 1200,
    'champagne' => 1500
];

$totalDrinks = 0;
$totalCost = 0;
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
    $guestAlcoholCost = 0;

    foreach ($guest['alcohol'] as $drinkName) {
        if (isset($prices[$drinkName])) {
            $guestAlcoholCost += $prices[$drinkName];
        }
    }
    $totalCost += $guestAlcoholCost;

    echo "Бюджет на напитки для {$guest['name']}: {$guestAlcoholCost} руб." . PHP_EOL;
}
$uniqueAlcohol = array_unique($allAlcoholType);
$alcoholString = implode(", ", $uniqueAlcohol) . ".";
echo ($alcoholString) . PHP_EOL;
echo "ИТОГО к оплате в магазине: {$totalCost}" . PHP_EOL;
