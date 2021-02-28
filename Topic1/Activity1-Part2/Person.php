<?php 
/**
 * Person Class
 * 
 * User: Brydon Johnson
 * Date 2/27/21
 * 
 */

  class Person{
    // Properties
    private $name;
    private $age;
    private $username;
    private $password;

    // Constructor
    public function __construct($name){
      $this->name = $name;
      $this->age = 25;
      $this->username = "username";
      $this->password = "password";
      echo "Hi, I am a new person. My name is " . $name . "<br>";

    }

    public function walk(){
      echo $this->name . " is walking. this is the walk method! <br>";
    }

    public function formalGreeting(){
      echo "good day to you sir. You can call me: " . $this->name . "<br>";
    }

    public function spanishGreeting(){
      echo "hola, me llamo: " . $this->name . "<br>";
      
    }

    public function login($username, $password){
      if($username == $this->username && $password == $this->password){
        echo $this->name . " has been logged in successfully <br>";
      } else {
        echo "login failed for " . $this->name . "<br>";
      }
      
    }
  }



?>