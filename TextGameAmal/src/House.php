<?php

namespace App;

class House extends GameAbstractClass
{
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
            echo "you win got the tressure\n";
        }
    }
}
