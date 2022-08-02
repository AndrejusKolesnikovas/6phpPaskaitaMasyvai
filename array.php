<?php

declare(strict_types=1);

function exercise1(int $key): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 3 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = [0, 1, 2, 3, 4];

    return $numbers[$key];
}

//var_dump(exercise1(2));
function exercise2(string $key): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 3 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = ['zero' => 0, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];

    return $numbers[$key];
}

//var_dump(exercise2('three'));
function exercise3(int $key): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = [
        [0, 1],
        [1, 0, 2],
        [
            0,
            [
                0, 1, 99
            ],
        ],
    ];

    return $numbers[2][1][$key];
}

//var_dump(exercise3(2));

function exercise4(string $key): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = [
        'first' => [0, 1],
        'third' => [1, 0, 2],
        'fourth' => [
            'value_1' => 0,
            'value_2' => [
                'zero' => 0, 'one' => 1, 'ninetynine' => 99
            ],
        ],
    ];

    return $numbers['fourth']['value_2'][$key];
}

//var_dump(exercise4('ninetynine'));

function exercise5(): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = [
        'first' => [0, 1],
        'third' => [1, 0, 2],
        'fourth' => [
            'value_1' => 0,
            'value_6' => [
                'zero' => 0, 'one' => 1, 99
            ],
        ],
    ];

    return $numbers['fourth']['value_6'][0];
}

//print_r (exercise5());

function exercise6(): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = [
        'first' => [0, 1],
        'third' => [1, 0, 2],
        'fourth' => [
            'value_1' => 0,
            'value_6' => [
                5 => 0, 'one' => 1, 99
            ],
        ],
    ];
    return $numbers['fourth']['value_6'][6];
}

//print_r (exercise6());
function exercise7(): array
{
    /*
    Sunaikinkitę reikšmę 2 ir grąžinkite masyvą
    Turėtumėte gauti masyvą: ['zero' => 0, 'one' => 1, 'three' => 3, 'four' => 4]
    */

    $numbers = ['zero' => 0, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];
    unset($numbers['two']);
    return $numbers;
}

//print_r(exercise7());
function exercise8(): array
{
    /*
    Sunaikinkitę visas reikšmes, kurios dalijasi 2 ir grąžinkite masyvą
    Turėtumėte gauti masyvą: ['one' => 1, 'three' => 3, 'five' => 5]
    */

    $numbers = ['ninety' => 90, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4, 'five' => 5];
    foreach ($numbers as $key => $value) {
        if ($value % 2 === 0) {
            unset($numbers[$key]);
        }
    }
    return $numbers;
}

//print_r(exercise8());
function exercise9(int $start, int $end): void
{
    /*
    Išspausdinkite skaičius nuo $start iki $end pasinaudodami ciklu.
    Jeigu $start yra mažiau nei $end, funkcija nieko nespausdina.
    */

    for ($i = $end; $i <= $start; ++$i) {
        echo $i;
    }
}

//exercise9(3, 5);
function exercise10(int $number): void
{
    /*
    Išspausdinkite skaičius, kurie yra mažesni nei $number ir dalijasi iš 3. Jeigu paduotas skaičius mažesnis nei 0,
    funkcija nieko nespausdina.

    Funkcijos kvietimas: exercise10(60)
    Funkcija spausdina:
    3
    6
    9
    12
    ...
    60
    */

    for ($i = 0; $i < $number; ++$i) {
        if ($i % 3 === 0) {

            echo $i;
        }
    }
}

//exercise10(9);
function exercise11(int $number): void
{
    /*
    Išspausdinkite skaičius nuo $number iki 0 pasinaudodami ciklu. Jeigu paduotas skaičius neigiamas,
    funkcija nieko nespausdina.

    Funkcijos kvietimas: exercise11(21)
    Funkcija spausdina:
    21
    20
    19
    ...
    1
    0
    */
    for ($i = $number; $i >= 0; --$i) {
        echo $i;
    }

}

//exercise11(6);

function getNumbers(): array
{
    return [
        99,
        15,
        28,
        13,
        145,
        99,
        12,
        -57,
        -36,
    ];
}

/*
Kiekviena užduoties dalis turi būti funkcija. Tęskite funkcijų numeraciją: exercise12, exercise13 ir t.t.

Masyvą gausite iškvietę funkciją 'getNumbers'

*/
//12. Raskite ir grąžinkite visų masyvo narių sumą
function exercise12(): void
{
    $numbers = getNumbers();
    $sum = 0;
    foreach ($numbers as $number) {
        $sum = $sum + $number;

    }
    echo $sum;
}

//exercise12();
echo PHP_EOL;

//13. Raskite ir grąžinkite lyginių masyvo narių sumą
function exercise13(): void
{
    $numbers = getNumbers();
    $sum = 0;
    foreach ($numbers as $number) {
        if ($number % 2 === 0) {
            $sum = $sum + $number;
        }
    }
    echo $sum;
}

//exercise13();

//14. Raskite ir grąžinkite teigiamų masyvo narių sumą

function exercise14(): int
{
    $numbers = getNumbers();
    $sum = 0;
    foreach ($numbers as $number) {
        if ($number > 0) {
            $sum = $sum + $number;
        }
    }
    return $sum;
}

//echo exercise14();

//15. Raskite ir grąžinkite sandaugą tų masyvo narių, kurie dalijasi iš 5

function exercise15(): int|float
{
    $numbers = getNumbers();

    if (count($numbers) === 0) {
        return 0;
    }
    $sum = 1;
    foreach ($numbers as $number) {
        if ($number % 5 === 0) {
            $sum = $sum * $number;
        }
    }
    return $sum;
}

//echo exercise15();

//16. Į masyvą pridėkite naujų narių - skaičius nuo 255 iki 299 - ir išspausdinkite masyvą pasinaudodami funkcija 'printr'
function exercise16(): void
{
    $numbers = getNumbers();
    for ($i = 225; $i <= 229; ++$i) {
        $numbers[] = $i;
    }
    print_r($numbers);
}

//exercise16();

//17. Į masyvą pridėkite naują narį - skaičiu 255 - ir išspausdinkite masyva pasinaudodami funkcija 'printr'

function exercise17(): void
{
    $numbers = getNumbers();
    $numbers[] = 255;;
    print_r($numbers);
}

//exercise17();


function exercise01(): array
{
    $products = [
        'item_1' => 'desk',
        'item_2' => 'lamp',
        'item_3' => 'error',
        'item_4' => 'sofa',
        'item_5' => 'error',
    ];

    /*
    Sunaikinkitę visus elementus, kurių reikšmė yra 'error' ir grąžinkite pamodifikuotą masyvą.
    Tikėkitės, kad $products masyvo narių skaičius gali varijuoti, tad naudokite ciklą.
    */
    foreach ($products as $key => $value) {
        if ($value === 'error') {
            unset($products[$key]);
        }
        $value;
    }

    return $products;
}

//print_r(exercise01());

function exercise02(int $id): ?array

{
    $prefix = 'product_';

    $products = [
        'product_1' => 'desk',
        'product_2' => 'lamp',
        'product_3' => 'sofa',
    ];

    /*
    Sunaikinkitę visas masyve esančias reikšmes, kurių raktai yra $prefix + $id. Grąžinkite pamodifikuotą masyvą.
    Jeigu tokio rakto nėra, gražinkite null.
    Pridėkite trūkstamą return tipą.
    Funkcijos kvietimas: exercise2(1)
    */
    if (isset($products[$prefix . $id])) {
        unset($products[$prefix . $id]);


    } else {
        return null;
    }


    return $products;
}

//var_dump(exercise02(3));

function exercise03(): array
{
    $transactions = [
        [
            'total' => 200,
            'status' => 'error',
        ],
        [
            'total' => 150,
            'status' => 'completed',
        ],
    ];

    /*
    Sunaikinkite visus elementus, kurių 'status' reikšmė yra 'error' ir grąžinkite pamodifikuotą masyvą.
    Tikėkitės, kad $transactions masyvo narių skaičius gali varijuoti, tad naudokite ciklą.
    */
    foreach ($transactions as $key => $value) {
        if ($value['status'] === 'error') {
            unset($transactions[$key]);
        }
    }
    return $transactions;
}

//print_r(exercise03());

function exercise04(string $key): ?string
{
    $products = [
        'product_1' => 'shirt',
        'product_2' => 'trousers',
        'product_98' => 'coat',
    ];
    /*
    Funkcija turi grąžinti reikšmę pagal paduotą raktą.
    Jeigu paduotas raktas neegzistuoja $products masyve, grąžinkite null.
    Pridėkite teisingą return tipą.
    Funkcijos kvietimas: exercise4('product_2')
    */
    if(isset($products[$key])){
        return $products[$key];
    }
    return null;
}
//print_r((exercise04('product_2')));
// Žr. kitą užduotį
function getProducts(): array
{
    return [
        'chair' => [
            'type' => 'furniture',
            'name' => 'Best chair',
            'price' => 15,
        ],
        'lamp' => [
            'type' => 'lighting',
            'name' => 'Ultimate lamp',
            'price' => 99,
        ],
        'sofa' => [
            'type' => 'furniture',
            'name' => 'Soft sofa',
            'price' => 350
        ],
    ];
}