<?php

namespace Raszek\FizzBuzz;

class FizzBuzzFactory
{

    public function createConsole(): FizzBuzzConsole
    {
        return new FizzBuzzConsole(new FizzBuzz());
    }

    public function createWeb(): FizzBuzzWeb
    {
        return new FizzBuzzWeb(new FizzBuzz());
    }

}
