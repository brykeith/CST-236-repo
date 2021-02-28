<?php 
/**
 * CST-235
 * Author: Brydon Johnson
 * Date: 2/28/21
 * 
 * Superman.php: 
 *    child class to SuperHero.php
 *    properties: 
 * 
 *    methods: 
 *    
 *    
 *    
 */

  require_once 'SuperHero.php';

  class Superman extends SuperHero{
    public function __construct(){
      parent::__construct("Superman");
      $this->setHealth(rand(1, 1000));
      echo "<br>" . $this->getName() . " CAN FLY! He will surely Win! <br>";
      echo $this->getName() . " is starting with " . $this->getHealth() . "<br>";
    }
  }



?>