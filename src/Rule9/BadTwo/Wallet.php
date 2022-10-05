<?php

declare(strict_types=1);

namespace JoubertRedRat\ObjectCalisthenicsPhp\Rule9\BadTwo;

class Wallet
{
    public function __construct(private int $balance)
    {
        if ($balance < 0) {
            throw new \Exception('Invalid amount got [ ' . $balance . ' ]');
        }
    }

    public function setBalance(int $balance): void
    {
        if ($balance < 0) {
            throw new \Exception('Invalid amount got [ ' . $balance . ' ]');
        }

        $this->balance = $balance;
    }

    public function getBalance(): int
    {
        return $this->balance;
    }
}
