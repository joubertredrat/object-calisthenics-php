<?php

declare(strict_types=1);

namespace JoubertRedRat\ObjectCalisthenicsPhp\Rule4\Bad;

class NotificationTerminal
{
    public function notify(User $user, string $message): void
    {
        echo 'Enviando mensagem [ ' . $message . ' ] ao usuário [ ' . $user->getNickname() . ' ]' . PHP_EOL;
    }
}
