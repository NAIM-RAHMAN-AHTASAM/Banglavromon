<?php
require 'db.php';
?>

<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];


  $insert ="INSERT INTO tb_message (name,email,message) VALUES('$name','$email','$message')";
  $insert_resullt= mysqli_query($db_connection,$insert);
  header('location:index.php#contact');
 ?>
