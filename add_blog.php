<?php
require 'dashboard_part/header.php';
$id=$_SESSION['id']

 ?>


<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-7 text-center m-auto py-3 bg-dark">
        <form action="blog_post.php"  method="post" enctype="multipart/form-data">
        <div class="form-group text-white">
          <h1>Add Blog</h1>
          <input type="hidden" class="form-control" name="user_id" value="<?php echo "$id"; ?>"
          placeholder="Blog Title">
          <input type="text" class="form-control" name="blog_title"
          placeholder="Blog Title">
        </div>


        <div class="form-group text-white">

          <textarea class="form-control" name="blog_description" placeholder="Blog Description" ></textarea>
        </div>





        <button type="submit" class="btn btn-success mb-3">Submit</button>

        <?php if(isset($_SESSION['blog'])) {?>
        <div class="alert alert-success alert-dismissible fade show mt-8" role="alert">
  <strong><?php echo $_SESSION['blog']; ?></strong>
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
