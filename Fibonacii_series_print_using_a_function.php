<?php

/**
 * 
 * ?Task 4: Fibonacci Series printing using a Function
 * Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
 * this 15 as an argument of a function and use a for loop to generate these numbers and print
 * them by calling the function.
 */


 function generateFibonacci($n) {
    $fibonacci = array();
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    echo "The first $n numbers in the Fibonacci series are:\n";

    if ($n >= 1) {
        echo $fibonacci[0];
    }

    if ($n >= 2) {
        echo " " . $fibonacci[1];
    }

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        echo " " . $fibonacci[$i];
    }
}

// echo "Enter the number of Fibonacci numbers to generate: ";
// $n = intval(trim(fgets(STDIN)));

// generateFibonacci($n);
generateFibonacci(15);



?>
