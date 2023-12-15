<?php
$n1 = 10; // assign value 10 to variable $n1
$n2 = 190; // assign value 190 to variable $n2
$sum = $n1 + $n2; // calculate the sum assign it to variable $sum

echo "<span style='font-size: 30px'>Sum is</span> 
      <span style='color:mediumvioletred;  
                   font-size: 45px;
      '>" . $sum . "</span>"."</br>"; // output a string to browser (стилизация элемента)

$name = "Ann";
echo "Hello, " . $name . "!" ."</br>";

$n1 = 10;
$n2 = 100;
$sum = $n1 + $n2;
echo '$n1 + $n2 =' . $sum."</br>";

$n1 = 10;
$n2 = 100;
$sum = $n1 + $n2;
echo "$n1 + $n2 =" . $sum ."</br>";

print($sum."</br>"); // вывод данных из переменной
print_r($sum."</br>"); // вывод данных из массива
var_dump($sum . "  Значение"); // вывод структуры любых данных

//."</br>" перенос строки