<?php

use App\Application;
use App\Rule\BuzzRule;
use App\Rule\FizzBuzzRule;
use App\Rule\FizzRule;

include_once __DIR__ . '/../vendor/autoload.php';

$app = new Application();

$app->addRule(new FizzRule());
$app->addRule(new BuzzRule());
$app->addRule(new FizzBuzzRule());

$app->index(range(1, 50));
