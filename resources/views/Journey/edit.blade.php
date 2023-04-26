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

    <!-- Icons font CSS-->
    <link href="{{ asset('Admin Assets/Form Assets/vendor/mdi-font/css/material-design-iconic-font.min.css') }}"
        rel="stylesheet" media="all">
    <link href="{{ asset('Admin Assets/Form Assets/vendor/font-awesome-4.7/css/font-awesome.min.css') }}"
        rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('Admin Assets/Form Assets/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('Admin Assets/Form Assets/vendor/datepicker/daterangepicker.css') }}" rel="stylesheet"
        media="all">

    <!-- Main CSS-->
    <link href="{{ asset('Admin Assets/Form Assets/css/main.css') }}" rel="stylesheet" media="all">
</head>

<body>
    <main id="main">
        <!-- ======= Portfolio Section ======= -->
        <div id="journey" class="paddsection">

            <div class="container">
                <div class="section-title text-center">
                    <h2>My Journey</h2>
                </div>
            </div>
            <div class="container">
                <div class="card card-4 journal-block">
                    <div class="card-body">
                        <h2 class="title">Edit Job Experience</h2>
                        <form action="{{ route('journey.update', $data->id) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Job Title</label>
                                        <input class="input--style-4" type="text" name="Job_Title" value="{{ $data->Job_Title }}">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Job Location</label>
                                        <input class="input--style-4" type="text" name="Job_Location" value="{{ $data->Job_Location }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Month Start</label>
                                        <input class="input--style-4" type="number" name="Month" value="{{ $data->Month }}">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Year Start</label>
                                        <input class="input--style-4" type="number" name="Year" value="{{ $data->Year }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-12">
                                    <div class="input-group">
                                        <label class="label">Job Description</label>
                                        <input class="input--style-4" type="text" name="Job_Description" value="{{ $data->Job_Description }}">
                                    </div>
                                </div>
                            </div>
                            <div class="p-t-15 text-center">
                                <button class="mx-2 btn btn--radius-2 btn--blue" type="submit">Submit</button>
                                <a href="{{ route('journey.index') }}" class="mx-2 btn btn--radius-2 btn-danger">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- End Portfolio Section -->
    </main><!-- End #main -->

    <!-- Vendor JS Files -->
    <script src="{{ asset('Web Assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Web Assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('Web Assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('Web Assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('Web Assets/vendor/typed.js/typed.min.js') }}"></script>
    <script src="{{ asset('Web Assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('Web Assets/js/main.js') }}"></script>

    <!-- Jquery JS-->
    <script src="{{ asset('Admin Assets/Form Assets/vendor/jquery/jquery.min.js') }}"></script>
    <!-- Vendor JS-->
    <script src="{{ asset('Admin Assets/Form Assets/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('Admin Assets/Form Assets/vendor/datepicker/moment.min.js') }}"></script>
    <script src="{{ asset('Admin Assets/Form Assets/vendor/datepicker/daterangepicker.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('Admin Assets/Form Assets/js/global.js') }}"></script>

</body>

</html>
