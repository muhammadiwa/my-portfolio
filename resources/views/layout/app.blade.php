<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>James - Web & App developer</title>
    <script src="{{ asset('assets/js/vendors/color-modes.js') }}"></script>
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/imgs/template/favicon-gradient.svg') }}" />
    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/odometer.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/carouselTicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/remixicon/remixicon.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/satoshi/satoshi.css') }}" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@300;400;500&family=Playfair+Display:wght@400..900&family=Urbanist:wght@100..900&display=swap"
        rel="stylesheet" />
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

</head>

<body class="home-page-2">
    <!-- prettier-ignore -->
    <!--Preloader-->
    <div id="preloader">
        <div class="loader-cover">
            <div class="loader-container">
                <div class="loader-icon-2"></div>
            </div>
        </div>
    </div>
    <!--Preloader-end -->

    <!-- Navbar -->
    @include('layout.navbar')

    <main>
        <!-- prettier-ignore -->
        <!--Home 2 Section 1-->
        @include('frontend.about')

        <!--Static 2-->
        <!-- @include('frontend.static') -->

        <!-- coporation -->
        <!-- @include('frontend.coporation') -->

        <!-- service 2 page 2-->
        @include('frontend.service')

        <!-- Experience -->
        <!-- @include('frontend.experience') -->

        <!-- education -->
        @include('frontend.education')

        <!-- projects -->
        @include('frontend.projects')

        <!-- Skills 1 Page 2 -->
        @include('frontend.skills')

        <!-- blog 1 page 2 -->
        @include('frontend.blog')

        <!-- Contact 1-->
        @include('frontend.contact')

    </main>
    <!-- prettier-ignore -->
    <!-- Footer -->
    @include('layout.footer')

    <!-- Scroll top -->
    <div class="btn-scroll-top style-btn-2">
        <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
            <path
                d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
        </svg>
    </div>

    <!-- Libs JS -->
    <script src="{{ asset('assets/js/vendors/jquery-3.7.1.min.js') }}">
    </script>
    <script src="{{ asset('assets/js/vendors/bootstrap.bundle.min.js') }}">
    </script>
    <script src="{{ asset('assets/js/vendors/swiper-bundle.min.js') }}">
    </script>
    <script src="{{ asset('assets/js/vendors/aos.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/smart-stick-nav.js') }}">
    </script>
    <script src="{{ asset('assets/js/vendors/jquery.magnific-popup.min.js') }}">
    </script>
    <script src="{{ asset('assets/js/vendors/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/imagesloaded.pkgd.min.js') }}">
    </script>
    <script src="{{ asset('assets/js/vendors/isotope.pkgd.min.js') }}">
    </script>
    <script src="{{ asset('assets/js/vendors/ScrollTrigger.min.js') }}">
    </script>
    <script src="{{ asset('assets/js/vendors/jquery.carouselTicker.min.js') }}">
    </script>
    <script src="{{ asset('assets/js/vendors/jquery.odometer.min.js') }}">
    </script>
    <script src="{{ asset('assets/js/vendors/jquery.appear.js') }}">
    </script>
    <script src="{{ asset('assets/js/vendors/gsap-custom.js') }}"></script>
    <script src="{{ asset('assets/js/imageRevealHover.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/aat.min.js') }}"></script>
    <!-- Theme JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
