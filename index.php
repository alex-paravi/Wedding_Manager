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
}
