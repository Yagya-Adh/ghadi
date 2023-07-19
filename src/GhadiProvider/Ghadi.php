<?php

namespace Yagya\Ghadi\GhadiProvider;

use Yagya\Ghadi\Digital\Digital;


class Ghadi
{
    use Digital;

    protected static $time;

    public function __construct()
    {
    }

    public static function show()
    {
        return Ghadi::$time  = date("l jS \of F Y h:i:s A");
    }

    public static function today()
    {
    }
}
