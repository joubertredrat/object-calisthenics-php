<?php

declare(strict_types=1);

namespace JoubertRedRat\ObjectCalisthenicsPhp\Rule4\Good;

class NotificationService
{
    public function __construct(
        private UserCollection $userCollection,
        private NotificationTerminal $notificationTerminal,
    ) {
    }

    public function sendEmailActiveUsers(string $message): void
    {
        $activeUsers = $this
            ->userCollection
            ->getActiveUsers()
        ;

        foreach ($activeUsers as $user) {
            $this
                ->notificationTerminal
                ->notify($user, $message)
            ;
        }
    }
}
