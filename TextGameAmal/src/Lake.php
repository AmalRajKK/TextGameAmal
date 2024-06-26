<?php

namespace App;

class Lake extends GameAbstractClass
{

    public House $house;
    function __construct()
    {
        $this->house = new House();
    }
    function task()
    {
        $task = readline("find the word in this ( O T M T O A ).\n");
        if ($task === 'TOMATO') {
            return true;
        }
        echo "invalig answer try again\n";
        $this->task();
    }
    function display()
    {
        if ($this->task()) {
            echo "Now you are at the lake where do you want to go left or ight?\n";
            $this->userInput();

            if ($this->userInput === 'left' || 'LEFT') {
                $this->house->display();
            } else {
                $this->house->display();
            }
        }
    }
}
