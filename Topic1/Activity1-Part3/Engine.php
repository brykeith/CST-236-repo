<?php 
/**
 * CST-235
 * Author: Brydon Johnson
 * Date: 2/27/21
 * 
 * Engine.php: 
 *    Engine class 
 */

  class Engine{
    private $isRunning;

    public function __construct(){
      $this->isRunning = false;
    }
    
    public function start(){
      $this->isRunning = true;
      echo "<br>Engine has been started! Vroom! Vroom! <br>";
    }

    public function stop(){
      $this->isRunning = false;
      echo "<br>Engine has been stopped. :( <br>";
    }

    public function getIsRunning(){
      return $this->isRunning;

    }
  }


?>