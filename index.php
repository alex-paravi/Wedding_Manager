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
        'is_confirmed' => true,
        'side' => 'bride',
        'alcohol' => ['wine', 'champagne'],
    ],
];

foreach ($guestData as $guest) {
    if ($guest['is_confirmed'] === true) {
        echo "{$guest['name']} идёт на свадьбу!  Напитков выбрано:" .  count($guest['alcohol']) . PHP_EOL;
    }
};

foreach ($guestData as $guest) {
    if ($guest['side'] === 'groom') {
        echo "{$guest['name']} со стороны жениха" . PHP_EOL;
    } else {
        echo "{$guest['name']} со стороны невесты" . PHP_EOL;
    }
};
$totalDrinks = 0;
foreach ($guestData as $guest) {
    $totalDrinks += count($guest['alcohol']);
    $totalAlcoholType = $guest['alcohol'];
    $alcoholList = implode(",", $totalAlcoholType);
};

print_r("Всего надо купить {$totalDrinks} бутылок") . PHP_EOL;
