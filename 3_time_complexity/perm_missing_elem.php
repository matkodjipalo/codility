<?php

require_once __DIR__.'/../vendor/autoload.php';

/*
A zero-indexed array A consisting of N different integers is given.
The array contains integers in the range [1..(N + 1)], which means that exactly one element is missing.

Your goal is to find that missing element.

Write a function:

    function solution($A);

that, given a zero-indexed array A, returns the value of the missing element.

For example, given array A such that:

  A[0] = 2
  A[1] = 3
  A[2] = 1
  A[3] = 5

the function should return 4, as it is the missing element.

Assume that:
        N is an integer within the range [0..100,000];
        the elements of A are all distinct;
        each element of array A is an integer within the range [1..(N + 1)].

Complexity:
        expected worst-case time complexity is O(N);
        expected worst-case space complexity is O(1),
        beyond input storage (not counting the storage required for input arguments).

Elements of input arrays can be modified.
*/

function solution($A)
{
    sort($A);
    $counter = $A[0];

    if ($counter != 1) {
        return 1;
    }

    foreach ($A as $elem) {
        if ($elem != $counter) {
            return $elem - 1;
        }

        $counter++;
    }

    return $counter;
}


$a = [1, 2, 3, 4, 5, 6];

$result = solution($a);

s($result);


