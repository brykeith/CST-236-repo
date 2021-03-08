<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 2/28/21
 * 
 * registerHandler.php: 
 *    receives POST request from register.html
 *    creates UserDataService. Calls the registerNewUser method
 *    registers new use
 *
 */
require_once 'header.php';
require_once 'autoLoader.php';

$attemptedRegisterUsername = $_POST['Username'];
$attemptedRegisterPassword = $_POST['Password'];
$attemptedRegisterEmail = $_POST['Email'];
$attemptedRegisterFirstName = $_POST['FirstName'];
$attemptedRegisterLastName = $_POST['LastName'];

$service = new UserDataService();
$service->registerNewUser($attemptedRegisterUsername, $attemptedRegisterPassword, $attemptedRegisterEmail, $attemptedRegisterFirstName, $attemptedRegisterLastName);
