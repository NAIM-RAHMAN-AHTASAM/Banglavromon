<?php

require 'session.php';


require'header.php';
require'db.php';
 ?>




 <?php
 $id = $_GET['id'];
$select="SELECT * FROM tb_banners WHERE id=$id";
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
            <td>BANNER TITLE:</td>
            <td><?php echo $after_assoc['banner_title'] ?></td>

          </tr>
          <tr>
            <td>BANNER DESCRIPTION:</td>
            <td><?php echo $after_assoc['banner_description'] ?></td>

          </tr>
          <tr>
            <td>BANNER BUTTON:</td>
            <td><?php echo $after_assoc['banner_btn'] ?></td>
          </tr>






          <tr>
            <td >BANNER PHOTO:</td>
            <td > <img src="uploads/banners/<?php echo $after_assoc['banner_img'] ?> " width="200" alt=""> </td>
          </tr>
        </table>
        <a href="view_banner.php " class="btn btn-info py-2 m-auto">Back</a>
      </div>

    </div>
  </div>
</section>







 <?php
 require'footer.php'
  ?>
