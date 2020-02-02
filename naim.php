<button type="button" class="btn <?php if ($service_info['status']==1) {
  echo "btn btn-success";
}
else {
  echo "btn btn-danger";
} ?>">
  <?php if($service_info['status']==1){
    echo "Active";
  }
  else { ?>
    <a href="service_active.php?id=<?php echo $service_info['id']; ?>">Deactive</a>
<?php  }?>
</button>
