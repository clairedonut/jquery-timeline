<?php
require 'var.php';

include 'www/head.php';
include 'www/header.php';
?>

<main class="container-fluid d-flex flex-column align-items-center">

  <?php for ($i = 11; $i <= 12; $i++) { ?>
    <!-- <div class=""> -->
    <?php include 'www/content/content-'.$i.'.php'; ?>
  <!-- </div> -->
  <?php } ?>

  <!-- load next page -->

  <a href="<?php echo $pageContent3 ?>" class="mt-5">
    <button type="button" class="btn btn btn-outline-primary btn-lg">Suite de la Saga</button>
  </a>

</main>

<?php include 'www/footer.php';?>
