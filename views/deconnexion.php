<?php

    foreach($_COOKIE as $cookie_name => $cookie_value){

      unset($_COOKIE[$cookie_name]);
      
      setcookie($cookie_name, '', time() - 86400, '/');
   }
  header("Location:../index.php");
  exit;
?>