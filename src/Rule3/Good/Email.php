<?php

declare(strict_types=1);

namespace JoubertRedRat\ObjectCalisthenicsPhp\Rule3\Good;

class Email
{
    public function __construct(public readonly string $value)
    {
        if (!\filter_var($value, FILTER_VALIDATE_EMAIL)) {
            throw new \Exception('Invalid e-mail got [ ' . $value . ' ]');
        }
    }
}
