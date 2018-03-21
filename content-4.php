<?php
require 'var.php';

include 'www/head.php';
include 'www/header.php';
?>

<main class="container-fluid">

  <?php for ($i = 18; $i <= 21; $i++) { ?>
    <!-- <div class=""> -->
    <?php include 'www/content/content-'.$i.'.php'; ?>
  <!-- </div> -->
  <?php } ?>

</main>

<?php include 'www/footer.php';?>
