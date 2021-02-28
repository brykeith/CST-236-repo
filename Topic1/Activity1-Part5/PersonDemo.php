<?php

/**
 * CST-235
 * Author: Brydon Johnson
 * Date: 
 * 
 * PersonDemo.php: 
 *    description
 *    
 *    
 *    
 */
require_once 'Person.php';
require_once 'Student.php';

$person = new Person();
$student = new Student();

$person->growOlderBy(2);
$student->growOlderBy(2);

echo "person age is " . $person->age . "<br>";
echo "student age is " .  $student->age . "<br>";
