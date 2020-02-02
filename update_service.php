<?php
require 'db.php';


 ?>
 <?php
 $id=$_POST['id'];
 $service_title=$_POST['service_title'];
 $service_description=$_POST['service_description'];



 if ($_FILES['service_img']['name'] != '') {
   $select="SELECT service_img FROM tb_services WHERE id=$id";
   $select_result= mysqli_query($db_connection,$select);
   $after_assoc= mysqli_fetch_assoc($select_result);
   $delete_photo= "uploads/services/".$after_assoc['service_img'];
   unlink($delete_photo);


   $uploaded_img = $_FILES['service_img'];
   $after_explode = explode('.', $uploaded_img['name']);
   $extension = end($after_explode);
   $allowed_formet = array('jpg','png', 'jpeg', 'gif');


       if(in_array($extension, $allowed_formet)){
           if($uploaded_img['size'] <= 850000){

             $Update = "UPDATE tb_services SET service_title='$service_title',service_description='$service_description' WHERE id=$id";
             $update_result=mysqli_query($db_connection,$Update);

               $file_name =$id.'.'.$extension;
               $new_location = "uploads/services/".$file_name;
               move_uploaded_file($uploaded_img['tmp_name'],$new_location);

               $update_photo = "UPDATE tb_services SET service_img='$file_name' WHERE id=$id";
              $update_photo_result = mysqli_query($db_connection,$update_photo);
              header('location:view_service.php');


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

   $Update = "UPDATE tb_services SET service_title='$service_title',service_description='$service_description' WHERE id=$id";
   $update_result=mysqli_query($db_connection,$Update);
   header('location:view_service.php');

 }





  ?>
