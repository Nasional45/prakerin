<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medicio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets2/img/favicon.png" rel="icon">
  <link href="assets2/img/apple-touch-icon.png" rel="apple-touch-icon">
 <!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets2/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets2/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets2/vendor/owl.carousel/assets2/owl.carousel.min.css" rel="stylesheet">
  <link href="assets2/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets2/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets2/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio - v2.1.1
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <!-- ======= Top Bar ======= -->
   <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <i class="icofont-clock-time"></i> Senin - Sabtu, 8AM to 10PM
      </div>
      <div class="d-flex align-items-center">
        <i class="icofont-phone"></i> Hubungi +62
      </div>
    </div>
  </div>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="">Home</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo mr-auto"><a href="index.html">Medicio</a></h1> -->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="#kasus">Data Kasus</a></li>
          <li><a href="#kasusdunia">Data Kasus Dunia</a></li>
          <li><a href="#kasusindonesia">Data Kasus Indonesia</a></li>
          <!-- <li><a href="#doctors">Doctors</a></li> -->
          <!-- <li class="drop-down"><a href="">Drop Down</a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li class="drop-down"><a href="#">Deep Drop Down</a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
          </ul>
        </li> -->
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <!-- <a href="#" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Admin</a> -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    < id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets2/img/slide/corona.jpg)">
          <div class="container">
            <h1>Welcome to Kawal Covid</h1>
            <h2>Kita Berjuang Bersama Melawan Corona | Jangan Sampai Kendor!</h2>
          </div>
        </div>


      </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
     <section id="kasus" class="kasus">
      <div class="container-fluid">
      <div class="container " >
                <br><h1 class="display-3 text-center">Tracking Covid</h1>
		<p class="lead m-0 text-center">Coronavirus Global &amp; Indonesia Live Data</p>
        
            <div class="row">
                <div class="col-sm">
                </div>
            </div>
            <br>
            <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="card bg-danger img-card box-primary-shadow">
         <div class="card-body">
          <div class="d-flex">
           <div class="text-white">
            <p class="text-white mb-0">TOTAL POSITIF</p>
            <h2 class="mb-0 number-font"><?php echo $posglobal['value'] ?></h2>
            <p class="text-white mb-0">ORANG</p>
           </div>
           <div class="ml-auto"> <img src="{{asset('assets/img/sad-u6e.png')}}" width="50" height="50" alt="Positif"> </div>
          </div>
         </div>
        </div>
       </div><!-- COL END -->
       <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="card bg-success img-card box-secondary-shadow">
         <div class="card-body">
          <div class="d-flex">
           <div class="text-white">
            <p class="text-white mb-0">TOTAL SEMBUH</p>
            <h2 class="mb-0 number-font"><?php echo $semglobal['value'] ?></h2>
            <p class="text-white mb-0">ORANG</p>
           </div>
           <div class="ml-auto"> <img src="{{asset('assets/img/happy-ipM.png')}}" width="50" height="50" alt="Positif"> </div>
          </div>
         </div>
        </div>
       </div><!-- COL END -->
       <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="card  bg-secondary img-card box-success-shadow">
         <div class="card-body">
          <div class="d-flex">
           <div class="text-white">
            <p class="text-white mb-0">TOTAL MENINGGAL</p>
            <h2 class="mb-0 number-font"><?php echo $menglobal['value'] ?></h2>
            <p class="text-white mb-0">ORANG</p>
           </div>
           <div class="ml-auto"> <img src="{{asset('assets/img/emoji-LWx.png')}}" width="50" height="50" alt="Positif"> </div>
          </div>
         </div>
        </div>
       </div><!-- COL END -->
       <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="card  bg-info img-card box-success-shadow">
         <div class="card-body">
          <div class="d-flex">
           <div class="text-white">
            <h2 class="text-white mb-0">INDONESIA</h2>
           <p class="text-white mb-0"><b>{{$positif}}</b> POSITIF, <b>{{$sembuh}}</b> SEMBUH, <b>{{$meninggal}}</b> MENINGGAL</p>
           </div>
           <div class="ml-auto"> <img src="{{asset('assets/img/indonesia-PZq.png')}}" width="30" height="50" alt="Positif"> </div>
          </div>
         </div>
        </div>
       </div><!-- COL END -->
        <div class="col text-center">
        <h6><br><p>Update terakhir : {{ $tanggal }}</p></h6>
        </div> 
     <br>
    <!-- ======= About Us Section ======= -->
       <div class="card-header ">
            &nbsp;
  
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-1"></div>
      <div class="col-lg-10">
        <div class="card">
        <section id="kasusdunia" class="kasusdunia">
         <center> <div class="card-header">Data Kasus Corona Virus Berdasarkan Negara</div></center>
          <div class="card-body">
            <div style="height:600px;overflow:auto;margin-right:15px;">
            <table class="table table-striped">
                     <div class="card-body" >
                                 <thead>
                                     <tr>
                                     <th scope="col">Nomor</th>
                                     <th scope="col">Negara</th>
                                     <th scope="col">Kasus Positif</th>
                                     <th scope="col">Kasus Sembuh</th>
                                     <th scope="col">Kasus Meninggal</th>
                                     </tr>
                                 </thead>
                                  <tbody>
                                            @php
                                            $no = 1;
                                          @endphp
                                           @foreach($dunia as $data)
                            <tr>     
                              <th>{{$no++ }}</th>
                              <th> <?php echo $data['attributes']['Country_Region'] ?></th>
                              <th> <?php echo number_format($data['attributes']['Confirmed']) ?></th>
                              <th><?php echo number_format($data['attributes']['Recovered'])?></th>
                              <th><?php echo number_format($data['attributes']['Deaths'])?></th>
                            </tr>
                          @endforeach
                                        </tbody>
                                 </table>
                                
                               
                     </div>
                   </div>
                <br> 
    <!-- ======= Counts Section ======= -->
   <div class="card-header ">
&nbsp;
  <section class="showcase">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-1"></div>
      <div class="col-lg-10">
        <div class="card">
        <section id="kasusindonesia" class="kasusindonesia"><center>
          <div class="card-header">Data Kasus Corona Virus Berdasarkan Provinsi</div></center>
          <div class="card-body">
            <div style="height:600px;overflow:auto;margin-right:15px;">
            <table class="table table-striped">
              <thead>
                <th>No</th>
                <th>Provinsi</th>
                <th>Positif</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
              </thead>
              <tbody>
                                            @php $no=1; @endphp
                                            @foreach($tampil as $tmp)
                                   
                                        <tr>
                                            <th>{{$no++ }}</th>
                                            <th>{{$tmp->nama_provinsi}}</th>
                                            <th>{{number_format($tmp->Positif)}}</th>
                                            <th>{{number_format($tmp->Sembuh)}}</th>
                                            <th>{{number_format($tmp->Meninggal)}}</th>
                                        </tr>
                                        @endforeach
                                    </tbody>
          </table>
        </div>
      </div>
    </div>
    
    
  </section>
  &nbsp;  

    <!-- ======= Features Section ======= -->
    <!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <!-- End Appointment Section -->

    <!-- ======= Departments Section ======= -->
   <!-- End Departments Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- End Testimonials Section -->

    <!-- ======= Doctors Section ======= -->
    <!-- End Doctors Section -->

    <!-- ======= Gallery Section ======= -->
     <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Harapan itu penting karena itu akan membuat hari ini lebih mudah untuk dijalani. Jika kita percaya bahwa hari esok akan lebih baik, kita dapat menguasai hari ini.</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

        <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets2/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets2/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div> 


          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets2/img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets2/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets2/img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets2/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

         
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets2/img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets2/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets2/img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets2/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets2/img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets2/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets2/img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets2/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets2/img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets2/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

         

        </div>

      </div>
    </section>
<!-- End Gallery Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questioins Section ======= -->
    <!-- End Frequently Asked Questioins Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>
      </div>
      <div class="container">
        <div class="row mt-5">
          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Alamat</h3>
                  <p>Jl. Raya Kopo No.161, Situsaeur, Kec. Bojongloa Kidul, Kota Bandung, Jawa Barat 4023</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email</h3>
                  <p>info@rsimmanuel<br>Kontak@rsimmanuel.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Hubungi</h3>
                  <p>+62</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Pesan"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Pesan Kamu Telah Terkirim, Terimakasih!</div>
              </div>
              <div class="text-center"><button type="submit">Kirim Pesan</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

  
      <div class="container d-md-flex py-4">
                
                      <div class="mr-md-auto text-center text-md-left">
                        <div class="credits">
                          &copy; Copyright <strong><span>Medilab</span></strong>. All Rights Reserved
                          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                      </div>
                      <div class="social-links text-center text-md-right pt-3 pt-md-0">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                      </div>
      </div>
    
    </div>
  </footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets2/vendor/jquery/jquery.min.js"></script>
  <script src="assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets2/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets2/vendor/php-email-form/validate.js"></script>
  <script src="assets2/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets2/vendor/counterup/counterup.min.js"></script>
  <script src="assets2/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets2/vendor/venobox/venobox.min.js"></script>
  <script src="assets2/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets2/js/main.js"></script>

</body>

</html>