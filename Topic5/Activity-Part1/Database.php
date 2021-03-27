<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 2/28/21
 * 
 * database.php: 
 *    Class used to be out database object
 *    Returns a mysqli object
 *    connects to heroku database
 *    
 *    
 *    
 */

class Database
{
  private $servername = "localhost";
  private $server_username = "root";
  private $server_password = "root";
  private $database = "ical7";

  // returns mysqli object. connects to heroky database
  function getConnection()
  {
    $conn = new mysqli($this->servername, $this->server_username, $this->server_password, $this->database);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error . "<br>");
    }
    return $conn;
  }
}
