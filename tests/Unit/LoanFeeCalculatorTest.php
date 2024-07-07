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
    [12, Money::PLN(1000), Money::PLN(50)],
    [12, Money::PLN(2000), Money::PLN(90)],
    [12, Money::PLN(3000), Money::PLN(90)],
    [12, Money::PLN(4000), Money::PLN(115)],
    [12, Money::PLN(5000), Money::PLN(100)],
    [12, Money::PLN(6000), Money::PLN(120)],
    [12, Money::PLN(7000), Money::PLN(140)],
    [12, Money::PLN(8000), Money::PLN(160)],
    [12, Money::PLN(9000), Money::PLN(180)],
    [12, Money::PLN(10000), Money::PLN(200)],
    [12, Money::PLN(11000), Money::PLN(220)],
    [12, Money::PLN(12000), Money::PLN(240)],
    [12, Money::PLN(13000), Money::PLN(260)],
    [12, Money::PLN(14000), Money::PLN(280)],
    [12, Money::PLN(15000), Money::PLN(300)],
    [12, Money::PLN(16000), Money::PLN(320)],
    [12, Money::PLN(17000), Money::PLN(340)],
    [12, Money::PLN(18000), Money::PLN(360)],
    [12, Money::PLN(19000), Money::PLN(380)],
    [24, Money::PLN(1000), Money::PLN(70)],
    [24, Money::PLN(2000), Money::PLN(100)],
    [24, Money::PLN(3000), Money::PLN(120)],
    [24, Money::PLN(4000), Money::PLN(160)],
    [24, Money::PLN(5000), Money::PLN(200)],
    [24, Money::PLN(6000), Money::PLN(240)],
    [24, Money::PLN(7000), Money::PLN(280)],
    [24, Money::PLN(8000), Money::PLN(320)],
    [24, Money::PLN(9000), Money::PLN(360)],
    [24, Money::PLN(10000), Money::PLN(400)],
    [24, Money::PLN(11000), Money::PLN(440)],
    [24, Money::PLN(12000), Money::PLN(480)],
    [24, Money::PLN(13000), Money::PLN(520)],
    [24, Money::PLN(14000), Money::PLN(560)],
    [24, Money::PLN(15000), Money::PLN(600)],
    [24, Money::PLN(16000), Money::PLN(640)],
    [24, Money::PLN(17000), Money::PLN(680)],
    [24, Money::PLN(18000), Money::PLN(720)],
    [24, Money::PLN(19000), Money::PLN(760)],
    [24, Money::PLN(20000), Money::PLN(800)],
]);