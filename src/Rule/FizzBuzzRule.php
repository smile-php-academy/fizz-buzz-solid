<?php

namespace App\Rule;

use App\Contract\RuleInterface;

class FizzBuzzRule implements RuleInterface
{

    public function checkRule(int $number): bool
    {
        return $number % 15 === 0;
    }

    public function print(int $number): string
    {
        return 'FizzBuzz';
    }
}
