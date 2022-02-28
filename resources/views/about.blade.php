@extends('layouts.auth')

@section('content')
<!-- About US Start-->

<head>
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  
</head>

<body>

<section id="about" class="about">

    <div class="container" data-aos="fade-up">
      <div class="row">

        <div class="col-lg-5 col-md-6">
          <div class="about-img" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/about-img.jpg" alt="">
          </div>
        </div>

        <div class="col-lg-7 col-md-6">
          <div class="about-content" data-aos="fade-left" data-aos-delay="100">
            <h2>About Us</h2>
            <h3>We Are the Knigts Team</h3>
            <p>We are Provide Free Jobs, we Dont Take any type of Money to you, Its Absolutely Free</p>
            <p>if you talking about today Panademic Things then the Online Job  Platefrom is Very Important to all of us, 
              now that time a lot of Website Provides free Jobs to everyone,But More Than job are fake, but After you start Journey to see our Jobs and show some Intrest in Job's then the
            Website not provide that Things in Free, so we Dicided to Offer you Free Jobs From Diffrent type of online Informail Sector, we provide below Skills to you </p>
            <ul>
              <li><i class="ion-android-checkmark-circle"></i> We Don't Take Any type of Money.</li>
              <li><i class="ion-android-checkmark-circle"></i> No Biodata Required , Simply Register and Apply or Save Job's</li>
              <li><i class="ion-android-checkmark-circle"></i> We Add More Than 30 Job Category From Diffrent Type of Informal Jobs</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </section>
  
  <!-- End About Section -->

  <!-- ======= Team Section ======= -->
 <section id="team" class="team section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h3>Team</h3>
      <p>Combination of 4 Mind its Called knights team, Lets Interoduce</p>
    </div>

    <div class="row">

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
          <img src="assets/img/vipin.png" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>VIPIN SINGH</h4>
              <span>Front End and Back End</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="member">
          <img src="assets/img/jithin.png" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>JITHIN N</h4>
              <span>Documentation</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="member">
          <img src="assets/img/Lini.jpg" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>LINI N </h4>
              <span>Documentation</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="member">
          <img src="assets/img/sandeep.png" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>SANDEEP PAL</h4>
              <span>Team Member</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>


</body>
</section>
<!-- End Team Section -->

@endsection