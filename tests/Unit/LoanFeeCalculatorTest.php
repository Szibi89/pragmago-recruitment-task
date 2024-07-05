<?php

declare(strict_types=1);

use PragmaGoTech\Interview\LoanFeeCalculator;
use PragmaGoTech\Interview\Model\LoanProposal;

beforeEach(function () {
    $this->loanFeeCalculator = new LoanFeeCalculator();
});

test('test loan fee calculator', function (int $term, float $amount, float $fee) {
    $client = Mockery::mock(LoanProposal::class);
    $client->shouldReceive('term')->andReturn($term);
    $client->shouldReceive('amount')->andReturn($amount);

    expect($this->loanFeeCalculator->calculate($client))->toBe($fee);
})->with('loan_proposal_params_with_fee');

dataset('loan_proposal_params_with_fee', [
    [12, 1000, 50],
    [12, 2000, 90],
    [12, 3000, 90],
    [12, 4000, 115],
    [12, 5000, 100],
    [12, 6000, 120],
    [12, 7000, 140],
    [12, 8000, 160],
    [12, 9000, 180],
    [12, 10000, 200],
    [12, 11000, 220],
    [12, 12000, 240],
    [12, 13000, 260],
    [12, 14000, 280],
    [12, 15000, 300],
    [12, 16000, 320],
    [12, 17000, 340],
    [12, 18000, 360],
    [12, 19000, 380],
    [24, 1000, 70],
    [24, 2000, 100],
    [24, 3000, 120],
    [24, 4000, 160],
    [24, 5000, 200],
    [24, 6000, 240],
    [24, 7000, 280],
    [24, 8000, 320],
    [24, 9000, 360],
    [24, 10000, 400],
    [24, 11000, 440],
    [24, 12000, 480],
    [24, 13000, 520],
    [24, 14000, 560],
    [24, 15000, 600],
    [24, 16000, 640],
    [24, 17000, 680],
    [24, 18000, 720],
    [24, 19000, 760],
    [24, 20000, 800],
]);