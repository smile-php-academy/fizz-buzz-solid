<?php

namespace App\Contract;

interface RuleInterface
{
    public function checkRule(int $number): bool;

    public function print(int $number): string;
}
