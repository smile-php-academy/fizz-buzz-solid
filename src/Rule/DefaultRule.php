<?php

namespace App\Rule;

use App\Contract\RuleInterface;

class DefaultRule implements RuleInterface
{
    public function checkRule(int $number): bool
    {
        return true;
    }

    public function print(int $number): string
    {
        return $number;
    }
}
