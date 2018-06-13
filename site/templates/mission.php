<?php snippet('header') ?>

<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <img src="assets/images/logo_trans.png" alt="MundoComm logo" style="width:100px;height:100px;position: static; cursor: pointer;" onclick="document.location.href = './'">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">Story</a>
                </li>
                <li>
                    <a class="page-scroll" href="#team">Team Members</a>
                </li>
                <li>
                    <a class="page-scroll" href="#country">Country</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Intro Header -->
<header class="intro" style="background-image: url('<?php echo('assets/images/header-images/image_01.jpg') ?>')">
    <div class="floating-shader">
    </div>
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="brand-heading">MundoComm</h1>
                    <p class="intro-text">An innovative training program in Latin America for maternal health improvement.</p>
                    <a href="#about" class="btn btn-circle page-scroll">
                        <i class="fa fa-angle-double-down animated"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!--About Section-->
<section id="about" class="container content-section text-center">
<div class="row">
  <div class="col-lg-8 col-lg-offset-2" style="color: #000000;">
      <h2>Story</h2>
      <img class="center-block img-responsive" style= "width:75%"src = "assets/images/catacamascollage .jpg" alt= "Catacamas Collage">
      <ul class="list-inline">
  </div>
      
</div>
</section>
 <!--Team Members Section-->
<section id="team" class="container content-section text-center">
<div class="row">
  <div class="col-lg-8 col-lg-offset-2" style="color: #000000;">
  <h2>Team Members</h2>
    <ul style="list-style: none;">
      <li style="font-size: 20px;"><b>Master Ramón Alberto Valladares</b></li>
      <li style="font-size: 20px;"><b>Dra. Sandra L Rivera Valladares</b></li>
      <li style="font-size: 20px;"><b>Lcda. Karla P. Laínez Diaz</b></li>
      <li style="font-size: 20px;"><b>Ing. Angélica Y. López Pérez</b></li>
    </ul>
  </div>	
</div>
</section>
<!--Country Section-->
<section id="country" class="container content-section text-center">
<div class="row">
  <div class="col-lg-8 col-lg-offset-2" style="color: #000000;">
      <h2>Country</h2>
      <ul class="list-inline">
  </div>
      
</div>
</section>



<?php snippet('footer') ?>