<?php

session_start();
if(!isset($_SESSION['login']))
{
  $_SESSION['login'] = 'Please First Login';
  header('location:login.php');
}
 ?>
