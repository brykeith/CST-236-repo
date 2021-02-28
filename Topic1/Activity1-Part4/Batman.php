<?php 
/**
 * CST-235
 * Author: Brydon Johnson
 * Date: 2/28/21
 * 
 * Batman.php: 
 *    child class to SuperHero.php
 *    properties: 
 * 
 *    methods: 
 *    
 *    
 *    
 */

  require_once 'SuperHero.php';
  
  class Batman extends SuperHero{
    public function __construct(){
      parent::__construct("Batman");
      $this->setHealth(rand(1, 1000));
      echo "<br>" . $this->getName() . " Is CLEVER! He will surely Win! <br>";
      echo $this->getName() . " is starting with " . $this->getHealth() . "<br>";
    }
  }


?>