<?php

declare(strict_types=1);

require_once __DIR__ . '../../../../vendor/autoload.php';

use JoubertRedRat\ObjectCalisthenicsPhp\Rule3\Good\Email;

function notifyNewUser(Email $email): void {
    echo 'Obrigado por se cadastrar ' . $email->value . PHP_EOL;
}

function notifyAdminNewUser(Email $email): void {
    echo 'Um novo usuário, ' . $email->value . ' se registrou no sistema' . PHP_EOL;
}

$email = new Email('joubert@random.email');
notifyNewUser($email);
notifyAdminNewUser($email);
