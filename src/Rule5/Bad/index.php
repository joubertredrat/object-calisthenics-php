<?php

declare(strict_types=1);

require_once __DIR__ . '../../../../vendor/autoload.php';

use JoubertRedRat\ObjectCalisthenicsPhp\Rule5\Bad\Email;
use JoubertRedRat\ObjectCalisthenicsPhp\Rule5\Bad\User;

$user = new User(new Email('joubert@random.domain'));
$domain = $user
    ->getEmail()
    ->getDomain()
;

echo 'O domínio do e-mail do usuário é [ ' . $domain . ' ]' . PHP_EOL;
