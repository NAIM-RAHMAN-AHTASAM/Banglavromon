<?php
require 'db.php';


 ?>
 <?php
 $id=$_POST['id'];
 $banner_title=$_POST['banner_title'];
 $banner_description=$_POST['banner_description'];
 $banner_btn=$_POST['banner_btn'];



 if ($_FILES['banner_img']['name'] != '') {
   $select="SELECT banner_img FROM tb_banners WHERE id=$id";
   $select_result= mysqli_query($db_connection,$select);
   $after_assoc= mysqli_fetch_assoc($select_result);
   $delete_photo= "uploads/banners/".$after_assoc['banner_img'];
   unlink($delete_photo);


   $uploaded_img = $_FILES['banner_img'];
   $after_explode = explode('.', $uploaded_img['name']);
   $extension = end($after_explode);
   $allowed_formet = array('jpg','png', 'jpeg', 'gif','JPG');


       if(in_array($extension, $allowed_formet)){
           if($uploaded_img['size'] <= 8500000){

             $Update = "UPDATE tb_banners SET banner_title='$banner_title',banner_description='$banner_description',banner_btn='$banner_btn' WHERE id=$id";
             $update_result=mysqli_query($db_connection,$Update);

               $file_name =$id.'.'.$extension;
               $new_location = "uploads/banners/".$file_name;
               move_uploaded_file($uploaded_img['tmp_name'],$new_location);

               $update_photo = "UPDATE tb_banners SET banner_img='$file_name' WHERE id=$id";
              $update_photo_result = mysqli_query($db_connection,$update_photo);
              header('location:view_banner.php');


           }
           else{
               echo "size a somossha";
           }
       }
       else{
           echo "thik nai";
       }



 }
 else {

   $Update = "UPDATE tb_banners SET banner_title='$banner_title',banner_description='$banner_description',banner_btn='$banner_btn' WHERE id=$id";
   $update_result=mysqli_query($db_connection,$Update);
   header('location:view_banner.php');

 }





  ?>
