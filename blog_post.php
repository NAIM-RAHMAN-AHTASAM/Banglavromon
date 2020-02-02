<?php
session_start();
require 'db.php';


 ?>


<?php
$id=$_POST['user_id'];
$blog_title=$_POST['blog_title'];
$blog_description=$_POST['blog_description'];





  $insert ="INSERT INTO tb_blog(blog_title,blog_description,status,user_id) VALUES('$blog_title','$blog_description',0,$id)";
  $insert_resullt= mysqli_query($db_connection,$insert);



    $_SESSION['blog'] = 'Your Registration is Successfully Done!!';
    header('location:add_blog.php');







 ?>
