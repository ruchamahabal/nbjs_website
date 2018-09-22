<!-- Header -->
<?php include_once 'header.php' ?>

  <!-- Carousel slider -->
  <div id="slider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#slider" data-slide-to="0" class="active"></li>
      <li data-target="#slider" data-slide-to="1"></li>
      <li data-target="#slider" data-slide-to="2"></li>
      <li data-target="#slider" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" >
      <div class="carousel-item active">
        <img class="d-block w-100" src="assets/img/carousel/1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/carousel/2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/carousel/1.jpg" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/carousel/2.jpg" alt="Fourth slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Office bearer 2017 2018 images -->
  <hr>
  <?php include_once 'officeBearer.php' ?>

  <!-- Membership registration form -->
  <hr>
  <div class="row" style="margin-bottom:20px;" align=center>
    <div class="col-8" style="padding-top:8px;">
      <h4> Membership Registration Form Please Download Here </h4>
    </div>
    <div class="col-4">
      <a href="#" class="btn btn-lg" style="background-color:#fe0000;color:#fff;">Download</a>
    </div>
  </div>
  <hr>
<!-- Footer -->
<?php include_once 'footer.php' ?>
