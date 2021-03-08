<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 2/28/21
 * 
 * loginHandler.php: 
 *    receives POST request from login.html
 *    authenticats login data. returns either loginPasses.php or loginFailed.php
 *    
 *    
 *    
 */
require_once 'header.php';
require_once 'autoLoader.php';

$userSearchSting = $_POST['userSearchSting'];

$service = new UserBusinessService();

$results = $service->findUserByFirstName($userSearchSting);
?>
<h2>Search Results</h2>
<p>Here is what we found</p>

<?php

if ($results) {
  // we got some results
  include('_displayAllUsers.php');
} else {
  echo 'no results found';
}

?>