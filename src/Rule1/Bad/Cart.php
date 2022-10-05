<?php

declare(strict_types=1);

namespace JoubertRedRat\ObjectCalisthenicsPhp\Rule1\Bad;

class Cart extends CartBase
{
    private array $products = [];

    public function __construct(
        public readonly string $id,
        public readonly string $status,
        public readonly int $totalAmount,
        public readonly int $quantityItems,
    ) {
    }

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }
}
