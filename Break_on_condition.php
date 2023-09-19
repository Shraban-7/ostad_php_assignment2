<?php

/**
 * ?Task 3: Break on Condition
 * Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
 * Fibonacci number is greater than 100, break out of the loop using the break statement.
 */

$first = 0;
$second = 1;

echo "Fibonacci Sequence First 10 number: ";
echo "$first $second ";

$n=10;

// NB: when n>=12 then it's exceed 100 then the loop will break ; suppose n=15 then the fibonacci series :0 1 1 2 3 5 8 13 21 34 55 89 144 233 377 but according the condition the fibonacci series break and the series will be 0 1 1 2 3 5 8 13 21 34 55 89 because 12th value exceed 100

for ($i = 2; $i < $n; $i++) {
    
    $next = $first + $second;

    
    if ($next > 100) {
        break; 
    }

    
    echo "$next ";

    
    $first = $second;
    $second = $next;
}

?>
