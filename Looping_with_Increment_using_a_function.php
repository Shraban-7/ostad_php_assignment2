<?php


/**
 * ?Task 1: Looping with Increment using a Function
 * Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
 * step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
 * should take the arguments like start as 1, end as 20 and step as 2. You must call the
 * function to print.
 * Also do the same using while loop and do-while loop also.
 */

$cnt =0;

function printEvenNumbersForLoop($start, $end, $step) {
    for ($i = $start; $i < $end; $i += $step) {
        // $cnt=$i+1;
        print(($i+1)." ");
        // print($cnt." ");
    }
}

echo "For Loop : ";
printEvenNumbersForLoop(1, 20, 2);
echo "\n";


function printEvenNumbersWhileLoop($start, $end, $step) {
    while ($start < $end) {
        $cnt=$start+1;
        print($cnt." ");
        $start += $step;
    }
}


echo "While Loop: ";
printEvenNumbersWhileLoop(1, 20, 2);
echo "\n";



echo "Do While Loop: ";

function printEvenNumbersDoWhileLoop($start, $end, $step) {
    do {
        $cnt=$start+1;
        print($cnt." ");
        $start += $step;
    } while ($start <= $end);
}


printEvenNumbersDoWhileLoop(1, 20, 2);
echo "\n";



?>