<?php

namespace Raszek\FizzBuzz\Tests;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Raszek\FizzBuzz\FizzBuzzConsole;
use Raszek\FizzBuzz\FizzBuzzFactory;

class FizzBuzzConsoleTest extends TestCase
{

    #[Test]
    public function fizz_buzz_correctly_outputs_for_console()
    {

        $fizzBuzzConsole = $this->create();

        $expected = <<<EOF
        1
        2
        Fizz
        4
        
        EOF;
        
        $result = $fizzBuzzConsole->run(4);

        $this->assertEquals($expected, $result);
    }

    private function create(): FizzBuzzConsole
    {
        $factory = new FizzBuzzFactory();

        return $factory->createConsole();
    }

}
