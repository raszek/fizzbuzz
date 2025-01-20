<?php

namespace Raszek\FizzBuzz;

class FizzBuzz
{

    public function generate(int $numberOfLines): array
    {
        $result = [];
        for ($i = 1; $i <= $numberOfLines; $i++) {
            $result[] = $this->getLineOutput($i);
        }

        return $result;
    }

    private function getLineOutput(int $lineNumber): string
    {
        return match (true) {
            $lineNumber % 15 === 0 => 'FizzBuzz',
            $lineNumber % 5 === 0 => 'Buzz',
            $lineNumber % 3 === 0 => 'Fizz',
            default => $lineNumber
        };
    }

}
