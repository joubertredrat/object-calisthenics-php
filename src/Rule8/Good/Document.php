<?php

declare(strict_types=1);

namespace JoubertRedRat\ObjectCalisthenicsPhp\Rule8\Good;

class Document
{
    public function __construct(
        public readonly string $number,
        public readonly string $type,
    ) {
    }
}
