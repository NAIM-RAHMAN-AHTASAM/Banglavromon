<?php
require 'header.php';


 ?>


<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-7 text-center m-auto py-3 bg-dark">
        <form action="signup_post.php"  method="post">
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










        <button type="submit" class="btn btn-success  offset-md-3">Submit</button>


        <div class=" <?=(!empty($_GET['success'])?'alert alert-success':' ')?> mt-3" role="alert">
          <?php
          if (!empty($_GET['success'])) {
            echo $_GET['success'];
          }


            ?>

          </div>





      </form>

      </div>

    </div>

  </div>
</section>
<?php

require 'footer.php';

 ?>
