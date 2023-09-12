<?php

function my_str_reverse(string $string): string
{
    $length = 0;
    while (isset($string[$length])) {
        $length++;
    }
    $reverseWord = "";
    for ($i = $length - 1; $i >= 0; $i--) {
        $reverseWord .= $string[$i];
    }
    return $reverseWord;
}

my_str_reverse('Hello');
