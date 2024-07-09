<?php

declare(strict_types=1);

use Money\Money;
use PragmaGoTech\Interview\LoanFeeCalculator;
use PragmaGoTech\Interview\Model\LoanProposal;

beforeEach(function () {
    $this->loanFeeCalculator = new LoanFeeCalculator();
});

test('test loan fee calculator', function (int $term, Money $amount, Money $fee) {
    $client = Mockery::mock(LoanProposal::class);
    $client->shouldReceive('term')->andReturn($term);
    $client->shouldReceive('amount')->andReturn($amount);

    expect($this->loanFeeCalculator->calculate($client)->equals($fee))->toBeTrue();
})->with('loan_proposal_params_with_fee');

dataset('loan_proposal_params_with_fee', [
// steps
    [12, Money::PLN(100000), Money::PLN(5000)],
    [12, Money::PLN(200000), Money::PLN(9000)],
    [12, Money::PLN(300000), Money::PLN(9000)],
    [12, Money::PLN(400000), Money::PLN(11500)],
    [12, Money::PLN(500000), Money::PLN(10000)],
    [12, Money::PLN(600000), Money::PLN(12000)],
    [12, Money::PLN(700000), Money::PLN(14000)],
    [12, Money::PLN(800000), Money::PLN(16000)],
    [12, Money::PLN(900000), Money::PLN(18000)],
    [12, Money::PLN(1000000), Money::PLN(20000)],
    [12, Money::PLN(1100000), Money::PLN(22000)],
    [12, Money::PLN(1200000), Money::PLN(24000)],
    [12, Money::PLN(1300000), Money::PLN(26000)],
    [12, Money::PLN(1400000), Money::PLN(28000)],
    [12, Money::PLN(1500000), Money::PLN(30000)],
    [12, Money::PLN(1600000), Money::PLN(32000)],
    [12, Money::PLN(1700000), Money::PLN(34000)],
    [12, Money::PLN(1800000), Money::PLN(36000)],
    [12, Money::PLN(1900000), Money::PLN(38000)],
    [12, Money::PLN(2000000), Money::PLN(40000)],
    [24, Money::PLN(100000), Money::PLN(7000)],
    [24, Money::PLN(200000), Money::PLN(10000)],
    [24, Money::PLN(300000), Money::PLN(12000)],
    [24, Money::PLN(400000), Money::PLN(16000)],
    [24, Money::PLN(500000), Money::PLN(20000)],
    [24, Money::PLN(600000), Money::PLN(24000)],
    [24, Money::PLN(700000), Money::PLN(28000)],
    [24, Money::PLN(800000), Money::PLN(32000)],
    [24, Money::PLN(900000), Money::PLN(36000)],
    [24, Money::PLN(1000000), Money::PLN(40000)],
    [24, Money::PLN(1100000), Money::PLN(44000)],
    [24, Money::PLN(1200000), Money::PLN(48000)],
    [24, Money::PLN(1300000), Money::PLN(52000)],
    [24, Money::PLN(1400000), Money::PLN(56000)],
    [24, Money::PLN(1500000), Money::PLN(60000)],
    [24, Money::PLN(1600000), Money::PLN(64000)],
    [24, Money::PLN(1700000), Money::PLN(68000)],
    [24, Money::PLN(1800000), Money::PLN(72000)],
    [24, Money::PLN(1900000), Money::PLN(76000)],
    [24, Money::PLN(2000000), Money::PLN(80000)],
// custom values
    [12, Money::PLN(1925000), Money::PLN(38500)],
    [12, Money::PLN(1925100), Money::PLN(38900)],
    [12, Money::PLN(1925199), Money::PLN(38801)],
    [24, Money::PLN(1150000), Money::PLN(46000)],
    [24, Money::PLN(1149900), Money::PLN(46100)],
]);