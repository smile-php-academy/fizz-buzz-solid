<?php

namespace App;

class Application
{
    public function index(): void
    {
        foreach (range(1, 50) as $number) {
            if ($number % 3 === 0 && $number % 5 !== 0) {
                echo 'Fizz';
                continue;
            }
            if ($number % 3 !== 0 && $number % 5 === 0) {
                echo 'Buzz';
                continue;
            }
            if ($number % 15 === 0) {
                echo 'FizzBuzz';
                continue;
            }
            echo $number;
        }
    }
}
