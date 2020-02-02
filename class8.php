<?php
require 'dashboard_part/header.php';


 ?>


<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-7 text-center m-auto py-3 bg-dark">
        <div class="position-absolute">
          <a href="login.php" class="btn btn-success" >login</a>
        </div>
        <form action="view8.php"  method="post" enctype="multipart/form-data">
        <div class="form-group text-white">
          <h1>Register Form </h1>
          <input type="text" class="form-control" name="name"
          placeholder="Enter Name">
            <div class="err text-danger py-2">
          <?php
          if (!empty($_GET['err_name'])) {
            echo $_GET['err_name'];
          }
           ?>

        </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="email"
          placeholder="Enter email">
            <div class="err text-danger py-2">
          <?php
          if (!empty($_GET['err_email'])) {
            echo $_GET['err_email'];
          }
           ?>

        </div>
        </div>
        <div class="form-group abc">

          <input type="Password" class="form-control" name="password"
          placeholder="Enter Password" id="myInput">
          <button type="button"  class="btn btn-success"onclick="myFunction()">show</button>
            <div class="err text-danger py-2">
          <?php
          if (!empty($_GET['err_password'])) {
            echo $_GET['err_password'];
          }
           ?>

        </div>
        </div>
        <div class="form-group">

          <input type="Password" class="form-control" name="rpassword"
          placeholder="Enter Password">
            <div class="err text-danger py-2">
          <?php
          if (!empty($_GET['err_rpassword'])) {
            echo $_GET['err_rpassword'];
          }
           ?>

        </div>
        </div>
        <div class="form-group">

          <select class="form-control" name="country">
            <option value=""> Chose country</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="USA"> USA</option>
            <option value="India">India</option>
            <option value="Argentina">Argentina</option>
            <option value="Brazil">Brazil</option>
          </select>
            <div class="err text-danger py-2">
          <?php
          if (!empty($_GET['err_country'])) {
            echo $_GET['err_country'];
          }
           ?>
        </div>
        </div>




        <div class="form-group text-white">
          <input type="radio" name="gender" value="Male">Male
          <input type="radio" name="gender" value="Female">Female
            <div class="err text-danger py-2">
          <?php
          if (!empty($_GET['err_gender'])) {
            echo $_GET['err_gender'];
          }
           ?>

        </div>
        </div>
        <div class="form-group text-white">
          <input type="checkbox" name="hobbies[]" value="cricket"> cricket
          <input type="checkbox" name="hobbies[]" value="football"> football
          <input type="checkbox" name="hobbies[]" value="hadudu"> hadudu
          <input type="checkbox" name="hobbies[]" value="chese"> chese
            <div class="err text-danger py-2">
          <?php
          if (!empty($_GET['err_hobbies'])) {
            echo $_GET['err_hobbies'];
          }
           ?>

        </div>
        </div>
        <div class="form-group">
      <select class="form-control" name="subject[]" multiple>
        <option value="">chose any Subject</option>
        <option value="Math">Math</option>
        <option value="ICT">ICT</option>
        <option value="Physics">Physics</option>
        <option value="Chemistry">Chemistry</option>

      </select>
            <div class="err text-danger py-2">
          <?php
          if (!empty($_GET['err_subject'])) {
            echo $_GET['err_subject'];
          }
           ?>

        </div>
        </div>



        <div class="form-group">
    <textarea name="message" class="form-control" placeholder="Message"></textarea>
            <div class="err text-danger py-2">
          <?php
          if (!empty($_GET['err_message'])) {
            echo $_GET['err_message'];
          }
           ?>

        </div>

        <div class="form-group">

        <select class="form-control" name="role">
          <option value="">Select Role</option>
          <option value="1">Admin</option>
          <option value="2">Modarator</option>
          <option value="3">Editor</option>
        </select>

        </div>
        </div>
        <div class="form-group">
    <input type="date" name="date" class="form-control">
            <div class="err text-danger py-2">
          <?php
          if (!empty($_GET['err_date'])) {
            echo $_GET['err_date'];
          }
           ?>

        </div>
        </div>
        <div class="form-group">
    <input type="file" name="photo" class="form-control" onchange="document.getElementById('imgs').src = window.URL.createObjectURL(files[0])">
    <div class="">
      <img src="" alt="" id="imgs"width="100">
    </div>
            <div class="err text-danger py-2">

        </div>
        </div>
        <button type="submit" class="btn btn-success  offset-md-3">Submit</button>


        <div class=" <?=(!empty($_GET['success'])?'alert alert-success':' ')?> mt-3" role="alert">
          <?php
          if (!empty($_GET['success'])) {
            echo $_GET['success'];
          }


            ?>

</div>



          <?php if ( isset($_SESSION['exist_email'])) {?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong><?php echo $_SESSION['exist_email']; unset($_SESSION['exist_email']); ?></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
        <?php  }


            ?>
          </div>
        </div>
      </form>

      </div>

    </div>

  </div>
</section>
<?php

require 'dashboard_part/footer.php';

 ?>
