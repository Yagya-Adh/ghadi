<?php

require_once __DIR__ . '../../vendor/autoload.php';

use Yagya\Ghadi\GhadiProvider\Ghadi;


/**
 *  Static methods call
 * 
 * 
 * * */
echo Ghadi::show();
echo Ghadi::Today();



/***
 * *  non static method traits  
 * 
 * */
echo "<br>";
$ob = new Ghadi();
echo '<br>';
$ob->digitalDay();
echo '<br>';
$ob->clockTime();
