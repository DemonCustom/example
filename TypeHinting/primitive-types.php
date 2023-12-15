<?php

declare(strict_types=1); // обьявление режима строгой типизации указываем в файле в которм вызываем

require_once'Song.php';
$song = new \TypeHinting\Song('Blackbird',123); // в строгом режиме php не преобразовывает типы к другим

//var_dump($song->name); // проверка типа переменной

print $song->name .'</br>';
print $song->numberOfPlays;


