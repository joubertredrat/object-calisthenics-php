<?php

declare(strict_types=1);

require_once __DIR__ . '../../../../vendor/autoload.php';

use JoubertRedRat\ObjectCalisthenicsPhp\Rule8\Good\Address;
use JoubertRedRat\ObjectCalisthenicsPhp\Rule8\Good\Company;
use JoubertRedRat\ObjectCalisthenicsPhp\Rule8\Good\Document;

$company = new Company(
    companyName: 'Palace PHP Education LTDA',
    fantasyName: 'Palace PHP Cursos',
    document: new Document(
        number: '06596662000152',
        type: 'cnpj',
    ),
    address: new Address(
        street: 'Rua de Asfalto',
        number: '10',
        neighborhood: 'Bairro com Casas',
        city: 'Cidade',
        state: 'Estado',
    ),
);

dd($company);
