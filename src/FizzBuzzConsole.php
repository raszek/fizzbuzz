<?php

namespace Raszek\FizzBuzz;

readonly class FizzBuzzConsole
{

    public function __construct(
        private FizzBuzz $fizzBuzz
    ) {
    }

    public function run(int $numberOfLines): string
    {
        $records = $this->fizzBuzz->generate($numberOfLines);

        $output = '';
        foreach ($records as $record) {
            $output .= $record.PHP_EOL;
        }

        return $output;
    }
}
