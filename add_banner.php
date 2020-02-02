<?php
require 'dashboard_part/header.php';


 ?>


<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-7 text-center m-auto py-3 bg-dark">
        <form action="banner_post.php"  method="post" enctype="multipart/form-data">
        <div class="form-group text-white">
          <h1>Add Banner</h1>
          <input type="text" class="form-control" name="banner_title"
          placeholder="Banner Title">
        </div>

        <div class="form-group text-white">

          <textarea class="form-control" name="banner_description" placeholder="Banner Description"></textarea>
        </div>

        <div class="form-group text-white">
          <input type="text" class="form-control" name="banner_btn"
          placeholder="Banner Button Name">
        </div>

        <div class="form-group">
    <input type="file" name="banner_img" class="form-control" onchange="document.getElementById('imgs').src = window.URL.createObjectURL(files[0])">
    <div class="">
      <img src="" alt="" id="imgs"width="100">
    </div>
      <div class="err text-danger py-2">

        </div>
        </div>

        <button type="submit" class="btn btn-success mb-3">Submit</button>

        <?php if(isset($_SESSION['banner'])) {?>
        <div class="alert alert-success alert-dismissible fade show mt-8" role="alert">
  <strong><?php echo $_SESSION['banner']; ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>




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
