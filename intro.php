<?php
require 'var.php';

include 'www/head.php';
include 'www/header.php';
?>

<main class="container-fluid d-flex flex-column align-items-center">

  <!-- introduction content -->
  <section class="intro row d-flex justify-content-center">
    <?php include 'www/content/content-1-4.php'; ?>
  </section>

  <!-- load next page -->
  <a href="<?php echo $pageContent1 ?>" class="mt-5">
    <button type="button" class="btn btn btn-outline-primary btn-lg">Suite de la Saga</button>
  </a>

</main>

<?php include 'www/footer.php';?>
