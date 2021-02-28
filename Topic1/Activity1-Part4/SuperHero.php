<?php 
/**
 * CST-235
 * Author: Brydon Johnson
 * Date: 2/28/21
 * 
 * SuperHero.php: 
 *    SuperClass to Superman and Batman.
 *    Properties: 
 * 
 *    Methods: 
 *    
 *    
 *    
 */


class SuperHero{
  private $name;
  private $health;
  private $isDead;

  public function __construct( $name ){
    $this->name = $name;
    $this->health = 1000;
    $this->isDead = false;
  }

  // ==================================
  // START GETTERS AND SETTERS
  // ==================================
  
  public function getName(){
    return $this->name;
  }
  
  public function setName($name){
    $this->name = $name;
  }
    
  public function getHealth(){
    return $this->health;
  }
  
  public function setHealth($health){
    $this->health = $health;
  }
    
  public function getIsDead(){
    return $this->isDead;
  }
  
  public function setIsDead($isDead){
    $this->isDead = $isDead;
  }

  // ==================================
  // END GETTERS AND SETTERS
  // ==================================


  public function attack($otherHero){
    $damage = rand(1, 10);
    echo "<br>" . $this->name . " attacks " . $otherHero->getName() . " for " . $damage . " health. <br>";
    $otherHero->takeDamage($damage);
  }

  public function takeDamage($damage){
    $this->health = $this->health - $damage;

    if($this->health < 1){
      $this->setIsDead(true);
      echo "<br>" . $this->name . " has perished!!<br>";
    } else {
      
      echo $this->name . " now has " . $this->health . " health. <br>";
    }
  }

}

?>