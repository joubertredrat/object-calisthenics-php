<?php

declare(strict_types=1);

namespace JoubertRedRat\ObjectCalisthenicsPhp\Rule5\Good;

class User
{
    public function __construct(private readonly Email $email)
    {
    }

    public function getEmailDomain(): string
    {
        return $this
            ->email
            ->getDomain()
        ;
    }
}
