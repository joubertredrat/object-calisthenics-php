<?php

declare(strict_types=1);

namespace JoubertRedRat\ObjectCalisthenicsPhp\Rule1\Bad;

class Product
{
    public function __construct(
        public readonly string $sku,
        public readonly int $amount,
        public readonly int $quantity,
    ) {
    }
}
