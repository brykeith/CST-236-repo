<?php

/**
 * CST-235
 * Author: Brydon Johnson
 * Date: 
 * 
 * Dog.php: 
 *    description
 *    
 *    
 *    
 */

require_once 'Animal.php';

class Dog extends Animal
{
  public function talk()
  {
    echo "barky bark <br>";
  }

  public function doTrick()
  {
    echo "I am dog. jump, fetch, roll over. You name it <br>";
  }
}
