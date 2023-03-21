<?php 
    include_once("admin/config/Config.php");
    include_once("admin/classes/Categories.php");
    include_once("admin/classes/posts.php");
    $cat = new Categories();
    $post = new posts();
?>


<?php include_once("includes/header.php");?>

  <body>

    <!--  Preloader Start  -->
    <?php include_once("includes/preloader.php");?>
    <!--  Preloader End -->

    <!-- Header Nav-->
    <?php include_once("includes/navbar.php");?>


    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <?php include_once("includes/banner.php");?>
    <!-- Banner Ends Here -->

  <!-- Call to action CTA -->
  <?php include_once("includes/cta.php");?>


    <section class="blog-posts">
      <div class="container">
        <div class="row">
        <?php include_once("includes/all-posts.php");?>
          <?php include_once("includes/sidebar.php");?>
        </div>
      </div>
    </section>

    
   <!-- Footer -->
   <?php include_once("includes/footer.php");?>

   <!-- Script -->
   <?php include_once("includes/script.php");?>

  </body>
</html>