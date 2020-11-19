<?php
 include('db/config.php');
 include('header.php');
 
?>

  <main class="site-main">
    
    <!--================ Hero banner start =================-->
    <section class="hero-banner">
      <div class="container">
        <div class="row no-gutters align-items-center pt-60px">
          <div class="col-5 d-none d-sm-block">
            <div class="hero-banner__img">
              <img class="img-fluid" src="img/bookclub.png" alt="">
            </div>
          </div>
          <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
            <div class="hero-banner__content">
              <h4>Join the Reading Revolution</h4>
              <h1>OnlineLib</h1>
              <p>Our online library is a virtual book club where subscribers have access to a curated selection of fantastic books authored by African and released monthly.</p>
              <a class="button button-hero" href="product.php">Join Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Hero banner start =================-->

    <!--================ Hero Carousel start =================-->
    <section class="section-margin mt-0">
      <div class="owl-carousel owl-theme hero-carousel">
        <div class="hero-carousel__slide">
          <img src="img/book.jpg" alt="" class="img-fluid">
          <!-- <a href="#" class="hero-carousel__slideOverlay">
            <h3>Flash Drive  Vs Hard Drive</h3>
            <p>Accessories Item</p>
          </a> -->
        </div>
        <div class="hero-carousel__slide">
          <img src="img/book1.jpg" alt="" class="img-fluid">
          <!-- <a href="#" class="hero-carousel__slideOverlay">
            <h3>Air Conditioner Vs. Fan</h3>
            <p>Accessories Item</p>
          </a> -->
        </div>
        <div class="hero-carousel__slide">
          <img src="img/book2.jpg" alt="" class="img-fluid">
          <!-- <a href="#" class="hero-carousel__slideOverlay">
            <h3>Pay On Delivery</h3>
            <p>Accessories Item</p>
          </a> -->
        </div>
      </div>
    </section>
    <!--================ Hero Carousel end =================-->

  </main>



  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>