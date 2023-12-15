<?php
//$ar5 = range(2,9);
//$ar6 = shuffle($ar5);

$ar6 = array();
for ($i = 0; $i <6; $i++) {
    $ar5[]=rand(1,6);
}

function countElement($ar6):void
{
    echo "<h3>" . "Count: " . count($ar6) . "</h3>";
    echo "<h3>" . "Min: " . min($ar6) . "</h3>";
    echo "<h3>" . "Max: " . max($ar6) . "</h3>";
    echo "<h2>" . "Output: " .implode(",", $ar6) . "</h2>";
}
countElement($ar5);

// не уверен что правильно по заданию но вроде работает через shuffle не меняются значения min max