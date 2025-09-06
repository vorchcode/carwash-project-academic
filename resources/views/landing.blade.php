<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Poppins:wght@500;700&display=swap" rel="stylesheet">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ config('app.name', 'Laundry XYZ') }}</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Javascript -->
    <script defer src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script defer src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <nav class="navbar navbar-expand-lg fixed-top custom-navbar">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <!-- Menu Perusahaan (Tengah) -->
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="#layanan">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                </ul>
                <!-- Bahasa & Login (Kanan) -->
                <ul class="navbar-nav ms-auto align-items-center">
                    <!-- Dropdown Bahasa -->
                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="dropdownMenuButton" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"> @lang('landing.langtext') </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ url('id') }}">Indonesia</a></li>
                            <li><a class="dropdown-item" href="{{ url('en') }}">English</a></li>
                        </ul>
                    </li>
                    <!-- Tombol Login -->
                    <li class="nav-item"> <a class="nav-link text-white" href="{{ url('login') }}"> @lang('landing.loginOrRegister') </a> </li>
                </ul>
            </div>
        </div>
    </nav>

    <style>
        /* Navbar Transparan */
        .custom-navbar {
            background-color: transparent !important;
        }

        .navbar-brand,
        .nav-link {
            color: white !important;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #00d4ff !important;
        }

        .navbar-toggler {
            border-color: white;
        }

        /* Media Query Mobile */
        @media (max-width: 991px) {

            /* Hero Header */
            .hero-title {
                font-size: 1.8rem !important;
                text-align: left !important;
                line-height: 1.2 !important;
            }

            .hero-title .second-line {
                font-size: 1.5rem !important;
                display: block;
            }

            .hero-header p {
                font-size: 0.9rem !important;
                text-align: left !important;
            }

            .mengapa {
                margin-bottom: 90px;
            }

            /* Tentang Kami - Peralatan Modern */
            #tentang2 h4 {
                font-size: 1.5rem !important;
                text-align: left !important;
                margin-left: 0 !important;
                margin-bottom: 0px;
            }

            #tentang2 p {
                font-size: 0.85rem !important;
                text-align: left !important;
                margin-left: 0 !important;
            }

            #tentang2 img {
                width: 90% !important;
                margin-left: 0 !important;
                margin-top: -40px !important;
            }

            .tools {
                margin-top: -100px;
            }
.tools_img{
                margin-top: -50px;
            }
            /* Tim Profesional */
            section img {
                width: 90% !important;
                margin-left: 0 !important;
                margin-top: -40px !important;
            }

            .staff_img {
                margin-top: 50px;
                margin-left: -10px;
            }

            .tulisan_staff {
                margin-bottom: -200px;

            }

            section h4,
            section p {
                font-size: 1.4rem !important;
                text-align: left !important;
                margin-left: 0 !important;
            }

            /* Judul section */
            h3 {
                font-size: 1.6rem !important;
                margin-left: 0 !important;
                text-align: left !important;
            }

            *

            /* Layanan scroll */
            #layananScroll {
                padding: 10px 0 !important;
                gap: 10px !important;
            }

            #layananScroll .card p {
                font-size: 0.85rem !important;
                text-align: left !important;
            }

            .layanan_tulisan {
                margin-top: 70px;
            }

            .layanan_img {
                margin-top: -80px;
            }
            #kontak{
                margin-top: -200px;
            }

        }
    </style>

    <!-- Header -->
    <header class="hero-header py-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-3 text-white mt-5 mb-2 hero-title">
                        <span class="first-line">
                            <span>Selamat</span>
                            <span>Datang</span>
                        </span>
                        <span class="second-line">di Carewash</span>
                    </h1>
                    <p class="lead mb-5 text-white-50">@lang('landing.tagline')</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Tentang Kami -->
    <section id="tentang" class="p-5 text-center" style="margin-top: -120px"></section>

<section id="tentang2" class="p-5 text-start">
    <div class="mengapa">
        <h3 style="margin-left: 160px; margin-top:-30px; margin-bottom:20px; text-align:left; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 28px; letter-spacing: 1px; color: #f8f6f5ff;">Mengapa Memilih Kami?</h3>
    </div>
    <div class="container p-5">
        <!-- Peralatan Modern -->
        <div class="row align-items-center d-flex" style="margin-bottom: 20px;">
            <div class="col-lg-6">
                <h4 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 28px; letter-spacing: 1px; color: #f8f6f5ff; margin-top: 0;">Peralatan Modern</h4>
                <p style="margin-top: 5px;">Kami menggunakan peralatan cuci mobil modern yang hemat air, ramah lingkungan, dan efisien, memastikan kendaraan Anda bersih maksimal tanpa merusak permukaan cat serta mendukung keberlanjutan lingkungan.</p>
            </div>
            <div class="col-lg-6 text-center tools_img">
                <img src="{{ asset('img/landing/tools.png') }}" alt="" style="width: 90%; border-radius: 20px; margin-top: -100px;">
            </div>
        </div>

        <!-- Tim Profesional -->
        <div class="row align-items-center d-flex" style="margin-top: -130px; margin-bottom: 0;">
            <div class="col-lg-6 text-center staff_img">
                <img src="{{ asset('img/landing/staff.png') }}" alt="" style="width: 90%; border-radius: 20px; margin-top: -90px; margin-left: -70px;">
            </div>
            <div class="col-lg-6 tulisan_staff">
                <h4 style="margin-top: 0; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 28px; letter-spacing: 1px; color: #f8f6f5ff;">Tim Profesional</h4>
                <p style="margin-top: 5px;">Tim ahli kami berpengalaman dalam merawat kendaraan Anda dengan standar kualitas tinggi dan layanan yang handal.</p>
            </div>
        </div>
    </div>
</section>


    <!-- Layanan -->
    <section id="layanan" class="p-5 text-center" style="margin-top: -120px"></section>
    <section id="layanan2" class="text-center p-5">
        <div class="layanan_tulisan">
            <h3 style="margin-left:-40px;
                     font-family: 'Poppins', sans-serif; 
           font-weight: 600; 
           font-size: 28px; 
           letter-spacing: 1px; 
           color: #f8f6f5ff;">Layanan Kami</h3>
        </div>
    </section>
    <div class="layanan_img">
        <section class="p-5 text-center">
            <div class="container position-relative">
                <button onclick="scrollLayanan(-1)"
                    style="position:absolute; left:0; top:50%; transform:translateY(-50%); z-index:10; border:none; background:transparent; font-size:2rem; cursor:pointer; color:#000;">
                    ◀
                </button>

                <button onclick="scrollLayanan(1)"
                    style="position:absolute; right:0; top:50%; transform:translateY(-50%); z-index:10; border:none; background:transparent; font-size:2rem; cursor:pointer; color:#000;">
                    ▶
                </button>

                <div id="layananScroll" style="display:flex; overflow-x:auto; gap:20px; -webkit-overflow-scrolling:touch; scrollbar-width:none; scroll-behavior:smooth; padding:10px 40px;">
                    <!-- Card layanan -->
                    <div class="card" style="width:250px; flex:0 0 auto; background:transparent; border:none; box-shadow:none;">
                        <img src="{{ asset('img/landing/poles.jpeg') }}" class="card-img-top" alt="" style="background:transparent; border-radius:12px; object-fit:cover; width:100%; height:200px;">
                        <div class="card-body" style="background:transparent;">
                            <p class="card-text">Poles & Wax</p>
                        </div>
                    </div>
                    <div class="card" style="width:250px; flex:0 0 auto; background:transparent; border:none; box-shadow:none;">
                        <img src="{{ asset('img/landing/interior.jpeg') }}" class="card-img-top" alt="" style="background:transparent; border-radius:12px; object-fit:cover; width:100%; height:200px;">
                        <div class="card-body" style="background:transparent;">
                            <p class="card-text">Cuci Interior</p>
                        </div>
                    </div>
                    <div class="card" style="width:250px; flex:0 0 auto; background:transparent; border:none; box-shadow:none;">
                        <img src="{{ asset('img/landing/eksterior.jpg') }}" class="card-img-top" alt="" style="background:transparent; border-radius:12px; object-fit:cover; width:100%; height:200px;">
                        <div class="card-body" style="background:transparent;">
                            <p class="card-text">Cuci Eksterior</p>
                        </div>
                    </div>
                    <div class="card" style="width:250px; flex:0 0 auto; background:transparent; border:none; box-shadow:none;">
                        <img src="{{ asset('img/landing/detailing.jpeg') }}" class="card-img-top" alt="" style="background:transparent; border-radius:12px; object-fit:cover; width:100%; height:200px;">
                        <div class="card-body" style="background:transparent;">
                            <p class="card-text">Detailing</p>
                        </div>
                    </div>
                    <div class="card" style="width:250px; flex:0 0 auto; background:transparent; border:none; box-shadow:none;">
                        <img src="{{ asset('img/landing/fogging.jpg') }}" class="card-img-top" alt="" style="background:transparent; border-radius:12px; object-fit:cover; width:100%; height:200px;">
                        <div class="card-body" style="background:transparent;">
                            <p class="card-text">Fogging</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        function scrollLayanan(direction) {
            const container = document.getElementById('layananScroll');
            const cardWidth = container.querySelector('.card').offsetWidth + 20;
            const scrollLeft = container.scrollLeft;
            const maxScroll = container.scrollWidth - container.clientWidth;

            if (direction === 1) {
                if (scrollLeft + cardWidth >= maxScroll) {
                    container.scrollTo({
                        left: 0,
                        behavior: 'smooth'
                    });
                } else {
                    container.scrollBy({
                        left: cardWidth,
                        behavior: 'smooth'
                    });
                }
            } else {
                if (scrollLeft - cardWidth <= 0) {
                    container.scrollTo({
                        left: maxScroll,
                        behavior: 'smooth'
                    });
                } else {
                    container.scrollBy({
                        left: -cardWidth,
                        behavior: 'smooth'
                    });
                }
            }
        }
    </script>

    <!-- Gallery & Kontak -->
    <section class="bg-blue p-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4"><img class="img-fluid" src="{{asset('img/carwash/gallery1.jpg')}}" alt=""></div>
                <div class="col-md-4"><img class="img-fluid" src="{{asset('img/carwash/gallery2.jpg')}}" alt=""></div>
                <div class="col-md-4"><img class="img-fluid" src="{{asset('img/carwash/gallery3.jpg')}}" alt=""></div>
            </div>
        </div>
    </section>

    <section id="kontak" class="text-center p-5" style = "margin-top: -130px;">
    <section id="kontak2" class="text-center p-5" style ="margin-top:-50px;"></section>
        <h3 style="margin-left:-40px;
        margin-top:-100px;
                     font-family: 'Poppins', sans-serif; 
           font-weight: 600; 
           font-size: 28px; 
           letter-spacing: 1px; 
           color: #f8f6f5ff;">Temukan Kami!</h3>
    </section>

    <section class="text-white bg-blue">
        <div class="container p-5">
            <div class="row" style="margin-top : -30px;">
                <div class="col-md-6 mb-4 mb-sm-0">
                    <h5>Alamat</h5>
                    <p>Jl. Kemaren Sore No.88, Jakarta</p>
                    <br>
                    <h5>Kontak</h5>
                    <p>CareWash@gmail.com</p>
                    <p>(021) 123456</p>
                    <p>081234567890</p>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18..." width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; {{config('app.name', 'Speedy Car Wash')}} 2025</p>
        </div>
    </footer>
</body>

</html>