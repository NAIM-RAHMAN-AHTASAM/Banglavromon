<?php

require 'session.php';


require'header.php';
require'db.php';
 ?>




 <?php
 $id = $_GET['id'];
$select="SELECT * FROM tb_registration WHERE id=$id";
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
            <td>Name:</td>
            <td><?php echo $after_assoc['name'] ?></td>

          </tr>
          <tr>
            <td>email:</td>
            <td><?php echo $after_assoc['email'] ?></td>

          </tr>
          <tr>
            <td>password:</td>
            <td><?php echo $after_assoc['password'] ?></td>
          </tr>
          <tr>
            <td>country:</td>
            <td><?php echo $after_assoc['country'] ?></td>
          </tr>
          <tr>
            <td>gender:</td>
            <td><?php echo $after_assoc['gender'] ?></td>

          </tr>
          <tr>
            <td>hobbies:</td>
            <td><?php echo $after_assoc['hobbies'] ?></td>

          </tr>
          <tr>
            <td>subject:</td>
            <td><?php echo $after_assoc['subject']; ?></td>

          </tr>
          <tr>
            <td>message:</td>
            <td><?php echo $after_assoc['message'] ?></td>
          </tr>
          <tr>
            <td>date:</td>
            <td><?php echo $after_assoc['bdate'] ?></td>
          </tr>
          <tr>
            <td >Photo:</td>
            <td > <img src="uploads/imgs/<?php echo $after_assoc['photo'] ?> " width="200" alt=""> </td>
          </tr>
        </table>
        <a href="users_info.php " class="btn btn-info py-2 m-auto">Back</a>
      </div>

    </div>
  </div>
</section>







 <?php
 require'footer.php'
  ?>
