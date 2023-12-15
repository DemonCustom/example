<?php
function AddnumbersColor($n1, $n2, $color) // передача параметра в функцию из вне
{
    echo "Sum is: <span style='color:" . $color . ";'> " .
        ($n1 + $n2) . "</span><br/>";
}

AddnumbersColor(110, 50000, "blue");

function AddNumbersColor2($n3, $n4, $color = '#EE33FF') // передача параметра в функции
{
    echo "Sum is: <span style='color: " . $color . ";'>" .
        ($n3 + $n4) . "</span><br/>";
}

AddNumbersColor2(220, 45000);

function AddNumbers($n1, $n2) // возвращение значения
{
    return ($n1 + $n2);
}

$total = AddNumbers(100, 1000); // добавляем значения и сохраняем в переменную total
echo $total . "</br>";

function IncNumberByTen($n1) // принимает значение $number и увеличивает его на 10 ( $n1 += 10;) создавая новую локальную переменную не изменяя изначальную $number
{
    $n1 += 10;
    echo 'From function:' . $n1 . '</br>'; // выводит результат (15)
}

$number = 5;
IncNumberByTen($number);
echo 'From outside function:' . $number . '</br>'; // выводит значение переменной $number (5) изначальное

function IncNumberbyTenRef(&$n1) // & передает параметр по ссылке и не создает локальную копию внутри функции (изменяет исходную переменную $number2)
{
    $n1 += 10;
    echo 'From function:' . $n1 . '</br>';
}

$number2 = 5;
IncNumberbyTenRef($number2);
echo 'From outside function:' . $number2 . '</br>';

/////////////////////////////////////////////

$title = "Chapter 1";
function ColorTitle($color)
{
    global $title; // обозначение переменной вне зоны видимости функции
    echo "<h1 style='color:" . $color . ";'>" . $title . "</h1>";
}

ColorTitle('#EE33FF');

/////////////////////////////////////////////

ColorTitle2('#EE33FF'); // место положение вызова функии не влияет на вывод тк сначала парсится файл с кодом а затем выполняется
$title = "Chapter 1";
function ColorTitle2 ($color)
{
    global $title; // обозначение переменной вне зоны видимости функции
    echo "<h1 style='color:" . $color . ";'>" . $title . "</h1>";
}