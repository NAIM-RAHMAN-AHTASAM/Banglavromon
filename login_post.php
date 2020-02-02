<?php
session_start();
require 'db.php';

$email=$_POST['email'];
$password=$_POST['password'];

$SELECT="SELECT COUNT(*) as login,id,name,email,photo,role FROM tb_registration WHERE email='$email' and password='$password'";
$SELECT_result=mysqli_query($db_connection,$SELECT);
$after_assoc=mysqli_fetch_assoc($SELECT_result);


if($after_assoc['login']==1)
{
  $_SESSION['login'] ="login conform";
  $_SESSION['id'] =$after_assoc['id'];
  $_SESSION['name'] =$after_assoc['name'];
  $_SESSION['email'] =$after_assoc['email'];
  $_SESSION['photo'] =$after_assoc['photo'];
  $_SESSION['role'] =$after_assoc['role'];


  header('location:admin.php');

}
else {

$_SESSION['login_err'] = "login err";
header('location:login.php');
}
 ?>
