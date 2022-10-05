<?php

declare(strict_types=1);

namespace JoubertRedRat\ObjectCalisthenicsPhp\Rule1\Bad;

class User
{
    private array $carts = [];

    public function __construct(
        public readonly string $id,
        public readonly bool $active,
    ) {
    }

    public function addCart(CartInterface $cart): void
    {
        $this->carts[] = $cart;
    }
}
