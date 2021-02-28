<?php 
/**
 * CST-235
 * Author: Brydon Johnson
 * Date: 2/27/21
 * 
 * Car.php: 
 *    properties: 
 *        tire1: has tire pressure and location. can check pressure
 *        tire2: ...
 *        tire3: ...
 *        tire4: ...
 *        engine
 * 
 *    functions:  */

  include 'Tire.php';
  include 'Engine.php';

  class Car{
    private $tire1;
    private $tire2;
    private $tire3;
    private $tire4;
    private $engine;
    private $speed;

    public function __construct(){
      echo "new car has been created! It has 4 tires and 1 engine <br>";
      $this->tire1 = new Tire(32, "front left");
      $this->tire2 = new Tire(34, "front right");
      $this->tire3 = new Tire(32, "rear left");
      $this->tire4 = new Tire(32, "rear right");
      $this->engine = new Engine();
      $this->speed = 0;

    }

    public function checkTirePressure(){
      echo "<br> Let's check these tires! <br>";
      $this->tire1->correctPressure();
      $this->tire2->correctPressure();
      $this->tire3->correctPressure();
      $this->tire4->correctPressure();
      echo "<br> All tires checked! You're good to go! <br>";

    }

    public function startEngine(){
      $this->engine->start();
    }

    public function stopEngine(){
      $this->speed = 0;
      $this->engine->stop();
    }

    public function drive($speed){
      echo "<br>Let's go for a drive!<br>";
      if($this->engine->getIsRunning()){
        if($speed < 60 && $speed > 0){

          $this->speed = $speed;
          echo "The car is now driving at " . $this->speed . "mph";
        } else {
          echo "OOPS Sorry! This car only drives between 0 and 60mph<br>";
        }
      } else {
        echo "OOPS Sorry! The engine is not running<br>";
      }

    }
  }

  

?>