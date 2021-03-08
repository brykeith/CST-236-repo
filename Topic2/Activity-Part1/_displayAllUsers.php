<?php

/**
 * CST-236
 * Author: Brydon Johnson
 * Date: 3/7/21
 * 
 * _displayAllUsers.php: 
 *    partial view that displays all users passed by an array
 *    
 *    
 *    
 */

?>

<table>
  <thead>
    <td>ID</td>
    <td>FIRST NAME</td>
    <td>LAST NAME</td>
  </thead>

  <?php

  for ($i = 0; $i < count($results); $i++) {
    echo '<tr>';
    echo '<td>' . $results[$i]['ID'] . '</td>';
    echo '<td>' . $results[$i]['FIRST_NAME'] . '</td>';
    echo '<td>' . $results[$i]['LAST_NAME'] . '</td>';
    echo '</tr>';
  }
  ?>
</table>