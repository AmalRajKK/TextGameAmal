<?php

namespace App;

class Hill extends GameAbstractClass
{

    public Lake $lake;
    public House $house;
    function __construct()
    {
        $this->lake = new Lake();
        
        $this->house = new House();
    }
    function task()
    {
        $task = readline("find the word in this ( N O M G A )\n");
        if ($task === 'MANGO') {
            return true;
        }
        echo "invalig answer try again\n";
        $this->task();
    }


    function display()
    {
        if ($this->task()) {
            echo "Now you are at the hill where do you want to go left or ight?\n";
            $this->userInput();

            if ($this->userInput === 'left' || 'LEFT') {
                $this->lake->display();
            } else {
                $this->house->display();
            }
        }
    }
}
