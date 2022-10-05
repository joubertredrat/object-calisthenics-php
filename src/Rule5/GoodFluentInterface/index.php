<?php

declare(strict_types=1);

require_once __DIR__ . '../../../../vendor/autoload.php';

use JoubertRedRat\ObjectCalisthenicsPhp\Rule5\GoodFluentInterface\PersonBuilder;

$personBuilder = new PersonBuilder();
$personJson = $personBuilder
    ->addName('Joubert RedRat')
    ->addEmail('joubert@random.domain')
    ->addVisible(false)
    ->getJson()
;

echo 'Sucesso, json da pessoa gerada [ ' . $personJson . ' ]' . PHP_EOL;
