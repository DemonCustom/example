<?php

$headers = apache_request_headers(); // возвращает строки-заголовки созданного Request в виде ассоциативного массива и выводим через foreach()
foreach ($headers as $header => $value) {
    echo "$header: $value <br />\n";
}


$ar4 = [
    "yellow" => "banana",
    "red" => "cherry",
    "green" => "apple"
];

echo "Length of array is " . count($ar4) . "</br>";
print_r($ar4);
echo "</br>";

$ar = [11, 5, 89, 117, 56, 200];
echo "</br> From while() loop:</br>";
$i = 0;
while ($i < count($ar)) {
    echo $ar[$i] . " ";
    $i++;
}
echo "</br>";

echo "</br> From for() loop sorted array:</br>";
sort($ar);
for ($i = 0; $i < count($ar); $i++) {
    echo $ar[$i] . " ";
}
echo "</br>";
echo "</br> From foreach() loop assotiative array:</br>";
foreach ($ar4 as $k => $v) {
    echo "Key:" . $k . " value:" . $v . "</br>";
}

