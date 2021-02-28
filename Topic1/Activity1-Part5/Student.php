<?php

/**
 * CST-235
 * Author: Brydon Johnson
 * Date: 2/28/21
 * 
 * Student.php: 
 *    description
 *    
 *    
 *    
 */

require_once 'Person.php';

class Student extends Person
{

  public function growOlderBy($decade)
  {
    $this->age = $this->age + (10 * $decade);
  }
}
