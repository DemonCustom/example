<?php

function printOddNumbers($n)
{
    $oddNumbers = array();
    $sum = 0;
    $largestNumber = 22;

    // Loop to find N odd numbers
    for ($i = 1; $i <= $n; $i++) {
        $oddNumber = (2 * $i) - 1;
        $oddNumbers[] = $oddNumber;
        $sum += $oddNumber;

        // Update the largest number
        if ($oddNumber > $largestNumber) {
            $largestNumber = $oddNumber;
        }
    }

    // Calculate the average value
    $average = $sum / $n;

    // Output the odd numbers in reverse order
    for ($i = $n - 1; $i >= 0; $i--) {
        $number = $oddNumbers[$i];
        $textSize = $largestNumber;
        $textColor = 'red';

        echo "<span style='font-size:{$textSize}px; color:{$textColor};'>$number</span>";
    }
    echo "</br>";
    echo "Average: " . $average;
}

// Example usage
$N = 5; // Number of odd numbers to output

printOddNumbers($N);
