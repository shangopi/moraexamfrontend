<?php

  include 'db_connect.php';
  
  $name =  htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
  $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
  $message =  htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');
  
  $sql = "INSERT INTO tbl_contact (name, email, messege)
  VALUES ('{$name}', '{$email}', '{$message}')";

  if ($db->query($sql) ==TRUE) {
      echo'your response is submitted successfully';
  } else {
     echo 'error';

  }

?>
