<?php

/**
 * CST-235
 * Author: Brydon Johnson
 * Date: 
 * 
 * Cat.php: 
 *    description
 *    
 *    
 *    
 */

require_once 'Animal.php';

class Cat extends Animal
{
  public function talk()
  {
    echo "meowey meow <br>";
  }

  public function doTrick()
  {
    echo "I am cat. I no do trick <br>";
  }
}
