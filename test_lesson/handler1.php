<?php
if (isset($_POST["submit"])) // Определяет, была ли установлена переменная значением отличным от NULL
{
    echo 'You are welcome,'.$_POST["username"].
    '! Your password is '.$_POST["userpass"].'<br/>';
}
else {
    echo 'No data were received!<br/>'; // Данных не получено
}
