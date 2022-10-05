<?php

declare(strict_types=1);

namespace JoubertRedRat\ObjectCalisthenicsPhp\Rule8\Good;

class Company
{
    public function __construct(
        public readonly string $companyName,
        public readonly string $fantasyName,
        public readonly Document $document,
        public readonly Address $address,
    ) {
    }
}
