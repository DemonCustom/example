<?php

namespace TypeHinting;

class Song
{
    public $name;
    public $numberOfPlays;

    public function __construct(string $name, int $numberOfPlays) // указываем типы переменных
    {
        $this->name = $name;
        $this->numberOfPlays = $numberOfPlays;
    }
}

