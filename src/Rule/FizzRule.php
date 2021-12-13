<?php

namespace App\Rule;

use App\Contract\RuleInterface;

class FizzRule implements RuleInterface
{

    public function checkRule(int $number): bool
    {
        return $number % 3 === 0 && $number % 5 !== 0;
    }

    public function print(int $number): string
    {
        return 'Fizz';
    }
}
