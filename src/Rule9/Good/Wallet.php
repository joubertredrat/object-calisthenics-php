<?php

declare(strict_types=1);

namespace JoubertRedRat\ObjectCalisthenicsPhp\Rule9\Good;

class Wallet
{
    public function __construct(private Amount $balance)
    {
    }

    public function cashIn(Amount $amount): void
    {
        $this->balance = new Amount($this->getBalance() + $amount->value);
    }

    public function cashOut(Amount $amount): void
    {
        if ($amount->value > $this->getBalance()) {
            throw new \Exception(
                'Wallet balance [ ' . $this->getBalance() . ' ] less than amount [ ' . $amount->value . ' ]'
            );
        }

        $this->balance = new Amount($this->getBalance() - $amount->value);
    }

    public function getBalance(): int
    {
        return $this
            ->balance
            ->value
        ;
    }
}
