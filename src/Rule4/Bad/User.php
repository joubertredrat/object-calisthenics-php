<?php

declare(strict_types=1);

namespace JoubertRedRat\ObjectCalisthenicsPhp\Rule4\Bad;

class User
{
    public function __construct(private string $nickname, private bool $active)
    {
    }

    public function getNickname(): string
    {
        return $this->nickname;
    }

    public function isActive(): bool
    {
        return $this->active;
    }
}
