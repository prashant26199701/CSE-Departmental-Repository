<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'You have logout succesfully';
   header('Refresh: 2; URL = login.php');
?>