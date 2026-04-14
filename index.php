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


print_r($guestData);


print_r($guestData[0]['alcohol']);

echo $guestData[0]['alcohol'][1];
