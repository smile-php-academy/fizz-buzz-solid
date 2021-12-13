<?php

namespace App\Rule;

use App\Contract\RuleInterface;

class BuzzRule implements RuleInterface
{
    public function checkRule(int $number): bool
    {
        return $number % 5 === 0 && $number % 3 !== 0;
    }

    public function print(int $number): string
    {
        return 'Buzz';
    }
}
