<?php

declare(strict_types=1);

namespace JoubertRedRat\ObjectCalisthenicsPhp\Rule9\Good;

class Amount
{
    public function __construct(public readonly int $value)
    {
        if ($value < 0) {
            throw new \Exception('Invalid amount got [ ' . $value . ' ]');
        }
    }
}
