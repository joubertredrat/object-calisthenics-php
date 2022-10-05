<?php

declare(strict_types=1);

function notifyNewUser(string $email): void {
    if (!\filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new \Exception('Invalid e-mail got [ ' . $email . ' ]');
    }

    echo 'Obrigado por se cadastrar ' . $email . PHP_EOL;
}

function notifyAdminNewUser(string $email): void {
    if (!\filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new \Exception('Invalid e-mail got [ ' . $email . ' ]');
    }

    echo 'Um novo usuário, ' . $email . ' se registrou no sistema' . PHP_EOL;
}

$email = 'joubert@random.email';
notifyNewUser($email);
notifyAdminNewUser($email);
