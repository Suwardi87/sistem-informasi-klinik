
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Medicio Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/frontend') }}/img/favicon.png" rel="icon">
  <link href="{{ asset('assets/frontend') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/frontend') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('assets/frontend') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('assets/frontend') }}/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('assets/frontend') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="{{ asset('assets/frontend') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('assets/frontend') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/frontend') }}/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  @include('frontend.layout._header')

  <main class="main">

    <!-- Hero Section -->
    @include('frontend.layout._hero')
   <!-- /Hero Section -->

    <!-- Featured Services Section -->
    @include('frontend.layout._services')
    <!-- /Featured Services Section -->

    <!-- Call To Action Section -->
    @include('frontend.layout._cta')
   <!-- /Call To Action Section -->

    <!-- About Section -->
    @include('frontend.layout._about')
   <!-- /About Section -->

    <!-- Stats Section -->
    @include('frontend.layout._stats')
   <!-- /Stats Section -->

    <!-- Features Section -->
    @include('frontend.layout._features')
   <!-- /Features Section -->

    <!-- Services Section -->
    @include('frontend.layout._servicesSection')
   <!-- /Services Section -->

    <!-- Appointment Section -->
    @include('frontend.layout._appointment')
    <!-- /Appointment Section -->

    <!-- Tabs Section -->
    @include('frontend.layout._tabs')
    <!-- /Tabs Section -->

    <!-- Testimonials Section -->
    @include('frontend.layout._testimonials')
    <!-- /Testimonials Section -->

    <!-- Doctors Section -->
    @include('frontend.layout._doctors')
   <!-- /Doctors Section -->

    <!-- Gallery Section -->
    @include('frontend.layout._gallery')
    <!-- /Gallery Section -->

    <!-- Pricing Section -->
    @include('frontend.layout._pricing')
   <!-- /Pricing Section -->

    <!-- Faq Section -->
    @include('frontend.layout._faq')
    <!-- /Faq Section -->

    <!-- Contact Section -->
    @include('frontend.layout._contact')
   <!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Medicio</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Hic solutasetp</h4>
          <ul>
            <li><a href="#">Molestiae accusamus iure</a></li>
            <li><a href="#">Excepturi dignissimos</a></li>
            <li><a href="#">Suscipit distinctio</a></li>
            <li><a href="#">Dilecta</a></li>
            <li><a href="#">Sit quas consectetur</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nobis illum</h4>
          <ul>
            <li><a href="#">Ipsam</a></li>
            <li><a href="#">Laudantium dolorum</a></li>
            <li><a href="#">Dinera</a></li>
            <li><a href="#">Trodelas</a></li>
            <li><a href="#">Flexo</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Medicio</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href="https://themewagon.com">ThemeWagon
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/frontend') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets/frontend') }}/vendor/php-email-form/validate.js"></script>
  <script src="{{ asset('assets/frontend') }}/vendor/aos/aos.js"></script>
  <script src="{{ asset('assets/frontend') }}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('assets/frontend') }}/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ asset('assets/frontend') }}/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/frontend') }}/js/main.js"></script>

</body>

</html>
