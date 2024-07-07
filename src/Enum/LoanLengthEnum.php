<?php

declare(strict_types=1);

namespace PragmaGoTech\Interview\Enum;

use PragmaGoTech\Interview\Trait\EnumValuesTrait;

enum LoanLengthEnum: int
{
    use EnumValuesTrait;

    case MONTHS12 = 12;
    case MONTHS24 = 24;
}
