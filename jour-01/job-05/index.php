<?php

function my_is_prime(int $number): bool
{
    $prime = 0;
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i === 0) {
            $prime++;
        }
    }

    if ($prime === 2) {
        return true;
    } else {
        return false;
    }
}

my_is_prime(3);
my_is_prime(12);
