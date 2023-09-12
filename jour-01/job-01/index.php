<?php

function my_str_search(string $haystack, string $needle): int
{
    $length = 0;
    while (isset($haystack[$length])) {
        $length++;
    }
    $occurences = 0;
    for ($i = 0; $i < $length; $i++) {
        if ($haystack[$i] === $needle) {
            $occurences++;
        }
    }
    return $occurences;
}

my_str_search('La Plateforme', 'a');
