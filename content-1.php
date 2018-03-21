<?php
require 'var.php';
include 'www/head.php';
include 'www/header.php';
?>

<main class="container-fluid d-flex flex-column align-items-center">

  <!-- START timeline content -->
  <?php for ($i = 5; $i <= 10; $i++) { ?>
    <!-- <div class=""> -->
    <?php include 'www/content/content-'.$i.'.php'; ?>
  <!-- </div> -->
  <?php } ?>
  <!-- END timeline content -->

  <!-- load next page -->

  <a href="<?php echo $pageContent2 ?>" class="mt-5">
    <button type="button" class="btn btn btn-outline-primary btn-lg">Suite de la Saga</button>
  </a>


</main>

<?php include 'www/footer.php';?>
