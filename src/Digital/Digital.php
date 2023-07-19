<?php

namespace Yagya\Ghadi\Digital;


trait Digital
{
    // public $clck;
    public function digitalDay()
    {
        echo "Today is " . date("Y/m/d") . "<br>";
        echo "Today is " . date("Y.m.d") . "<br>";
        echo "Today is " . date("Y-m-d") . "<br>";
        echo "Today is " . date("l");
    }


    public function clockTime()
    {
        echo "The time is " . date("h:i:sa");
    }
}
