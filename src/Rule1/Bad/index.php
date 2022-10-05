<?php

declare(strict_types=1);

require_once __DIR__ . '../../../../vendor/autoload.php';

use JoubertRedRat\ObjectCalisthenicsPhp\Rule1\Bad\UserFactory;

$data = [
    'id' => 'e5ff0ae1-b2f8-417d-864d-e1fda49efd37',
    'active' => true,
    'carts' => [
        [
            'id' => '01GBV8X3Z5184570NCBKHS9YMZ',
            'status' => 'delivered',
            'total_amount' => 9360,
            'quantity_items' => 3,
            'products' => [
                [
                    'sku' => 'b4ddca2a-2f3c',
                    'amount' => 1055,
                    'quantity' => 2,
                ],
                [
                    'sku' => 'fff65c06-12d8',
                    'amount' => 7250,
                    'quantity' => 1,
                ],
            ],
        ],
        [
            'id' => '01GBV8XVDBEAVASN6ABMTQJVMY',
            'status' => 'abandoned',
        ],
    ],
];

$user = UserFactory::createFromArray($data);
dump($user);
