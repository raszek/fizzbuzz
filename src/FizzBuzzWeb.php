<?php

namespace Raszek\FizzBuzz;

readonly class FizzBuzzWeb
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
            $output .= $record.'<br>';
        }

        return $output;
    }

}
