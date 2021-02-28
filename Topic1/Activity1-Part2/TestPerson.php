<?php 
/**
 * CST-235
 * Author: Brydon Johnson
 * Date: 2/27/21
 * 
 * TestPerson.php: 
 *    description
 *    
 *    
 *    
 */

  require_once 'Person.php';

  $person1 = new Person("Brydon");
  $person2 = new Person("Samuel");

  $person1->walk();
  $person2->walk();

  $person1->formalGreeting();
  $person2->spanishGreeting();

  $person1->login("username", "password");
  $person2->login("notusername", "notpassword");


?>