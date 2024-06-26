<?php

namespace App;

class Road extends GameAbstractClass
{

    public lake $lake;
    public Hill $hill;
    public Road $road;
    function __construct()
    {
        $this->lake = new Lake();
        $this->hill = new Hill();
    }
    function task()
    {
        $task = readline("find the word in this ( E P A L P )\n");
        if ($task === 'APPLE') {
            return true;
        }
        echo "invalig answer try again\n";
        $this->task();
    }
    function display()
    {
        if ($this->task()) {
            echo " you are at the Road where do you want to go left or ight?\n";
            $this->userInput();

            if ($this->userInput === 'left' || 'LEFT') {
                $this->hill->display();
            } else {
                $this->lake->display();
            }
        }
    }
}
