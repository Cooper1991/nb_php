<?php

$find = array('jack', 'michael', 'john');
$replace = array('j**k', '*ichae*', 'j**n');

if(isset($_POST['user_input']) && !empty('user_input')) {

  $user_input = $_POST['user_input'];
  $user_input_new = str_ireplace($find, $replace, $user_input);

  echo $user_input_new;

}

 ?>




 <form action="word_censoring.php" method="post">
   <textarea name="user_input" rows="6" cols="30"></textarea><br><br>
   <input type="submit" value="Submit">
 </form>
