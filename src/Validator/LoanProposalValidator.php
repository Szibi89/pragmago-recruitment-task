<?php

declare(strict_types=1);

namespace PragmaGoTech\Interview\Validator;

use Exception;
use Money\Money;
use PragmaGoTech\Interview\Enum\LoanLengthEnum;
use PragmaGoTech\Interview\Model\LoanProposal;

class LoanProposalValidator
{
    const MIN_LOAN_AMOUNT = 100000;
    const MAX_LOAN_AMOUNT = 2000000;

    /**
     * @throws Exception
     */
    public static function validate(LoanProposal $loanProposal): void
    {
        if ($loanProposal->amount()->lessThan(Money::PLN(self::MIN_LOAN_AMOUNT))
            || $loanProposal->amount()->greaterThan(Money::PLN(self::MAX_LOAN_AMOUNT))
        ) {
            throw new Exception('Invalid amount for loan.');
        }

        if (!in_array($loanProposal->term(), LoanLengthEnum::values())) {
            throw new Exception('Invalid term for loan.');
        }
    }
}