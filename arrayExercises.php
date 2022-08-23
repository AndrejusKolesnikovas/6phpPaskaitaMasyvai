<?php

declare(strict_types=1);


/*
Turime $orders masyvą su užsakymų duomenimis. Mūsų analitikai nori sužinoti, kokius produktus yra įsigiję mūsų vartotojai.
Išspausdinkite tai į terminalą.

Rezultatas turėtų atrodyti taip:
php -f some_file.php

User ID "3" bought
3 Yellow lamp
1 Blue wineglass

User ID "5" bought
4 Ginger chair

User ID "11" bought
8 Blue wineglass
*/

$orders = [
    [
        'id' => 1,
        'user_id' => 3,
        'items' => [
            [
                'name' => 'Yellow lamp',
                'quantity' => 3,
            ],
            [
                'name' => 'Blue wineglass',
                'quantity' => 1,
            ],
        ],
    ],
    [
        'id' => 2,
        'user_id' => 5,
        'items' => [
            [
                'name' => 'Ginger chair',
                'quantity' => 4,
            ],
        ],
    ],
    [
        'id' => 3,
        'user_id' => 11,
        'items' => [
            [
                'name' => 'Blue wineglass',
                'quantity' => 8,
            ],
        ],
    ],
];

foreach ($orders as $order) {
    echo 'User ID "' . $order['user_id'] . '" bought' . PHP_EOL;
    foreach ($order['items'] as $value) {
        echo $value['quantity'] . ' ' . $value['name'] . PHP_EOL;
    }
    echo PHP_EOL;
}