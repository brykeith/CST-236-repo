<?php

/**
 * CST-235
 * Author: Brydon Johnson
 * Date: 2/28/21
 * 
 * StaticDemo.php: 
 *    description
 *    
 *    
 *    
 */

require_once 'User.php';

$pw1 = "asdf";
$pw2 = "asdf;lkj";

if (User::validatePassword($pw2)) {
  echo "Password is long enough! <br>";
} else {
  echo "Your password is too short! <br>";
}
