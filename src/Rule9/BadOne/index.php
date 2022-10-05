<?php

declare(strict_types=1);

require_once __DIR__ . '../../../../vendor/autoload.php';

use JoubertRedRat\ObjectCalisthenicsPhp\Rule9\BadOne\Wallet;

$wallet = new Wallet(1000);
$wallet->balance += 500;
$wallet->balance -= 200;

echo 'Wallet: Valor esperado [ 1300 ], encontrado [ ' . $wallet->balance . ' ]' . PHP_EOL;
