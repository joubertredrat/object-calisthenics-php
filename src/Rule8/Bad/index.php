<?php

declare(strict_types=1);

require_once __DIR__ . '../../../../vendor/autoload.php';

use JoubertRedRat\ObjectCalisthenicsPhp\Rule8\Bad\Company;

$company = new Company(
    companyName: 'Palace PHP Education LTDA',
    fantasyName: 'Palace PHP Cursos',
    documentNumber: '06596662000152',
    documentType: 'cnpj',
    street: 'Rua de Asfalto',
    number: '10',
    neighborhood: 'Bairro com Casas',
    city: 'Cidade',
    state: 'Estado',
);

dd($company);
