<?php
include 'autoload.php';

use SumMult\Calculator;

$calculator1 = new Calculator(5, 5);

echo $calculator1->sum() . "<br/>";
echo $calculator1->mult() . "<br/>";

$calculator2 = new DiffDiv\Calculator(5, 5);

echo $calculator2->diff() . "<br/>";
echo $calculator2->div() . "<br/>";
