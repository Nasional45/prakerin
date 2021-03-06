<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Instant - Bootstrap Personal Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Instant
    Template URL: https://templatemag.com/instant-bootstrap-personal-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>

  <!-- Static navbar -->
  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
                <a class="navbar-brand js-scroll-trigger" >KAWAL CORONA</a>
                @if (Route::has('login'))
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav navbar-nav navbar-right">
                    @auth
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('home') }}">Home</a></li>
                    @else
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Login</a></li>
                        @if (Route::has('register'))
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif
                    </ul>
                </div>
            </div>
      <!--/.nav-collapse -->
    </div>
  </div>
  

  <div id="headerwrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
           <!-- <h1>CORONA VIRUS</h1> 
        </div>
      </div>
    </div>
     container  -->
  </div>

  <section id="works"></section>
  <div class="container">
    <div class="row centered mt mb">
      <!-- <h1>My Portfolio</h1>

      <div class="col-lg-4 col-md-4 col-sm-4 gallery">
        <a href="works.html"><img src="assets/img/portfolio/folio01.png" class="img-responsive"></a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 gallery">
        <a href="works.html"><img src="assets/img/portfolio/folio02.png" class="img-responsive"></a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 gallery">
        <a href="works.html"><img src="assets/img/portfolio/folio03.png" class="img-responsive"></a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 gallery">
        <a href="works.html"><img src="assets/img/portfolio/folio04.png" class="img-responsive"></a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 gallery">
        <a href="works.html"><img src="assets/img/portfolio/folio05.png" class="img-responsive"></a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 gallery">
        <a href="works.html"><img src="assets/img/portfolio/folio06.png" class="img-responsive"></a>
      </div>
    </div>
  </div>

  <div id="social">
    <div class="container">
      <div class="row centered">
        <div class="col-lg-2">
          <a href="#"><i class="fa fa-dribbble"></i></a>
        </div>
        <div class="col-lg-2">
          <a href="#"><i class="fa fa-facebook"></i></a>
        </div>
        <div class="col-lg-2">
          <a href="#"><i class="fa fa-twitter"></i></a>
        </div>
        <div class="col-lg-2">
          <a href="#"><i class="fa fa-linkedin"></i></a>
        </div>
        <div class="col-lg-2">
          <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <div class="col-lg-2">
          <a href="#"><i class="fa fa-tumblr"></i></a>
        </div>

      </div>
    </div>
  </div>

  <div id="copyrights">
    <div class="container">
      <p>
        &copy; Copyrights <strong>KAWAL CORONA</strong>. All Rights Reserved
      </p>
      <div class="credits">
      
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/instant-bootstrap-personal-template/
          Licensing information: https://templatemag.com/license/
        
        Created with Instant template by <a href="https://templatemag.com/">TemplateMag</a>
      </div>
    </div>
  </div> --> -->
  <!-- / copyrights -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
