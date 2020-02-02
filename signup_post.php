<?php
session_start();
require 'db.php';


 ?>


<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];



  $insert ="INSERT INTO tb_registration(name,email,password,role) VALUES('$name','$email','$password',4)";
  $insert_resullt= mysqli_query($db_connection,$insert);



 ?>
