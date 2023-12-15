<?php
$int = 5;
$deg = 12;

function intDeg($int, $deg): void
{
    echo '<h1>' . $int . '^' . $deg . '=' . ($int ** $deg) . '</h1>';
}

intDeg($int, $deg);