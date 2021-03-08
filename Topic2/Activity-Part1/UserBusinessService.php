<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 2/28/21
 * 
 * UserBusinessService.php: 
 *    
 *    
 *    
 *    
 */
require_once 'header.php';
require_once 'autoLoader.php';

class UserBusinessService
{


  // returns an array of users with $firstName in their FIRST_NAME
  function findUserByFirstName($firstName)
  {
    $dataService = new UserDataService();
    return $dataService->findUserByFirstName($firstName);
  }
}
