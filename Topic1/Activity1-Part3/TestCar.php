<?php 
/**
 * CST-235
 * Author: Brydon Johnson
 * Date: 2/27/21
 * 
 * TestCar.php: 
 *    TestCar is the test script to test all the functions of the Car, Tire, and Engine Classes.
 * */

  require_once 'Car.php';
  
  $car1 = new Car();
  $car1->checkTirePressure();
  $car1->startEngine();
  $car1->stopEngine();
  $car1->drive(100);
  $car1->startEngine();
  $car1->drive(40);
?>