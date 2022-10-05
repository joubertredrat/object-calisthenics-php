<?php

declare(strict_types=1);

require_once __DIR__ . '../../../../vendor/autoload.php';

use JoubertRedRat\ObjectCalisthenicsPhp\Rule9\BadTwo\Wallet;

$wallet = new Wallet(1000);
$wallet->setBalance($wallet->getBalance() + 500);
$wallet->setBalance($wallet->getBalance() - 200);

echo 'Wallet: Valor esperado [ 1300 ], encontrado [ ' . $wallet->getBalance() . ' ]' . PHP_EOL;
