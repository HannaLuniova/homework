<?php
include 'vendor/autoload.php';
//require __DIR__ . '/vendor/autoload.php';

use Anna\Calculator;

$calc = new Calculator(3, 3);
echo $calc->sum() . "<br>";
echo $calc->mult() . "<br>";
echo $calc->diff();