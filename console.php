<?php

require_once './vendor/autoload.php';

use Raszek\FizzBuzz\FizzBuzzFactory;

if (!isset($argv[1])) {
    throw new RuntimeException('Usage php console.php [numberOfLines]');
}

if (!ctype_digit($argv[1])) {
    throw new RuntimeException('Invalid argument [numberOfLines] must be integer');
}

$factory = new FizzBuzzFactory;

$fizzBuzzConsole = $factory->createConsole();

echo $fizzBuzzConsole->run($argv[1]);
