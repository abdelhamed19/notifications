<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>{{$title}}</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/bootstrap.css') }}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap"
        rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('front/css/responsive.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('front/images/logo.png') }}" alt="" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>

                            <!-- Notifications Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="notificationsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Notifications ()
                                </a>
                                <div class="dropdown-menu" aria-labelledby="notificationsDropdown">
                                    {{-- @forelse (Auth::user()->unreadNotifications as $notification) --}}
                                        <a class="dropdown-item" href="#">
                                            {{ $notification->data['message'] ?? 'New Notification' }}
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            {{ $notification->data['message'] ?? 'New Notification' }}
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            {{ $notification->data['message'] ?? 'New Notification' }}
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            {{ $notification->data['message'] ?? 'New Notification' }}
                                        </a>
                                    {{-- @empty
                                        <a class="dropdown-item" href="#">No new notifications</a>
                                    @endforelse --}}
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="shop.html">Shop</a>
                            </li>
                        </ul>

                        <div class="user_option">
                            @auth
                                {{ Auth::user()->name }}

                            @else
                            <a href="{{ route('login.page') }}">
                                <img src="{{ asset('front/images/user.png') }}" alt="">
                                <span>Login</span>
                            </a>
                            @endauth
                        </div>
                    </div>

                    <div>
                        <div class="custom_menu-btn ">
                            <button>
                                <span class=" s-1">

                                </span>
                                <span class="s-2">

                                </span>
                                <span class="s-3">

                                </span>
                            </button>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <!-- end header section -->

        <!-- slider section -->
        <section class="slider_section ">
            <div class="play_btn">
                <a href="">
                    <img src="{{ asset('front/images/play.png') }}" alt="">
                </a>
            </div>
            <div class="number_box">
                <div>
                    <ol class="carousel-indicators indicator-2">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3">04</li>
                    </ol>
                </div>
            </div>
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-box">
                                        <h1>
                                            The Latest
                                            <span>
                                                Furniture
                                            </span>
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                            do eiusmod tempor incididunt ut labore
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn-1">
                                                Read More
                                            </a>
                                            <a href="" class="btn-2">
                                                Contact us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 img-container">
                                    <div class="img-box">
                                        <img src="{{ asset('front/images/slider-img.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-box">
                                        <h1>
                                            The Latest
                                            <span>
                                                Furniture
                                            </span>
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                            do eiusmod tempor incididunt ut labore
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn-1">
                                                Read More
                                            </a>
                                            <a href="" class="btn-2">
                                                Contact us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 img-container">
                                    <div class="img-box">
                                        <img src="{{ asset('front/images/slider-img.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-box">
                                        <h1>
                                            The Latest
                                            <span>
                                                Furniture
                                            </span>
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                            do eiusmod tempor incididunt ut labore
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn-1">
                                                Read More
                                            </a>
                                            <a href="" class="btn-2">
                                                Contact us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 img-container">
                                    <div class="img-box">
                                        <img src="{{ asset('front/images/slider-img.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-box">
                                        <h1>
                                            The Latest
                                            <span>
                                                Furniture
                                            </span>
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                            do eiusmod tempor incididunt ut labore
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn-1">
                                                Read More
                                            </a>
                                            <a href="" class="btn-2">
                                                Contact us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 img-container">
                                    <div class="img-box">
                                        <img src="{{ asset('front/images/slider-img.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end slider section -->
    </div>

    <!-- about section -->
    <section class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    @livewire('notification')
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="{{ asset('front/images/about-img.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about section -->

    <!-- trending section -->
    <section class="trending_section layout_padding">
        <div id="accordion">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="detail-box">
                            <div class="heading_container">
                                <h2>
                                    Trending Categories
                                </h2>
                            </div>
                            <div class="tab_container">
                                <div class="t-link-box" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    <div class="number">
                                        <h5>
                                            01
                                        </h5>
                                    </div>
                                    <hr>
                                    <div class="t-name">
                                        <h5>
                                            Chairs
                                        </h5>
                                    </div>
                                </div>
                                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="number">
                                        <h5>
                                            02
                                        </h5>
                                    </div>
                                    <hr>
                                    <div class="t-name">
                                        <h5>
                                            Tables
                                        </h5>
                                    </div>
                                </div>
                                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    <div class="number">
                                        <h5>
                                            03
                                        </h5>
                                    </div>
                                    <hr>
                                    <div class="t-name">
                                        <h5>
                                            Bads
                                        </h5>
                                    </div>
                                </div>
                                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour">
                                    <div class="number">
                                        <h5>
                                            04
                                        </h5>
                                    </div>
                                    <hr>
                                    <div class="t-name">
                                        <h5>
                                            Furnitures
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="collapse show" id="collapseOne" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="img_container ">
                                <div class="box b-1">
                                    <div class="img-box">
                                        <img src="{{ asset('front/images/t-1.jpg') }}" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img src="{{ asset('front/images/t-2.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="box b-2">
                                    <div class="img-box">
                                        <img src="{{ asset('front/images/t-3.jpg') }}" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img src="{{ asset('front/images/t-4.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo"
                            data-parent="#accordion">
                            <div class="img_container ">
                                <div class="box b-1">
                                    <div class="img-box">
                                        <img src="{{ asset('front/images/t-3.jpg') }}" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img src="{{ asset('front/images/t-4.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="box b-2">

                                    <div class="img-box">
                                        <img src="{{ asset('front/images/t-1.jpg') }}" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img src="{{ asset('front/images/t-2.jpg') }}" alt="">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseThree" aria-labelledby="headingThree"
                            data-parent="#accordion">
                            <div class="img_container ">
                                <div class="box b-1">
                                    <div class="img-box">
                                        <img src="{{ asset('front/images/t-4.jpg') }}" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img src="{{ asset('front/images/t-1.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="box b-2">
                                    <div class="img-box">
                                        <img src="{{ asset('front/images/t-3.jpg') }}" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img src="{{ asset('front/images/t-2.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseFour" aria-labelledby="headingfour"
                            data-parent="#accordion">
                            <div class="img_container ">
                                <div class="box b-1">
                                    <div class="img-box">
                                        <img src="{{ asset('front/images/t-1.jpg') }}" alt="">

                                    </div>

                                    <div class="img-box">
                                        <img src="{{ asset('front/images/t-4.jpg') }}" alt="">

                                    </div>
                                </div>
                                <div class="box b-2">
                                    <div class="img-box">
                                        <img src="{{ asset('front/images/t-3.jpg') }}" alt="">

                                    </div>
                                    <div class="img-box">
                                        <img src="{{ asset('front/images/t-2.jpg') }}" alt="">

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- end trending section -->

    <!-- discount section -->
    <section class="discount_section  layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <h2>
                            The Latest Collection
                        </h2>
                        <h2 class="main_heading">
                            50% DISCOUNT
                        </h2>

                        <div class="">
                            <a href="">
                                Buy Now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="{{ asset('front/images/discount-img.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end discount section -->

    <!-- brand section -->
    @yield('content')
    <!-- end brand section -->

    <script type="text/javascript" src="{{ asset('front/js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
    </script>
<script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>

    <script>
        var nav = $("#navbarSupportedContent");
        var btn = $(".custom_menu-btn");
        btn.click
        btn.click(function(e) {
            e.preventDefault();
            nav.toggleClass("lg_nav-toggle");
            document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
        });
    </script>

</body>

</html>
