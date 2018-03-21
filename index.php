<?php
require 'var.php';
include 'www/head.php';
?>

<main id="startPage" class="splash">

  <!-- background video -->
  <video class="cover-video" poster="vid/poster/banner.jpeg" playsinline  autoplay="true" muted="true"  loop="true" id="bgvid" />
    <source src="vid/mp4/video-1.mp4"  type="video/mp4" />
  </video>

  <!-- cover title -->
  <div class="cover-title">
    <h1 class="">L'Histoire des Jacquet</h1>
    <h2 class="">
      <cite>
        « Nos disparus ont, dans une grande partie, fait de nous ce que nous sommes aujourd'hui. »
      </cite>
      <br>
      J. Ruskin
    </h2>
    <a href="<?php echo $pageHome ?>">
      <button type="button" class="btn btn-lg btn-info">Bienvenu</button>
    </a>
  </div>

</main>
