<?php

declare(strict_types=1);

namespace JoubertRedRat\ObjectCalisthenicsPhp\Rule4\Good;

class UserCollection
{
    private array $users;

    public function __construct()
    {
    }

    public function addUser(User $user): void
    {
        $this->users[] = $user;
    }

    public function getActiveUsers(): array
    {
        return \array_filter($this->users, function($user) {
            return $user->isActive();
        });
    }
}
