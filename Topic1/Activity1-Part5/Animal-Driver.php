<?php

/**
 * CST-235
 * Author: Brydon Johnson
 * Date: 
 * 
 * filename.php: 
 *    description
 *    
 *    
 *    
 */
require_once 'Dog.php';
require_once 'Cat.php';

$dog = new Dog("spot", "red");
$cat = new Cat("snowball", "black");

$dog->talk();
$cat->talk();

$dog->doTrick();
$cat->doTrick();
