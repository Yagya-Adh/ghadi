<?php

namespace Yagya\Ghadi\GhadiProvider;

use DateTime;

class Ghadi
{

    public $time;

    public function __construct()
    {
        echo 'The new Ghadi is lunch.';
    }


    public function show()
    {
        echo  $this->time = date("l jS \of F Y h:i:s A");
    }
}
