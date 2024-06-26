<?php

namespace App;

abstract class GameAbstractClass
{
    public $userInput;
    abstract function display();
    abstract function task();
    function userInput()
    {
        $this->userInput = readline();
    }
}
