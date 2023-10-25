<?php

class Ship 
{
 public $name;

 public $designation = 'Team Lead';

 public $experience = 1;

 public function sayHello() 
 {
    echo 'Hello vinit';
 }
 public function sayName() {
    // echo 'Rohit';
    return $this->name;
 }

 public function getNameandSpec() {
    return sprintf(
        '%s: Designation:%s, Experience:%s',
        $this->name,
        $this->designation,
        $this->experience
    );
   

 }
}

function printShipSummery($someShip)
{
    echo 'My name is' .$someShip->name;
    echo '<hr/>';
    echo $someShip->sayHello();
    echo '<hr/>';
    echo $someShip->sayName();
    echo '<hr/>';
    echo $someShip->designation;
    echo '<hr/>';
    var_dump($someShip->experience);
    echo '<hr/>';
    echo $someShip->getNameandSpec();
}

$myShip = new Ship();
$myShip->name = 'Vinit Kumar';
$myShip->experience = 10;

$myShip2 = new Ship();
$myShip2->name = 'Rohit Kumar';
$myShip2->experience = 25;

printShipSummery($myShip);
printShipSummery($myShip2);

