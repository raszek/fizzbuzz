<?php

namespace Raszek\FizzBuzz\Tests;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Raszek\FizzBuzz\FizzBuzz;

class FizzBuzzTest extends TestCase
{

    #[Test]
    public function on_0_it_prints_empty_array()
    {
        $fizzBuzz = new FizzBuzz();

        $result = $fizzBuzz->generate(0);

        $this->assertEquals([], $result);
    }

    #[Test]
    public function on_1_it_prints_1()
    {
        $fizzBuzz = new FizzBuzz();

        $result = $fizzBuzz->generate(1);

        $this->assertEquals(['1'], $result);
    }

    #[Test]
    public function on_3_class_prints_fizz()
    {
        $fizzBuzz = new FizzBuzz();

        $result = $fizzBuzz->generate(3);

        $this->assertEquals([
            '1',
            '2',
            'Fizz'
        ], $result);
    }

    #[Test]
    public function on_5_class_prints_fizz_and_buzz()
    {
        $fizzBuzz = new FizzBuzz();

        $result = $fizzBuzz->generate(5);

        $this->assertEquals([
            '1',
            '2',
            'Fizz',
            '4',
            'Buzz',
        ], $result);
    }

    #[Test]
    public function on_15_class_print_fizz_buzz_and_fizzbuzz()
    {
        $fizzBuzz = new FizzBuzz();

        $result = $fizzBuzz->generate(15);

        $this->assertEquals([
            '1',
            '2',
            'Fizz',
            '4',
            'Buzz',
            'Fizz',
            '7',
            '8',
            'Fizz',
            'Buzz',
            '11',
            'Fizz',
            '13',
            '14',
            'FizzBuzz',
        ], $result);
    }

}
