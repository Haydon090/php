<?php
require_once('classCalculator.php');

$calculator = new Calculator();
echo $calculator->sum(4)->minus(1)->product(32)->division(0.5)->getResult() . PHP_EOL;
echo $calculator->sum(3)->sum(3)->minus(3)->division(3)->getResult() . PHP_EOL;
echo $calculator->sum(1.4)->sum(2.6)->product(6)->getResult() . PHP_EOL; 
echo $calculator->sum(1)->sum(2)->product(3)->division(0)->getResult();
