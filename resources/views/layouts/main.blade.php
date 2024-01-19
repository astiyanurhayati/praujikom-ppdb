<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>PPDB SMK Wikrama Bogor

    </title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="{{asset('fe/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('fe/css/fontawesome-all.min.css')}}" rel="stylesheet">
    <link href="{{asset('fe/css/swiper.css')}}" rel="stylesheet">
    <link href="{{asset('fe/css/styles.css')}}" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="fe/images/favicon.png">
</head>
<body data-bs-spy="scroll" data-bs-target="#navbarExample">

    <!-- Navigation -->
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.html"><img src="fe/images/wikrama-logo.png" alt="alternative"></a>

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text" href="index.html">Zinc</a> -->

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#header">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Jurusan</a>
                    </li>
                    
                </ul>
                @if(Auth::check())

                @if(Auth::user()->role == "admin")
                <span class="nav-item">
                    <a class="btn-solid-sm" href="{{url('/dashboard')}}">Dashbaord</a>
                </span>
                @endif
                @endif
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->
@if(Session::get('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <div class="section-title">Webiste PPDB SMK Wikrama </div>
                        <h1 class="h1-large">Sekolah dengan jurusan terbaik</h1>
                        <p class="p-large">Amal yang ilmiah, ilmu yang amaliah, akhlakul karimah</p>
                        <a class="btn-solid-lg" href="{{route('form.index')}}">Daftar PPDB Sekarang</a>
                        <a class="quote" href="#contact"><i class="fas fa-paper-plane"></i>Hubungi CS</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="fe/images/header-illustration.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->

    @yield('content-main')

    <!-- Footer -->
    <div class="footer bg-gray">
        <img class="decoration-city" src="fe/images/decoration-city.svg" alt="alternative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Pellentesque aliquet mi eu tortor dictum, non imperdiet ante viverra. Phasellus eget enim orci ut pellentes troc</h4>
                    <div class="social-container">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-youtube fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of social-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled li-space-lg p-small">
                        <li><a href="article.html">Article Details</a></li>
                        <li><a href="terms.html">Terms & Conditions</a></li>
                        <li><a href="privacy.html">Privacy Policy</a></li>
                    </ul>
                </div> <!-- end of col -->
                <div class="col-lg-3">
                    <p class="p-small statement">Copyright © <a href="#">Your name</a></p>
                </div> <!-- end of col -->
                <div class="col-lg-3">
                    <p class="p-small statement">Distributed By: <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="fe/images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->

    <!-- Scripts -->
    <script src="{{asset('fe/js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
    <script src="{{asset('fe/js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{asset('fe/js/purecounter.min.js')}}"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="{{asset('fe/js/isotope.pkgd.min.js')}}"></script> <!-- Isotope for filter -->
    <script src="{{asset('fe/js/scripts.js')}}"></script> <!-- Custom scripts -->
</body>
</html>
