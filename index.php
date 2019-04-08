<?php

function solution($N) {
    $binary = str_split((string)decbin($N));
    $zeroKey = 0;
    $zeros = [];

    foreach ($binary as $b) {
        if ($b == "0") {
            $zeros[$zeroKey][] = $b;
        } else {
            $zeroKey++;
        }
    }

    print_r($binary);
    print_r($zeros);

    return $N;
}


print_r(solution(33));