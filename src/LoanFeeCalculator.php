<?php

declare(strict_types=1);

namespace PragmaGoTech\Interview;

// for debugging:
//require('vendor/autoload.php');
//use Money\Currencies\ISOCurrencies;
//use Money\Formatter\IntlMoneyFormatter;

use Money\Money;
use PragmaGoTech\Interview\Model\FeeStep;
use PragmaGoTech\Interview\Model\LoanProposal;
use PragmaGoTech\Interview\Repository\FeeStepsRepository;
use PragmaGoTech\Interview\Validator\LoanProposalValidator;

class LoanFeeCalculator implements FeeCalculator
{
    public function calculate(LoanProposal $application): Money
    {
        LoanProposalValidator::validate($application);

        $steps = FeeStepsRepository::getFeeSteps($application->term());

        $left = $right = null;
        foreach ($steps as $step) {
            if ($step->getAmount()->lessThanOrEqual($application->amount())) {
                $left = $step;
            } else {
                $right = $step;
                break;
            }
        }

        if ($right === null) {
            return $left->getFee();
        }

        return $this->interpolateFee($application->amount(), $left, $right);
    }

    private function interpolateFee(Money $loanAmount, FeeStep $feeLeft, FeeStep $feeRight): Money
    {
        $feeDiff = $feeRight->getFee()->subtract($feeLeft->getFee());
        $amountStepsDiff = $feeRight->getAmount()->subtract($feeLeft->getAmount());

        $amountDiff = $loanAmount->subtract($feeLeft->getAmount());
        $ratio = $feeDiff->ratioOf($amountStepsDiff);
        $feeRatio = $amountDiff->multiply($ratio);
        $fullAmount = $loanAmount->add($feeLeft->getFee())->add($feeRatio)->divide(500, Money::ROUND_UP)->multiply(500);

        return $fullAmount->subtract($loanAmount);
    }
}

// for debugging:
//$loanCalculator = new LoanFeeCalculator();
//$loanProposal = new LoanProposal(24, Money::PLN('1150100'));
////$loanProposal = new LoanProposal(24, Money::PLN('1149900'));
//$currencies = new ISOCurrencies();
//$numberFormatter = new \NumberFormatter('en_US', \NumberFormatter::CURRENCY);
//$moneyFormatter = new IntlMoneyFormatter($numberFormatter, $currencies);
//var_export($moneyFormatter->format($loanCalculator->calculate($loanProposal)) . PHP_EOL);
////var_export($loanCalculator->calculate($loanProposal)->getAmount());