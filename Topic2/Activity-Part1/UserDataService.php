<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 2/28/21
 * 
 * UserDataService.php: 
 *    Used for searching user records by username, id and email.
 *    Used to registerNewUser
 *      cannot be done if username already exists
 *    
 *    
 *    
 */
require_once 'header.php';
require_once 'autoLoader.php';

class UserDataService
{

  function registerNewUser($username, $password, $email, $firstName, $lastName)
  {

    if (!$this->findUserByUsername($username)) {
      $database = new Database();

      // check username not already exists

      echo "<br>ADDING USER";
      echo "<br>USERNAME: $username";
      echo "<br>PASSWORD: $password";
      echo "<br>EMAIL: $email";
      echo "<br>EMAIL: $firstName";
      echo "<br>EMAIL: $lastName";


      echo "<br><a href=\"login.html\">login</a><br>";

      $sql_query = "INSERT INTO mfqgkhncw3r34ada.users(USERNAME, PASSWORD, EMAIL, FIRST_NAME, LAST_NAME) VALUES ('$username', '$password', '$email', '$firstName', '$lastName')";

      $conn = $database->getConnection();
      $result = $conn->query($sql_query);
    }
  }

  function findUserByID($id)
  {
    $database = new Database();

    // testing
    echo "testing the database info <br>";
    print_r($database);

    echo "<br> I am searching for id: " . $id;

    $sql_query = "SELECT ID, USERNAME, PASSWORD, EMAIL FROM mfqgkhncw3r34ada.users WHERE ID = $id";

    $conn = $database->getConnection();
    $result = $conn->query($sql_query);

    if (!$result) {
      echo "assume there is an errir in SQL statement";
      exit;
    }

    if ($result->num_rows == 0) {
      return null;
    } else {
      echo "I found " . $result->num_rows . "results! <br>";
      return "I found " . $result->num_rows . "results! <br>";
    }
  }

  function findUserByUsername($username)
  {
    $database = new Database();

    // testing
    $sql_query = "SELECT * FROM mfqgkhncw3r34ada.users WHERE USERNAME = '$username'";

    $conn = $database->getConnection();
    $result = $conn->query($sql_query);

    if (!$result) {
      echo "assume there is an errir in SQL statement";
      exit;
    }

    if ($result->num_rows == 0) {
      return false;
    } else {
      echo "Username already exists <br>";
      return true;
    }
  }

  // returns an array of users with $firstName in their FIRST_NAME
  function findUserByFirstName($firstName)
  {
    $database = new Database();

    $conn = $database->getConnection();

    $stmt = $conn->prepare("SELECT ID, FIRST_NAME, LAST_NAME FROM mfqgkhncw3r34ada.users WHERE FIRST_NAME LIKE ?");

    $like_firstName = "%" . $firstName . "%";
    $stmt->bind_param("s", $like_firstName);

    $stmt->execute();

    $result = $stmt->get_result();

    if (!$result) {
      echo "assume there is an errir in SQL statement";
      exit;
    }

    if ($result->num_rows == 0) {
      return null;
    } else {

      $person_array = array();

      while ($person = $result->fetch_assoc()) {
        array_push($person_array, $person);
      }
      return $person_array;
    }
  }

  function findUserByLastName($lastName)
  {
    $database = new Database();

    $conn = $database->getConnection();

    $stmt = $conn->prepare("SELECT ID, FIRST_NAME, LAST_NAME FROM mfqgkhncw3r34ada.users WHERE LAST_NAME LIKE ?");

    $like_lastName = "%" . $lastName . "%";
    $stmt->bind_param("s", $like_lastName);

    $stmt->execute();

    $result = $stmt->get_result();

    if (!$result) {
      echo "assume there is an errir in SQL statement";
      exit;
    }

    if ($result->num_rows == 0) {
      return null;
    } else {

      $person_array = array();

      while ($person = $result->fetch_assoc()) {
        array_push($person_array, $person);
      }
      return $person_array;
    }
  }

  function deleteUser($id)
  {
  }

  function updateUser($id, $userArray)
  {
  }
}
