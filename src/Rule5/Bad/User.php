<?php

declare(strict_types=1);

namespace JoubertRedRat\ObjectCalisthenicsPhp\Rule5\Bad;

class User
{
    public function __construct(private readonly Email $email)
    {
    }

    public function getEmail(): Email
    {
        return $this->email;
    }
}
