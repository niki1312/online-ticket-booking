<?php
 session_start();
 setcookie(session_name(), "", time() - 3600); 
 session_unset();
 header('location:adminlogin.php');
 ?>
