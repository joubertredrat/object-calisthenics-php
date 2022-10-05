<?php

declare(strict_types=1);

namespace JoubertRedRat\ObjectCalisthenicsPhp\Rule8\Good;

class Address
{
    public function __construct(
        public readonly string $street,
        public readonly string $number,
        public readonly string $neighborhood,
        public readonly string $city,
        public readonly string $state,
    ) {
    }
}
