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
                <div class="journal-block">
                    <div class="row">
                        <table class="table table-hover table-bordered">
                            <thead style="text-align: center">
                                <tr>
                                    <th>No</th>
                                    <th>Job Title</th>
                                    <th>Job Location</th>
                                    <th>Job Description</th>
                                    <th>Month</th>
                                    <th>Year</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $index => $item)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $item -> Job_Title }}</td>
                                        <td>{{ $item -> Job_Location }}</td>
                                        <td>{{ $item -> Job_Description }}</td>
                                        <td>{{ $item -> Month }}</td>
                                        <td>{{ $item -> Year }}</td>
                                        {{-- <td>{{ $item ->  }}</td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('journey.create') }}" class="btn btn-primary">Add</a>
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

</body>

</html>
