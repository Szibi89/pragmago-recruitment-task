<?php

declare(strict_types=1);

namespace PragmaGoTech\Interview;

use Money\Money;
use PragmaGoTech\Interview\Model\LoanProposal;
use PragmaGoTech\Interview\Validator\LoanProposalValidator;

class LoanFeeCalculator implements FeeCalculator
{
    public function calculate(LoanProposal $application): Money
    {
        LoanProposalValidator::validate($application);

        return Money::PLN(0);
    }
}