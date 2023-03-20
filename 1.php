<?php

function secondMostRepeatedChar($str)
{
    $array = str_split($str);
    $charCounts = array();

    foreach ($array as $char) {
        if (isset($charCounts[$char])) {
            $charCounts[$char]++;
            continue;
        }
        $charCounts[$char] = 1;
    }
    arsort($charCounts);
    $secondMostRepeatedChar = array_keys($charCounts)[1];
    return $secondMostRepeatedChar;
}

echo(secondMostRepeatedChar('abccdccefffgihhhhhj'));
