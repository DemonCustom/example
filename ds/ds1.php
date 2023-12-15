<?php

$ar1 = [
    "one" => "yellow",
    "two" => "blue",
    "three" => "green",
    "four" => "brown"
];

//echo "<div style='width:110px;margin:20px;height:110px;background-color: " . $ar1["one"] . "; '>" . $ar1["one"] . "</div>";
//echo "<div style='width:110px;margin:20px;height:110px;background-color: " . $ar1["two"] . "; '>" . $ar1["two"] . "</div>";
//echo "<div style='width:110px;margin:20px;height:110px;background-color: " . $ar1["three"] . "; '>" . $ar1["three"] . "</div>";
//echo "<div style='width:110px;margin:20px;height:110px;background-color: " . $ar1["four"] . "; '>" . $ar1["four"] . "</div>";

//sort($ar1);
//for ($i = 0; $i < count($ar1); $i++) {
//    echo "<div style='width:110px;margin:20px;height:110px;background-color: " . $ar1[$i] . "; '>" . "</div>";
//}

foreach ($ar1 as $k => $v) {
    echo "<div class='colors'  style='background-color: " . $ar1["$k"] . ";'>" . "<div class='colors_text' > $v</div>" . "</div>";
}
?>
<link rel='stylesheet' href='styles.css'/>
