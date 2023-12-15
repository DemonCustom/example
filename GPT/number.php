<?php

function printOddNumbers($n)
{
    $oddNumbers = array();
    $sum = 0;

    // Loop to find N odd numbers
    for ($i = 1; $i <= $n; $i++) {
        $oddNumber = (2 * $i) - 1;
        $oddNumbers[] = $oddNumber;
        $sum += $oddNumber;
    }

    // Calculate the average value
    $average = $sum / $n;

    // Print the odd numbers in reverse order
    for ($i = $n - 1; $i >= 0; $i--) {
        echo $oddNumbers[$i] . " ";
    }

    echo "\nAverage: " . $average;
}

// Example usage
$N = 5; // Number of odd numbers to print

printOddNumbers($N);
?>