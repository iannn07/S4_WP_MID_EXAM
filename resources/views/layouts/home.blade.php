<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ian Personal Web</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('Web Assets/img/favicon.png') }}" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('Web Assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Web Assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('Web Assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Web Assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Web Assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('Web Assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Folio
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/folio-bootstrap-portfolio-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="#hero" class="logo"><img src="{{ asset('Web Assets/img/logo.png') }}" alt=""
                    class="img-fluid"></a>
            <!-- Uncomment below if you prefer to use an text logo -->
            <!-- <h1 class="logo"><a href="index.html">Folio</a></h1> -->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#journey">Journey</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <div id="hero" class="home">

        <div class="container">
            <div class="hero-content">
                <h1>Hi, Ian here!</h1>
                <p>I'm a <span class="typed"
                        data-typed-items="Data Analyst, Medical Enthusiast, Full-Stack Developer"></span>
                </p>

                <ul class="list-unstyled list-social">
                    <li><a href="https://github.com/iannn07"><i class="bi bi-github" style="font-size: 24px"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/pristian-budi-dharmawan/"><i
                                class="bi bi-linkedin" style="font-size: 24px"></i></a></li>
                    <li><a href="https://www.instagram.com/iann__07/"><i class="bi bi-instagram" style="font-size: 24px"></i></a></li>
                </ul>
            </div>
        </div>
    </div><!-- End Hero -->
    @yield('content')
</body>

</html>
