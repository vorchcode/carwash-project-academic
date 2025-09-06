<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title')</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/adminlte.min.css') }}">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Google Font: Nunito -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

    <!-- Navbar transparan + form polos + font tebal -->
    <style>
        body {
            padding-top: 80px; /* sesuaikan tinggi navbar */
            font-weight: 600; /* semua teks lebih tebal */
        }

        .navbar {
            background-color: transparent !important;
            z-index: 1050;
            font-weight: 700; /* navbar font lebih tebal */
        }

        .navbar .nav-link,
        .navbar .navbar-brand,
        .navbar .btn {
            color: #fff !important;
        }

        .navbar .nav-link:hover,
        .navbar .btn:hover {
            color: #00d4ff !important;
        }

        /* Card login polos */
        .card {
            background-color: transparent !important;
            border: none;
            box-shadow: none;
            z-index: 1;
            position: relative;
        }

        /* Form input hanya garis */
        .form-control {
            background-color: transparent;
            border: 1px solid #fff;
            color: #fff;
            border-radius: 4px;
            font-weight: 600; /* input lebih tebal */
        }

        .form-control:focus {
            background-color: transparent;
            border-color: #00d4ff;
            box-shadow: none;
            color: #fff;
            font-weight: 600;
        }

        /* Tombol */
        .btn-primary {
            background-color: #00d4ff;
            border-color: #00d4ff;
            color: #fff;
            font-weight: 700; /* tombol lebih tebal */
        }

        .btn-primary:hover {
            background-color: #009acb;
            border-color: #009acb;
        }

        /* Link register */
        a {
            color: #00d4ff;
            font-weight: 600; /* link lebih tebal */
            pointer-events: auto;
        }

        a:hover {
            color: #fff;
        }

        form input,
        form select,
        form textarea,
        form button,
        a {
            position: relative;
            z-index: 1;
            pointer-events: auto;
        }

        /* Responsive untuk layar kecil */
        @media (max-width: 576px) {
            body {
                padding-top: 100px;
            }
        }
    </style>
</head>

<body class="bg-primary">

    <!-- Navbar polos -->
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="">{{ config('app.name') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-sm-3 mb-2 mb-sm-0">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @lang('auth.langtext')
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ url('id') }}">Indonesia</a>
                                <a class="dropdown-item" href="{{ url('en') }}">English</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    @yield('container')

    <!-- REQUIRED SCRIPTS -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/js/adminlte.js') }}"></script>

</body>

</html>
