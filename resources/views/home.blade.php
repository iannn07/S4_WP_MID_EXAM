@extends('layouts.home')
@section('content')
    <main id="main">

        <!-- ======= About Section ======= -->
        <div id="about" class="paddsection">
            <div class="container">
                <div class="row justify-content-between">

                    <div class="col-lg-4 ">
                        <div class="div-img-bg">
                            <div class="about-img">
                                <img src="{{ asset('Web Assets/img/me.jpg') }}" class="img-responsive" alt="me">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 d-flex align-items-center">
                        <div class="about-descr">
                            <h3>Pristian Budi Dharmawan</h3>
                            <p class="fst-italic">
                                Hi, I'm an undergraduate at BINUS University with a Computer Science Major. I'm interested
                                in Data Analysis, Medical, and Automotive. Currently, I'm focusing on Data Visualization
                                using R, Python, and Web Programming based on the Laravel Framework, despite of it I am
                                still expanding my knowledge of Microsoft Excel too.
                            </p>
                            <div class="row">
                                <div class="col-lg">
                                    <ul>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                            <span>pristian.dharmawan@gmail.com</span>
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                                            <span>Malang City, East Java, Indonesia</span>
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                                            <span>Bachelor</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <div id="services">
            <div class="container">
                <div class="services-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="services-block">
                                <i class="bi bi-database-check d-flex justify-content-center"></i>
                                <span class="d-flex justify-content-center">FULL-STACK</span>
                                <p class="separator" style="text-align: center">My second goal in my career.
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="services-block">
                                <i class="bi bi-card-checklist d-flex justify-content-center"></i>
                                <span class="d-flex justify-content-center">DATA ANALYST</span>
                                <p class="separator" style="text-align: center">The first goals in my career.
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="services-block">
                                <i class="bi bi-bar-chart d-flex justify-content-center"></i>
                                <span class="d-flex justify-content-center">STATISTICS</span>
                                <p class="separator" style="text-align: center">I'm in love with Regression, Distribution,
                                    and others!
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="services-block">
                                <i class="bi bi-heart-pulse-fill d-flex justify-content-center"></i>
                                <span class="d-flex justify-content-center">MEDICAL</span>
                                <p class="separator" style="text-align: center">I'm also interested in medical field, especially in cardiovascular.
                                </p>
                            </div>
                        </div><!-- End testimonial item -->
                    </div>
                </div>

            </div>

        </div><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <div id="journey" class="paddsection">

            <div class="container">
                <div class="section-title-journey text-center">
                    <h1>My Journey</h1>
                </div>

                <div class="journal-block">
                    <div class="row">
                        <table class="table table-hover table-bordered align-middle">
                            <thead style="text-align: center; vertical-align: middle; font-size:16px">
                                <tr>
                                    <th>Job Title</th>
                                    <th>Job Location</th>
                                    <th>Job Description</th>
                                    <th>Month</th>
                                    <th>Year</th>
                                </tr>
                            </thead>
                            <tbody style="font-size: 12px">
                                @foreach ($data as $index => $item)
                                    <tr>
                                        <td style="text-align: center">{{ $item->Job_Title }}</td>
                                        <td style="text-align: center">{{ $item->Job_Location }}</td>
                                        <td>{{ $item->Job_Description }}</td>
                                        <td style="text-align: center">{{ $item->Month }}</td>
                                        <td style="text-align: center">{{ $item->Year }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div><!-- End Portfolio Section -->

        <!-- ======= Contact Section ======= -->
        <div id="contact" class="paddsection-contact">
            <div class="container justify-content-center" style="text-align: center">
                <div class="contact-block1">
                    <div class="row">
                        <div class="contact-contact">
                            <h1 class="mb-30">GET IN TOUCH</h1>
                            <ul class="contact-details" style="color:black">
                                <li><span>BINUS University</span></li>
                                <li><span>Malang, East Java, Indonesia</span></li>
                                <li><span><a
                                            href="mailto: pristian.dharmawan@binus.ac.id">pristian.dharmawan@binus.ac.id</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <div id="footer" class="text-center">
        <div class="container">
            <div class="socials-media text-center">
                <ul class="list-unstyled">
                    <li><a href="https://github.com/iannn07"><i class="bi bi-github"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/pristian-budi-dharmawan/"><i class="bi bi-linkedin"></i></a>
                    </li>
                    <li><a href="https://www.instagram.com/iann__07/"><i class="bi bi-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('Web Assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Web Assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('Web Assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('Web Assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('Web Assets/vendor/typed.js/typed.min.js') }}"></script>
    <script src="{{ asset('Web Assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('Web Assets/js/main.js') }}"></script>
@endsection
