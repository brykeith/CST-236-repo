<?php 
/**
 * CST-235
 * Author: Brydon Johnson
 * Date: 
 * 
 * SuperHero-Driver.php: 
 *    description
 *    
 *    
 *    
 */

  require_once 'SuperHero.php';
  require_once 'Superman.php';
  require_once 'Batman.php';

  $superman = new Superman();
  $batman = new Batman();
  $turnSwapper = true;

  while (!$superman->getIsDead() && !$batman->getIsDead()) {
    if($turnSwapper){
      $turnSwapper = !$turnSwapper;
      $batman->attack($superman);
    } else {
      $turnSwapper = !$turnSwapper;
      $superman->attack($batman);
    }
  }

?>