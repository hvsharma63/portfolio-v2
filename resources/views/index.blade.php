<!DOCTYPE html>
<html lang="en" class="max-width-d">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Arshia Plus - Fully Responsive Personal Template</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Retrina Group" />
    <!--  FavIcon  -->
    <link rel="shortcut icon" href="https://via.placeholder.com/32x32">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-icons.css') }}">
    <!-- Malihu Jquery Custom ScrollBar Css -->
    <link rel="stylesheet" href="{{ URL::asset('css/jquery.mCustomScrollbar.css') }}">
    <!-- Animate Css -->
    <link rel="stylesheet" href="{{ URL::asset('css/animate.min.css') }}">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}">
    <!-- Magnific Popup Css -->
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}">
    <!--  Custom Style Css  -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <!--  Color Css  -->
    <link rel="stylesheet" href="{{ URL::asset('colors/colorfull.css') }}">
</head>

<body class="max-width-d">

    <!-- Preloader -->
    <div id="line-loader">
        <div class="middle-line"></div>
    </div>

    <!--   Menu Overlay Mobile -->
    <div class="menu-overlay d-none"></div>

    <!--   Right Side Start  -->
    @include('right-sidebar')
    <!--  Right Side End  -->

    <!--  Left Side Start  -->
    @include('left-sidebar')
    <!--  Left Side End  -->

    <!--  Main Start  -->
    @include('main')
    <!--  Main End  -->

    <!--  Mobile Next and Prev Button Start -->
    <div class="next-prev-page d-block d-lg-none">
        <button type="button" class="prev-page bg-base-color hstack">
            <i class="bi bi-chevron-compact-left mx-auto"></i>
        </button>
        <button type="button" class="next-page bg-base-color mt-1 mt-lg-3 hstack">
            <i class="bi bi-chevron-compact-right mx-auto"></i>
        </button>
    </div>
    <!--  Mobile Next and Prev Button End -->

    <!--  Navbar Button Mobile Start -->
    <div class="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!--  Navbar Button Mobile End -->

    <!--  Background Shapes Start  -->
    <div class="area">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <!--  Background Shapes End  -->

    <!-- Mouase Magic Cursor Start -->
    <div class="m-magic-cursor mmc-outer"></div>
    <div class="m-magic-cursor mmc-inner"></div>
    <!-- Mouase Magic Cursor End -->

    <!--  JavaScripts  -->
    <!--  Jquery 3.4.1  -->
    <script src="{{ URL::asset('js/jquery-3.4.1.min.js') }}"></script>
    <!--  Bootstrap Js  -->
    <script src="{{ URL::asset('js/bootstrap.js') }}"></script>
    <!--  Malihu ScrollBar Js  -->
    <script src="{{ URL::asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <!--  CountTo Js  -->
    <script src="{{ URL::asset('js/jquery.countTo.js') }}"></script>
    <!--  Swiper Js  -->
    <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
    <!--  Isotope Js  -->
    <script src="{{ URL::asset('js/isotope.pkgd.min.js') }}"></script>
    <!--  Magnific Popup Js  -->
    <script src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!--  Arshia Js  -->
    <script src="{{ URL::asset('js/arshia.js') }}"></script>
</body>

</html>
