<?php

require 'session.php';


require 'header.php';
require 'db.php';
 ?>




 <?php
 $id = $_GET['id'];
$select="SELECT * FROM tb_services WHERE id=$id";
$select_result = mysqli_query($db_connection,$select);
$after_assoc = mysqli_fetch_assoc($select_result);


  ?>
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="single text-center  text-white bg-dark py-2">
          <h3>Individual Information</h3>

        </div>
        <table class="table table-dark table-striped">
          <tr>
            <td>SERVICE TITLE:</td>
            <td><?php echo $after_assoc['service_title'] ?></td>

          </tr>
          <tr>
            <td>SERVICE DESCRIPTION :</td>
            <td><?php echo $after_assoc['service_description'] ?></td>

          </tr>




          <tr>
            <td >PHOTO:</td>
            <td > <img src="uploads/services/<?php echo $after_assoc['service_img'] ?> " width="200" alt=""> </td>
          </tr>
        </table>
        <a href="view_service.php " class="btn btn-info py-2 m-auto">Back</a>
      </div>

    </div>
  </div>
</section>







 <?php
 require'footer.php'
  ?>
