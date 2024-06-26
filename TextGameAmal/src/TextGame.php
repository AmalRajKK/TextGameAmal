<?php

namespace App;

use App\Road;

class TextGame extends GameAbstractClass
{
    public Road $road;
    function __construct()
    {
        $this->road = new Road();
    }
    function task()
    {
    }
    function display()
    {
        echo "press 'S' to start\n";
        $this->userInput();
        if ($this->userInput === 'S' || 's')
            $this->road->display();
    }
    function run()
    {

        $this->display();
    }
}
