<?php

declare(strict_types=1);

require_once __DIR__ . '../../../../vendor/autoload.php';

use JoubertRedRat\ObjectCalisthenicsPhp\Rule5\Good\Email;
use JoubertRedRat\ObjectCalisthenicsPhp\Rule5\Good\User;

$user = new User(new Email('joubert@random.domain'));
$domain = $user->getEmailDomain();

echo 'O domínio do e-mail do usuário é [ ' . $domain . ' ]' . PHP_EOL;
