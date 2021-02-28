<?php

/**
 * CST-235
 * Author: Brydon Johnson
 * Date: 2/28/21
 * 
 * Person.php: 
 *    description
 *    
 *    
 *    
 */

final class Person
{
  public $name;
  public $age;

  // if we insert final here (final public function...)
  //  then the child class (student) cannot override function. 
  public function growOlderBy($years)
  {
    $this->age = $this->age + $years;
  }
}
