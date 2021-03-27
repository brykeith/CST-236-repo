<?php

require_once 'autoloader.php';

class CheckAccountDataService
{

  private $conn;

  function __construct($conn)
  {
    $this->conn = $conn;
  }

  function getBalance()
  {

    // run query to get balance
    $sql = "SELECT balance FROM checking";
    $result = $this->conn->query($sql);

    if ($result->num_rows == 0) :
      // nothing found. return -1

      return -1;

    else :

      // return balance
      $row = $result->fetch_assoc();
      $balance = $row['balance'];
      return $balance;

    endif;
  }

  function updateBalance($balance)
  {

    // get a database connection
    $db = new Database();
    $this->conn = $db->getConnection();

    // run query to get balance
    $sql = "UPDATE checking SET balance = $balance";
    $result = $this->conn->query($sql);

    if ($result->num_rows == 0) :
      // update successful: return 1

      return 1;

    else :

      // no u pdates made: return 0
      return 0;

    endif;
  }
}
