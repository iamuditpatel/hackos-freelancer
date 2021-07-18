<!doctype html>
<html lang="en">
  <head>

    <?php
      require 'partials/head/meta/_meta-in_head.php';
    ?>

    <?php
      require 'partials/head/css/_css-in_head.php';
    ?>

    <title>Freelancer</title>

    <?php
      require 'partials/head/font/_font-in_head.php';
    ?>


  </head>

  <body id="pageTop">

    <div class="container mb-5">

      <?php
        require 'partials/body/nav/_v1-in_nav-in_body.php';
      ?>

    </div>

    <?php
      require 'partials/body/header/_v2-in_header-in_body.php';
    ?>

    <section class="page-section" id="portfolio">
      <div class="container mt-5">

        <?php
          require 'partials/body/portfolio/_v3-in_portfolio-in_body.php';
        ?>

      </div>
    </section>


    <section class="page-section bg-primary text-white text-center"  id="about">
      <div class="container mt-5 pb-5">

        <?php
          require 'partials/body/about/_v2-in_about-in_body.php';
        ?>

      </div>
    </section>

    <section class="page-section text-center" id="contact">
      <div class="container mt-5 pb-5">

        <?php
          require 'partials/body/contact/_v3-in_contact-in_body.php';
        ?>

      </div>
    </section>

    <footer class="footer bg-dark text-white text-center">
      <div class="container">

        <?php
          require 'partials/body/footer/_v3-in_footer-in_body.php';
        ?>

      </div>
    </footer>

    <?php
      require 'partials/body/js/_js-in_body.php';
    ?>

  </body>
</html>
