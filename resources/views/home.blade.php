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

                    <div class="col-lg-7">
                        <div class="about-descr">
                                <h3>Pristian Budi Dharmawan</h3>
                                <p class="fst-italic">
                                    Hi, I'm an undergraduate at BINUS University with a Computer Science Major. I'm interested in Data Analysis, Medical, and Automotive. Currently, I'm focusing on Data Visualization using R, Python, and Web Programming based on the Laravel Framework, despite of it I am still expanding my knowledge of Microsoft Excel too.
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
                                <p>
                                    Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt
                                    adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                                    Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus
                                    itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis
                                    culpa magni laudantium dolores.
                                </p>
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
                                <i class="bi bi-briefcase"></i>
                                <span>UI/UX DESIGN</span>
                                <p class="separator">To an English person, it will seem like simplified English,told me what
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="services-block">
                                <i class="bi bi-card-checklist"></i>
                                <span>BRAND IDENTITY</span>
                                <p class="separator">To an English person, it will seem like simplified English,told me what
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="services-block">
                                <i class="bi bi-bar-chart"></i>
                                <span>WEB DESIGN</span>
                                <p class="separator">To an English person, it will seem like simplified English,told me what
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="services-block">
                                <i class="bi bi-binoculars"></i>
                                <span>MOBILE APPS</span>
                                <p class="separator">To an English person, it will seem like simplified English,told me what
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="services-block">
                                <i class="bi bi-brightness-high"></i>
                                <span>Analytics</span>
                                <p class="separator">To an English person, it will seem like simplified English,told me what
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="services-block">
                                <i class="bi bi-calendar4-week"></i>
                                <span>PHOTOGRAPHY</span>
                                <p class="separator">To an English person, it will seem like simplified English,told me what
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </div><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <div id="journey" class="paddsection">

            <div class="container">
                <div class="section-title text-center">
                    <h2>My Journey</h2>
                </div>
            </div>



        </div><!-- End Portfolio Section -->

        <!-- ======= Contact Section ======= -->
        <div id="contact" class="paddsection">
            <div class="container">
                <div class="contact-block1">
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="contact-contact">

                                <h2 class="mb-30">GET IN TOUCH</h2>

                                <ul class="contact-details">
                                    <li><span>23 Main, Street</span></li>
                                    <li><span>New York, United States</span></li>
                                    <li><span>+88 01912704287</span></li>
                                    <li><span>example@example.com</span></li>
                                </ul>

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="row gy-3">

                                    <div class="col-lg-6">
                                        <div class="form-group contact-block1">
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Your Name" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Your Email" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" id="subject"
                                                placeholder="Subject" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>
                                    </div>

                                    <div class="mt-0">
                                        <input type="submit" class="btn btn-defeault btn-send" value="Send message">
                                    </div>

                                </div>
                            </form>
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
