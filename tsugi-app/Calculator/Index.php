<?php

require_once 'OperatorInterface.php';
require_once 'Calculator.php';
require_once 'Divider.php';
require_once 'Adder.php';
require_once 'Substractor.php';

$c = new Calculator;

$c->setOperation(new Adder);
$c->calculate(10, 50);//60

$c->setOperation(new Substractor);
$c->calculate(20);//40

$c->setOperation(new Divider);
$c->calculate(5);//8

echo $c->getResult();

 ?>
