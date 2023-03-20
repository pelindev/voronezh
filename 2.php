<?php

function romeToArabic($str) {
    $dict = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    ];

    $result = 0;

    foreach ($dict as $key => $value) {
        while (strpos($str, $key) === 0) {
            $result += $value;
            $str = substr($str, strlen($key));
        }
    }
    return $result;
}

echo romeToArabic('MCDXIX');
