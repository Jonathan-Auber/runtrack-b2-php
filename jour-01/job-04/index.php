<?php

function my_fizz_buzz(int $length): array
{
    $array = [];
    for ($i = 1; $i <= $length; $i++) {
        if ($i % 3 === 0 && $i % 5 === 0) {
            $array[] = "FizzBuzz";
        } elseif ($i % 5 === 0) {
            $array[] = "Buzz";
        } elseif ($i % 3 === 0) {
            $array[] = "Fizz";
        } else {
            $array[] = $i;
        }
    }
    return $array;
}

my_fizz_buzz(15);
