<?php
 include 'config.php';
session_start();

session_unset();


session_destroy();

 header("Location: http://localhost/grocery%20store/seller/login.php");


 ?>
