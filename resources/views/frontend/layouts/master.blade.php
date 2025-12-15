<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <title>EduCore - Online Courses & Education HTML Template</title>
    <link rel="icon" type="image/png" href="{{asset('front/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('front/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/animated_barfiller.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/venobox.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/scroll_button.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/pointer.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/jquery.calendar.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/range_slider.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/startRating.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/video_player.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/jquery.simple-bar-graph.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/sticky_menu.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">

    <link rel=" stylesheet" href="{{asset('front/css/spacing.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">
</head>

<body class="home_3">


    <!--============ PRELOADER START ===========-->
    <div id="preloader">
        <div class="preloader_icon">
            <img src="images/preloader.png" alt="Preloader" class="img-fluid">
        </div>
    </div>
    <!--============ PRELOADER START ===========-->

  @includeIf('frontend.layouts.header')


  @yield('content')

    <!--================================
        SCROLL BUTTON START
    =================================-->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!--================================
        SCROLL BUTTON END
    =================================-->


    <!--jquery library js-->
    <script src="{{asset('front/js/jquery-3.7.1.min.js')}}"></script>
    <!--bootstrap js-->
    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
    <!--font-awesome js-->
    <script src="{{asset('front/js/Font-Awesome.js')}}"></script>
    <!--marquee js-->
    <script src="{{asset('front/js/jquery.marquee.min.js')}}"></script>
    <!--slick js-->
    <script src="{{asset('front/js/slick.min.js')}}"></script>
    <!--countup js-->
    <script src="{{asset('front/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.countup.min.js')}}"></script>
    <!--venobox js-->
    <script src="{{asset('front/js/venobox.min.js')}}"></script>
    <!--nice-select js-->
    <script src="{{asset('front/js/jquery.nice-select.min.js')}}"></script>
    <!--Scroll Button js-->
    <script src="{{asset('front/js/scroll_button.js')}}"></script>
    <!--pointer js-->
    <script src="{{asset('front/js/pointer.js')}}"></script>
    <!--range slider js-->
    <script src="{{asset('front/js/range_slider.js')}}"></script>
    <!--barfiller js-->
    <script src="{{asset('front/js/animated_barfiller.js')}}"></script>
    <!--calendar js-->
    <script src="{{asset('front/js/jquery.calendar.js')}}"></script>
    <!--starRating js-->
    <script src="{{asset('front/js/starRating.js')}}"></script>
    <!--Bar Graph js-->
    <script src="{{asset('front/js/jquery.simple-bar-graph.min.js')}}"></script>
    <!--select2 js-->
    <script src="{{asset('front/js/select2.min.js')}}"></script>
    <!--Video player js-->
    <script src="{{asset('front/js/video_player.min.js')}}"></script>
    <script src="{{asset('front/js/video_player_youtube.js')}}"></script>
    <!--wow js-->
    <script src="{{asset('front/js/wow.min.js')}}"></script>

    <!--main/custom js-->
    <script src="{{asset('front/js/main.js')}}"></script>

</body>

</html>