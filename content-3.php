<?php
require 'var.php';

include 'www/head.php';
include 'www/header.php';
?>

<main class="container-fluid">

  <?php for ($i = 13; $i <= 17; $i++) { ?>
    <!-- <div class=""> -->
    <?php include 'www/content/content-'.$i.'.php'; ?>
  <!-- </div> -->
  <?php } ?>

  <!-- END timeline content -->

  <a href="<?php echo $pageContent4 ?>" class="mt-5 d-flex justify-content-center">
    <button type="button" class="btn btn btn-outline-primary btn-lg">Suite de la Saga</button>
  </a>

</main>

<?php include 'www/footer.php';?>
