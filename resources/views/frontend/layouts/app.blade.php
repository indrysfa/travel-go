<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>@yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->

    <link rel="stylesheet" href="{{ asset('assets/eforlad/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('assets/eforlad/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('assets/eforlad/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('assets/eforlad/images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/eforlad/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/eforlad/css/owl.carousel.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/eforlad/css/owl.theme.default.min.css') }}"> --}}
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="{{ asset('assets/tournest/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/tournest/assets/css/owl.theme.default.min.css') }}" />
    <!--style.css-->
    {{-- <link rel="stylesheet" href="{{ asset('assets/tournest/assets/css/style.css') }}" /> --}}
    {{-- Custom CSS --}}
    {{-- <link rel="stylesheet" href="{{ asset('frontend/css/indry.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/ika.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/hendy.css') }}"> --}}

    <!-- Ashion Css Styles -->
    <link rel="stylesheet" href="{{ asset('assets/ashion/ashion/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/ashion/ashion/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/ashion/ashion/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/ashion/ashion/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/ashion/ashion/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/ashion/ashion/css/style.css') }}" type="text/css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet"
        href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css') }}"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('assets/eforlad/images/loading.gif') }}" alt="loading" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="header_white_section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header_information">
                                <ul>
                                    <li><img src="{{ asset('assets/eforlad/images/2.png') }}" alt="header-contact" />
                                        +71 5678954378
                                    </li>
                                    <li><img src="{{ asset('assets/eforlad/images/3.png') }}" alt="header-contact" />
                                        admin@travel-go.com</li>
                                    {{-- <li> <button><a href="/login">Login</a></button> </li> --}}
                                    <li> <a href="{{ route('form.regis') }}">Register</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo"> <a href="{{ route('home.index') }}"><img
                                            src="{{ asset('assets/frontend/images/logo-bg.png') }}" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class=""> <a href="{{ route('home.index') }}">Home</a> </li>
                                        <li class=""> <a
                                                href="{{ route('frontend.sewa.index') }}#sewa-search">Sewa</a> </li>
                                        <li><a href="{{route('frontend.promotion.index')}}">Promotion</a></li>
                                    </ul>
                                </nav>
                                <span class="target"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->

    @yield('content')

    <!-- footer -->
    <footer>
        <div id="contact" class="footer">
            <div class="container">
                <div class="row pdn-top-30">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <ul class="location_icon">
                            <li> <a href="#"><img src="{{ asset('assets/eforlad/icon/facebook.png') }}"></a></li>
                            <li> <a href="#"><img src="{{ asset('assets/eforlad/icon/Twitter.png') }}"></a></li>
                            <li> <a href="#"><img src="{{ asset('assets/eforlad/icon/linkedin.png') }}"></a></li>
                            <li> <a href="#"><img src="{{ asset('assets/eforlad/icon/instagram.png') }}"></a></li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="Follow">
                            <h3>CONTACT US</h3>
                            <span>AXA Tower <br>Kuningan,<br>
                                Jakarta, Indonesia<br>
                                +987 654 3210</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="Follow">
                            <h3>ADDITIONAL LINKS</h3>
                            <ul class="link">
                                <li> <a href="#">About us</a></li>
                                <li> <a href="#">Terms and conditions</a></li>
                                <li> <a href="#"> Privacy policy</a></li>
                                <li> <a href="#">News</a></li>
                                <li> <a href="#"> Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="Follow">
                            <h3> Contact</h3>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <input class="Newsletter" placeholder="Name" type="text">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <input class="Newsletter" placeholder="Email" type="text">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="textarea" placeholder="comment" type="text">Comment</textarea>
                                </div>
                            </div>
                            <button class="Subscribe">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <p>Copyright 2021 All Right<a href="#"></a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- AJAX -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <!-- Javascript files-->
    <script src="{{ asset('assets/eforlad/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/eforlad/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/eforlad/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/eforlad/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/eforlad/js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('assets/eforlad/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/eforlad/js/custom.js') }}"></script>
    <!-- javascript -->
    <script src="{{ asset('assets/eforlad/js/owl.carousel.js') }}"></script>

    <!-- Ashion Js Plugins -->
    {{-- <script src="{{ asset('assets/ashion/ashion/js/jquery-3.3.1.min.js') }}"></script> --}}
    <script src="{{ asset('assets/ashion/ashion/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/ashion/ashion/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/ashion/ashion/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/ashion/ashion/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('assets/ashion/ashion/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/ashion/ashion/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('assets/ashion/ashion/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/ashion/ashion/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/ashion/ashion/js/main.js') }}"></script>
    {{-- Custom JS --}}
    <script src="{{ asset('assets/frontend/js/indry.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/ika.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/hendy.js') }}"></script>

    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        })

    </script>
    @yield('js')



</body>

</html>
