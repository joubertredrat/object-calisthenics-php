<?php

declare(strict_types=1);

namespace JoubertRedRat\ObjectCalisthenicsPhp\Rule4\Bad;

class UserCollection
{
    private array $users;

    public function __construct(private NotificationTerminal $notificationTerminal)
    {
    }

    public function addUser(User $user): void
    {
        $this->users[] = $user;
    }

    public function sendEmailActiveUsers(string $message): void
    {
        $usersActive = \array_filter($this->users, function($user) {
            return $user->isActive();
        });

        foreach ($usersActive as $user) {
            $this
                ->notificationTerminal
                ->notify($user, $message)
            ;
        }
    }
}
