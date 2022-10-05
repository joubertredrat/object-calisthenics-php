<?php

declare(strict_types=1);

namespace JoubertRedRat\ObjectCalisthenicsPhp\Rule1\Good;

abstract class CartBase implements CartInterface
{
    public const ABANDONED = 'abandoned';

    public function __construct(
        public readonly string $id,
    ) {
    }

    public static function isValid(string $status): bool
    {
        return !\in_array($status, [self::ABANDONED]);
    }
}
