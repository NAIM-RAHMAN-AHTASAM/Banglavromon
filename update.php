<?php
require 'db.php';


 ?>
 <?php
 $id=$_POST['id'];
 $name=$_POST['name'];
 $email=$_POST['email'];
 $country=$_POST['country'];
 $gender=$_POST['gender'];
 $hobbies=$_POST['hobbies'];
 $subject=$_POST['subject'];
 $after_implode_hobbies= implode(',',$hobbies);
 $after_implode_subject= implode(',',$subject);
 $message=$_POST['message'];
 $date=$_POST['date'];


 if ($_FILES['photo']['name'] != '') {


   $select="SELECT photo FROM tb_registration WHERE id=$id";
   $select_result= mysqli_query($db_connection,$select);
   $after_assoc= mysqli_fetch_assoc($select_result);
   $delete_photo= "uploads/imgs/".$after_assoc['photo'];
   unlink($delete_photo);


   $uploaded_img = $_FILES['photo'];
   $after_explode = explode('.', $uploaded_img['name']);
   $extension = end($after_explode);
   $allowed_formet = array('jpg','png', 'jpeg', 'gif');


       if(in_array($extension, $allowed_formet)){
           if($uploaded_img['size'] <= 850000){

             $Update = "UPDATE tb_registration SET name='$name',email='$email',country='$country',gender='$gender',hobbies='$after_implode_hobbies',subject='$after_implode_subject',message='$message' WHERE id=$id";
             $update_result=mysqli_query($db_connection,$Update);

               $file_name =$id.'.'.$extension;
               $new_location = "uploads/imgs/".$file_name;
               move_uploaded_file($uploaded_img['tmp_name'],$new_location);

               $update_photo = "UPDATE tb_registration SET photo='$file_name' WHERE id=$id";
              $update_photo_result = mysqli_query($db_connection,$update_photo);
              header('location:users_info.php');


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

   $Update = "UPDATE tb_registration SET name='$name',email='$email',country='$country',gender='$gender',hobbies='$after_implode_hobbies',subject='$after_implode_subject',message='$message' WHERE id=$id";
   $update_result=mysqli_query($db_connection,$Update);
   header('location:users_info.php');

 }





  ?>
