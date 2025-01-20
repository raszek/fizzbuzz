<?php

namespace Raszek\FizzBuzz\Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Raszek\FizzBuzz\FizzBuzzFactory;
use Raszek\FizzBuzz\FizzBuzzWeb;

class FizzBuzzWebTest extends TestCase
{

    #[Test]
    public function it_outputs_valid_output_for_web()
    {
        $fizzBuzzWeb = $this->create();

        $result = $fizzBuzzWeb->run(2);

        $expectations = '1<br>2<br>';

        $this->assertSame($expectations, $result);
    }

    private function create(): FizzBuzzWeb
    {
        $factory = new FizzBuzzFactory();

        return $factory->createWeb();
    }
}
