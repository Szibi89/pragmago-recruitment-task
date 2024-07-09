<?php

declare(strict_types=1);

namespace PragmaGoTech\Interview\Repository;

use Money\Money;
use PragmaGoTech\Interview\Model\FeeStep;

class FeeStepsRepository
{
    public static function getFeeSteps(int $term): array
    {
        $steps = [
            12 => [
                new FeeStep(amount:Money::PLN(100000), fee:Money::PLN(5000)),
                new FeeStep(amount:Money::PLN(200000), fee:Money::PLN(9000)),
                new FeeStep(amount:Money::PLN(300000), fee:Money::PLN(9000)),
                new FeeStep(amount:Money::PLN(400000), fee:Money::PLN(11500)),
                new FeeStep(amount:Money::PLN(500000), fee:Money::PLN(10000)),
                new FeeStep(amount:Money::PLN(600000), fee:Money::PLN(12000)),
                new FeeStep(amount:Money::PLN(700000), fee:Money::PLN(14000)),
                new FeeStep(amount:Money::PLN(800000), fee:Money::PLN(16000)),
                new FeeStep(amount:Money::PLN(900000), fee:Money::PLN(18000)),
                new FeeStep(amount:Money::PLN(1000000), fee:Money::PLN(20000)),
                new FeeStep(amount:Money::PLN(1100000), fee:Money::PLN(22000)),
                new FeeStep(amount:Money::PLN(1200000), fee:Money::PLN(24000)),
                new FeeStep(amount:Money::PLN(1300000), fee:Money::PLN(26000)),
                new FeeStep(amount:Money::PLN(1400000), fee:Money::PLN(28000)),
                new FeeStep(amount:Money::PLN(1500000), fee:Money::PLN(30000)),
                new FeeStep(amount:Money::PLN(1600000), fee:Money::PLN(32000)),
                new FeeStep(amount:Money::PLN(1700000), fee:Money::PLN(34000)),
                new FeeStep(amount:Money::PLN(1800000), fee:Money::PLN(36000)),
                new FeeStep(amount:Money::PLN(1900000), fee:Money::PLN(38000)),
                new FeeStep(amount:Money::PLN(2000000), fee:Money::PLN(40000)),
            ],
            24 => [
                new FeeStep(amount:Money::PLN(100000), fee:Money::PLN(7000)),
                new FeeStep(amount:Money::PLN(200000), fee:Money::PLN(10000)),
                new FeeStep(amount:Money::PLN(300000), fee:Money::PLN(12000)),
                new FeeStep(amount:Money::PLN(400000), fee:Money::PLN(16000)),
                new FeeStep(amount:Money::PLN(500000), fee:Money::PLN(20000)),
                new FeeStep(amount:Money::PLN(600000), fee:Money::PLN(24000)),
                new FeeStep(amount:Money::PLN(700000), fee:Money::PLN(28000)),
                new FeeStep(amount:Money::PLN(800000), fee:Money::PLN(32000)),
                new FeeStep(amount:Money::PLN(900000), fee:Money::PLN(36000)),
                new FeeStep(amount:Money::PLN(1000000), fee:Money::PLN(40000)),
                new FeeStep(amount:Money::PLN(1100000), fee:Money::PLN(44000)),
                new FeeStep(amount:Money::PLN(1200000), fee:Money::PLN(48000)),
                new FeeStep(amount:Money::PLN(1300000), fee:Money::PLN(52000)),
                new FeeStep(amount:Money::PLN(1400000), fee:Money::PLN(56000)),
                new FeeStep(amount:Money::PLN(1500000), fee:Money::PLN(60000)),
                new FeeStep(amount:Money::PLN(1600000), fee:Money::PLN(64000)),
                new FeeStep(amount:Money::PLN(1700000), fee:Money::PLN(68000)),
                new FeeStep(amount:Money::PLN(1800000), fee:Money::PLN(72000)),
                new FeeStep(amount:Money::PLN(1900000), fee:Money::PLN(76000)),
                new FeeStep(amount:Money::PLN(2000000), fee:Money::PLN(80000)),
            ],
        ];

        return $steps[$term];
    }
}