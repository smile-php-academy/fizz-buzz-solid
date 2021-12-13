<?php

namespace App;

use App\Contract\RuleInterface;
use App\Rule\DefaultRule;

class Application
{
    private $rules = [];

    public function index($numbers): void
    {
        foreach ($numbers as $number) {
            $rule = $this->getRule($number);
            echo $rule->print($number) . PHP_EOL;
        }
    }

    public function addRule(RuleInterface $rule): void
    {
        $this->rules[] = $rule;
    }

    public function getRule($number): RuleInterface
    {
        foreach ($this->rules as $rule) {
            if ($rule->checkRule($number)) {
                return $rule;
            }
        }
        return new DefaultRule();
    }
    public function getRules()
    {
        return $this->rules;
    }
}
