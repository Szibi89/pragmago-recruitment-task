<?php

declare(strict_types=1);

namespace PragmaGoTech\Interview\Model;

use Money\Money;

class FeeStep
{
    private Money $amount;

    private Money $fee;

    public function __construct(Money $amount, Money $fee)
    {
        $this->amount = $amount;
        $this->fee = $fee;
    }

    public function getAmount(): Money
    {
        return $this->amount;
    }

    public function getFee(): Money
    {
        return $this->fee;
    }
}