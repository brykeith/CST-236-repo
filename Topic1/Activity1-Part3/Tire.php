<?php 
/**
 * CST-235
 * Author: Brydon Johnson
 * Date: 2/27/21
 * 
 * Tire.php: 
 *    properties: 
 *        tirepressure: keeps track of the tire pressure
 *        location: ie. front right
 *    functions: 
 *        correctPressure(): corrects to 32 psi
 */


  class Tire{
    private $tirePressure;
    private $location;

    public function __construct($tirePressure, $location){
      $this->tirePressure = $tirePressure;
      $this->location = $location;
    }
    
    public function correctPressure(){
      echo "<br>checking " . $this->location . " tire pressure. <br>";
      if($this->tirePressure != 32){
        echo "Tire Pressure: " . $this->tirePressure . ". uh oh! let's fix that before it gets worse... <br>";
        $this->tirePressure = 32;
        echo "The tire has been corrected to 32psi <br>";
      } else {
        echo "The tire pressure is at 32psi <br>";
      }
    }
  }
  

?>