<?php

declare(strict_types=1);

require_once __DIR__ . '../../../../vendor/autoload.php';

use JoubertRedRat\ObjectCalisthenicsPhp\Rule9\Good\Amount;
use JoubertRedRat\ObjectCalisthenicsPhp\Rule9\Good\Wallet;

$wallet = new Wallet(new Amount(1000));
$wallet->cashIn(new Amount(500));
$wallet->cashOut(new Amount(200));

echo 'Wallet: Valor esperado [ 1300 ], encontrado [ ' . $wallet->getBalance() . ' ]' . PHP_EOL;
