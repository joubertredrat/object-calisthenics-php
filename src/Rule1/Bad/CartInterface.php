<?php

declare(strict_types=1);

namespace JoubertRedRat\ObjectCalisthenicsPhp\Rule1\Bad;

interface CartInterface
{
    public static function isValid(string $status): bool;
}
