<?php

// Autoload Classes
spl_autoload_register('myAutoloader');

function myAutoloader($className)
{
    require_once $className.'.php';
}

General::printLines([
    "Enter to play and type 'exit' to leave: "
]);

$line = General::takeInput();

$game = new FuzBuz;
if (trim($line) != 'exit') {
    General::printLines(["Welcome to 'Game of FuzBuz'"]);

    // start game
    $game->startGame();
} else {
    $game->exitGame();
}
