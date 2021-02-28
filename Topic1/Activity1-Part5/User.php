<?php

/**
 * CST-235
 * Author: Brydon Johnson
 * Date: 2/28/21
 * 
 * User.php: 
 *    description
 *    
 *    
 *    
 */


class User
{
  public $username;
  public $password;

  public static $minPassLength = 5;

  public static function validatePassword($password)
  {
    if (strlen($password) > self::$minPassLength) {
      return true;
    } else {
      return false;
    }
  }
}
