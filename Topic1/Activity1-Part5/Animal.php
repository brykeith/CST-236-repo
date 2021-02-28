<?php

/**
 * CST-235
 * Author: Brydon Johnson
 * Date: 2/28/21
 * 
 * Animal.php: 
 *    description
 *    
 */

abstract class Animal
{
  private $name;
  private $color;

  public function __construct($name, $color)
  {
    $this->name = $name;
    $this->color = $color;
  }

  abstract function talk();
  abstract function doTrick();
}
