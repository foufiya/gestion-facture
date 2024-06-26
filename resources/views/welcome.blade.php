@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam aspernatur error illum cumque eligendi nemo possimus, nobis ab qui dolorum.</p>
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
@endsection
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Scanf </title>

        <!-- Favicons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('asset/ico/apple-touch-icon-144-precomposed.png') }}">
        <link rel="shortcut icon" href="{{ asset('asset/ico/favicon.ico') }}">

        <!-- CSS Global -->
        <link href="{{ asset('asset/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/plugins/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/plugins/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/plugins/jquery-ui-1.11.4.custom/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('asset/plugins/owlcarousel2/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/plugins/owlcarousel2/assets/owl.theme.default.min.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/plugins/prettyphoto/css/prettyPhoto.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/plugins/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/plugins/countdown/jquery.countdown.css') }}" rel="stylesheet">

        <link href="{{ asset('asset/css/theme.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/css/custom.css') }}" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="{{ asset('asset/plugins/iesupport/html5shiv.js') }}"></script>
        <script src="{{ asset('asset/plugins/iesupport/respond.min.js') }}"></script>
        <![endif]-->
    </head>
    <body id="home" class="wide body-light multipage">

        <!-- Preloader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner"></div>
            </div>
        </div>

        <!-- Wrap all content -->
        <div class="wrapper">

            <!-- HEADER -->
            <header class="header fixed">

                <!-- Top Line -->
                <div class="top-line">
                    <div class="container">
                        <ul class="user-menu">
                            <li><a href="/register"  data-toggle="modal"><i class="fa fa-file-text-o"></i> Register Now</a></li>
                            <li><a href="/login" data-toggle="modal"><i class="fa fa-user"></i> Login</a></li>
                        </ul>
                        
                    </div>
                </div>
                <!-- /Top Line -->

                <div class="container">
                    <div class="header-wrapper clearfix">

                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html" class="scroll-to">
                                <span class="fa-stack">
                                    <i class="fa logo-hex fa-stack-2x"></i>
                                    <i class="fa logo-fa fa-map-marker fa-stack-1x"></i>
                                </span>
                                Scanf
                            </a>
                        </div>
                        <!-- /Logo -->

                        <!-- Navigation -->
                        <div id="mobile-menu"></div>
                        <nav class="navigation closed clearfix">
                            <a href="#" class="menu-toggle btn"><i class="fa fa-bars"></i></a>
                            <ul class="sf-menu nav">
                                <li class="active">
                                    <a href="index.html">Home</a>
                                    
                                </li>
                                <li>
                                    
                                </li>
                                <li>
                                    <a href="gallery-col-4.html">Gallery</a>
                                    <ul>
                                        
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog.html">Pages</a>
                                    <ul>
                                        <li><a href="blog.html">Statistiques</a></li>
                                        <li><a href="blog-single.html">gestion de Factures </a></li>
                                        <li><a href="search-results.html"> Rapport financiere</a></li>
                                       
                                    </ul>
                                </li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li class="header-search-wrapper">
                                    <form action="#" class="header-search-form">
                                        <input type="text" class="form-control header-search" placeholder="Search"/>
                                        <input type="submit" hidden="hidden"/>
                                    </form>
                                </li>
                            </ul>
                        </nav>
                        <!-- /Navigation -->

                    </div>
                </div>
            </header>
            <!-- /HEADER -->

            <!-- Content area -->
            <div class="content-area">

                <div id="main">
                    <!-- SLIDER -->
                    <section class="page-section no-padding background-img-slider">
                        <div class="container">

                            <div id="main-slider" class="owl-carousel owl-theme">

                                <!-- Slide -->

                                <!-- Slide -->
                                <div class="item text-center slide6">
                                    <div class="caption">
                                        <div class="container">
                                            <div class="div-table">
                                                <div class="div-cell">

                                                    <div class="div-table slider-content">

                                                        <div class="div-cell event-image">
                                                            <img src="{{ asset('asset/img/preview/img.jpg') }}" alt=""/>
                                                        </div>
                                                        <div class="div-cell">

                                                           <h3 class="caption-subtitle animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="300">Gestion de Facture</h3> 
                                                            <h2 class="caption-title animated fadeInDown visible" data-animation="fadeInDown" data-animation-delay="100"> Morroco / Safi </h2>
                                                            <p class="caption-text">
                                                                <a class="btn btn-theme animated flipInY visible" href="/register" data-animation="flipInY" data-animation-delay="600"> Register Now</a><!--
                                                                -->
                                                             </p>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </section>
                    <!-- /SLIDER -->
                </div>

                <!-- Featured Event -->
                <section class="page-section color featured-line xs-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <h1 class="section-title two-lines">
                                    <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex dark fa-stack-2x"></i><i class="fa fa-calendar fa-stack-1x"></i></span></span>
                                    <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner"> CE QUE TU VEUX <small>Trouvez le meilleur procédure de la gestion de Facture </small></span>
                                </h1>
                            </div>
                            <div class="col-md-9">
                                {{-- <form id="registration-form" name="registration-form" class="event-form" action="#" method="post">
                                    <div class="row">
                                        <div class="col-sm-12 form-alert"></div>
                                        <div class="col-sm-6 col-md-3">                                           
                                            <div class="form-group selectpicker-wrapper with-icon">
                                                <i class="fa fa-globe"></i>
                                                <select class="selectpicker input-price" data-live-search="true" data-width="100%"
                                                        data-toggle="tooltip" title="Select Location">
                                                    <option>Select Location</option>
                                                    <option>Canada</option>
                                                    <option>Australia</option>
                                                    <option>Dubai</option>
                                                </select>
                                            </div>                                           
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group selectpicker-wrapper with-icon">
                                                <i class="fa fa-bars"></i>
                                                <select class="selectpicker input-price" data-live-search="true" data-width="100%"
                                                        data-toggle="tooltip" title="Select Type">
                                                    <option>Select Type</option>
                                                    <option>Canada</option>
                                                    <option>Australia</option>
                                                    <option>Dubai</option>
                                                </select>
                                            </div>     
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group selectpicker-wrapper with-icon">
                                                <i class="fa fa-calendar"></i>
                                                <input type="text" class="form-control datetimepicker" name="datetimepicker" placeholder ="Select Date" />
                                            </div>     
                                        </div>
                                        <div class="col-md-3 overflowed">
                                            <div class="form-group">
                                                <button class="btn btn-theme submit-button" type="submit"> Find Event <i class="fa fa-arrow-circle-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form> --}}
                            </div>

                        </div>
                    </div>
                </section>
                <!-- /Featured Event -->

                <!-- PAGE -->
                {{-- <section class="page-section light">
                    <div class="container">

                        <div class="row thumbnails info-thumbs clear">
                            <div class="col-sm-6 col-md-4" data-animation="fadeInUp" data-animation-delay="100">
                                <div class="thumbnail no-border no-padding text-center">
                                    <div class="rehex">
                                        <div class="rehex-deg">
                                            <div class="rehex-deg">
                                                <div class="rehex-inner">
                                                    <div class="caption-wrapper div-table">
                                                        <div class="caption-inner div-cell">
                                                            <p class="caption-buttons"><a href="#" class="btn caption-link"><i class="fa fa-calendar"></i></a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="caption-title">7/24 Event avaliable</h3>
                                        <p class="caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed vel velit</p>
                                        <p class="caption-more"><a href="#" class="btn btn-theme">Details</a></p>
                                    </div>
                                </div>
                            </div>
                            <!-- -->
                            <div class="col-sm-6 col-md-4" data-animation="fadeInUp" data-animation-delay="300">
                                <div class="thumbnail no-border no-padding text-center">
                                    <div class="rehex">
                                        <div class="rehex-deg">
                                            <div class="rehex-deg">
                                                <div class="rehex-inner">
                                                    <div class="caption-wrapper div-table">
                                                        <div class="caption-inner div-cell">
                                                            <p class="caption-buttons"><a href="#" class="btn caption-link"><i class="fa fa-map-marker"></i></a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="caption-title">Great Locations</h3>
                                        <p class="caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed vel velit</p>
                                        <p class="caption-more"><a href="#" class="btn btn-theme">Details</a></p>
                                    </div>
                                </div>
                            </div>
                            <!-- -->
                            <div class="col-sm-6 col-md-4" data-animation="fadeInUp" data-animation-delay="500">
                                <div class="thumbnail no-border no-padding text-center">
                                    <div class="rehex">
                                        <div class="rehex-deg">
                                            <div class="rehex-deg">
                                                <div class="rehex-inner">
                                                    <div class="caption-wrapper div-table">
                                                        <div class="caption-inner div-cell">
                                                            <p class="caption-buttons"><a href="#" class="btn caption-link"><i class="fa fa-users"></i></a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="caption-title">More Then 200 Speakers</h3>
                                        <p class="caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed vel velit</p>
                                        <p class="caption-more"><a href="#" class="btn btn-theme">Details</a></p>
                                    </div>
                                </div>
                            </div>
                           
                        </div>

                    </div>
                </section> --}}
                <!-- /PAGE -->

                <!-- PAGE -->
                {{-- <section class="page-section">
                    <div class="container">

                        <div class="clear clearfix overflowed">
                            <div class="section-title pull-left" style="width: auto;">
                                <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-star fa-stack-1x"></i></span></span>
                            </div>
                            <ul id="filtrable-events" class="filtrable clearfix">
                                <li class="all"><a href="#" data-filter="*">All</a></li>
                                <li class="festival current"><a href="#" data-filter=".festival">Festival</a></li>
                                <li class="playground"><a href="#" data-filter=".playground">Playground</a></li>
                                <li class="conferance"><a href="#" data-filter=".conference">Conference</a></li>
                            </ul>
                        </div>

                        <div class="row thumbnails events isotope isotope-items">

                            <div class="col-md-3 col-sm-6 isotope-item festival">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                        <div class="date">
                                            <span>25</span>
                                            <span>Jan</span>
                                        </div>
                                        <img src="{{ asset('asset/img/preview/hotel-1.jpg') }}" alt="">
                                        <div class="caption hovered"></div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                        <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October <i class="fa fa-map-marker"></i> Manhattan / New York</p>
                                        <p class="caption-price">Tickets from $49,99</p>
                                        <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.	</p>
                                        <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 isotope-item conference">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                        <div class="date">
                                            <span>25</span>
                                            <span>Jan</span>
                                        </div>
                                        <img src="{{ asset('asset/img/preview/hotel-1.jpg') }}" alt="">
                                        <div class="caption hovered"></div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                        <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October <i class="fa fa-map-marker"></i> Manhattan / New York</p>
                                        <p class="caption-price">Tickets from $49,99</p>
                                        <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.	</p>
                                        <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 isotope-item miscellaneous">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                        <div class="date">
                                            <span>25</span>
                                            <span>Jan</span>
                                        </div>
                                        <img src="{{ asset('asset/img/preview/hotel-1.jpg') }}" alt="">
                                        <div class="caption hovered"></div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                        <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October <i class="fa fa-map-marker"></i> Manhattan / New York</p>
                                        <p class="caption-price">Tickets from $49,99</p>
                                        <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.	</p>
                                        <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 isotope-item festival playground">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                        <div class="date">
                                            <span>25</span>
                                            <span>Jan</span>
                                        </div>
                                        <img src="{{ asset('asset/img/preview/hotel-1.jpg') }}" alt="">
                                        <div class="caption hovered"></div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                        <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October <i class="fa fa-map-marker"></i> Manhattan / New York</p>
                                        <p class="caption-price">Tickets from $49,99</p>
                                        <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.	</p>
                                        <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 isotope-item festival conference">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                        <div class="date">
                                            <span>25</span>
                                            <span>Jan</span>
                                        </div>
                                        <img src="{{ asset('asset/img/preview/hotel-1.jpg') }}" alt="">
                                        <div class="caption hovered"></div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                        <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October <i class="fa fa-map-marker"></i> Manhattan / New York</p>
                                        <p class="caption-price">Tickets from $49,99</p>
                                        <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.	</p>
                                        <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 isotope-item conference playground">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                        <div class="date">
                                            <span>25</span>
                                            <span>Jan</span>
                                        </div>
                                        <img src="{{ asset('asset/img/preview/hotel-1.jpg') }}" alt="">
                                        <div class="caption hovered"></div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                        <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October <i class="fa fa-map-marker"></i> Manhattan / New York</p>
                                        <p class="caption-price">Tickets from $49,99</p>
                                        <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.	</p>
                                        <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 isotope-item festival conference">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                        <div class="date">
                                            <span>25</span>
                                            <span>Jan</span>
                                        </div>
                                        <img src="{{ asset('asset/img/preview/hotel-1.jpg') }}" alt="">
                                        <div class="caption hovered"></div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                        <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October <i class="fa fa-map-marker"></i> Manhattan / New York</p>
                                        <p class="caption-price">Tickets from $49,99</p>
                                        <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.	</p>
                                        <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 isotope-item playground">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                        <div class="date">
                                            <span>25</span>
                                            <span>Jan</span>
                                        </div>
                                        <img src="{{ asset('asset/img/preview/hotel-1.jpg') }}" alt="">
                                        <div class="caption hovered"></div>
                                    </div>
                                    <div class="caption">
                                        <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                        <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October <i class="fa fa-map-marker"></i> Manhattan / New York</p>
                                        <p class="caption-price">Tickets from $49,99</p>
                                        <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.	</p>
                                        <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center margin-top">
                            <a data-animation="fadeInUp" data-animation-delay="100" href="#" class="btn btn-theme btn-theme-grey-dark btn-theme-md"><i class="fa fa-file-text-o"></i> See all events</a>
                        </div>

                    </div>
                </section> --}}
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section light">
                    <div class="container">

                        <!-- Testimonials -->
                        <div id="testimonials" class="owl-carousel testimonials testimonials-alt" data-animation="fadeInUp" data-animation-delay="100">

                            <div class="media testimonial">
                                <div class="media-object">
                                    <div class="testimonial-avatar">
                                        {{-- <img class="img-responsive img-circle" src="{{ asset('asset/img/preview/avatar-v2-1.jpg') }}" alt=""/> --}}
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p>une bonne gestion de la facturation contribue à améliorer la santé financière, la productivité et la réputation d'une entreprise, tout en réduisant les risques et en facilitant la prise de décision stratégique.</p>
                                    
                                </div>
                            </div>

                            <div class="media testimonial">
                                <div class="media-object">
                                    <div class="testimonial-avatar">
                                        {{-- <img class="img-responsive img-circle" src="{{ asset('assets/img/faces/logo.jpeg') }}" alt=""/> --}}
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p>une bonne gestion de la facturation peut contribuer de manière significative à la croissance, à la rentabilité et à la durabilité d'une entrepris</p>
                                    
                                </div>
                            </div>

                            <div class="media testimonial">
                                <div class="media-object">
                                    <div class="testimonial-avatar">
                                        {{-- <img class="img-responsive img-circle" src="{{ asset('asset/img/preview/avatar-v2-3.jpg') }}" alt=""/> --}}
                                    </div>
                                </div>
                                <div class="media-body">
                                   <p>Une bonne gestion de la facturation permet à une entreprise de maximiser ses revenus, d'optimiser ses flux de trésorerie, de renforcer ses relations client, de réduire les coûts administratifs, d'améliorer la prévisibilité financière et d'accroître la productivité du personnel</p>
                                  
                                </div>
                            </div>

                        </div>
                        <!-- Testimonials -->

                    </div>
                </section> 
                <!-- /PAGE -->

                <!-- PAGE -->
                {{-- <section class="page-section">
                    <div class="container">

                        <h1 class="section-title">
                            <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-h-square fa-stack-1x"></i></span></span>
                            <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">HOTELS <small> / dont forget book your room</small></span>
                        </h1>

                        <div class="thumbnails hotels">
                            <div class="carousel-slider">
                                <div class="owl-carousel slide-4">
                                    <div>
                                        <div class="thumbnail no-border no-padding">
                                            <div class="media">
                                                <img src="{{ asset('asset/img/preview/hotel-1.jpg') }}" alt="">
                                                <div class="caption hovered">
                                                    <div class="caption-wrapper div-table">
                                                        <div class="caption-inner div-cell">
                                                            <p class="caption-buttons"><a href="#" class="btn btn-theme caption-link"><i class="fa fa-file-text"></i> Details</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3 class="caption-title"><a href="#">Standard Hotel Name Here</a></h3>
                                                <div class="caption-rating rating">
                                                    <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                                </div>
                                                <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.</p>
                                                <p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="thumbnail no-border no-padding">
                                            <div class="media">
                                                <img src="{{ asset('asset/img/preview/hotel-1.jpg') }}" alt="">
                                                <div class="caption hovered">
                                                    <div class="caption-wrapper div-table">
                                                        <div class="caption-inner div-cell">
                                                            <p class="caption-buttons"><a href="#" class="btn btn-theme caption-link"><i class="fa fa-file-text"></i> Details</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3 class="caption-title"><a href="#">Standard Hotel Name Here</a></h3>
                                                <div class="caption-rating rating">
                                                    <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                                </div>
                                                <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.</p>
                                                <p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="thumbnail no-border no-padding">
                                            <div class="media">
                                                <img src="{{ asset('asset/img/preview/hotel-1.jpg') }}" alt="">
                                                <div class="caption hovered">
                                                    <div class="caption-wrapper div-table">
                                                        <div class="caption-inner div-cell">
                                                            <p class="caption-buttons"><a href="#" class="btn btn-theme caption-link"><i class="fa fa-file-text"></i> Details</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3 class="caption-title"><a href="#">Standard Hotel Name Here</a></h3>
                                                <div class="caption-rating rating">
                                                    <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                                </div>
                                                <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.</p>
                                                <p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="thumbnail no-border no-padding">
                                            <div class="media">
                                                <img src="{{ asset('asset/img/preview/hotel-1.jpg') }}" alt="">
                                                <div class="caption hovered">
                                                    <div class="caption-wrapper div-table">
                                                        <div class="caption-inner div-cell">
                                                            <p class="caption-buttons"><a href="#" class="btn btn-theme caption-link"><i class="fa fa-file-text"></i> Details</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3 class="caption-title"><a href="#">Standard Hotel Name Here</a></h3>
                                                <div class="caption-rating rating">
                                                    <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                                </div>
                                                <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.</p>
                                                <p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="text-center margin-top">
                            <a data-animation="fadeInUp" data-animation-delay="100" href="#" class="btn btn-theme btn-theme-grey-dark btn-theme-md"><i class="fa fa-h-square"></i>&nbsp; See all Hotels</a>
                        </div>

                    </div>
                </section> --}}
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section dark call-action">
                    <div class="container">
                        <div class="row div-table">
                            <div class="col-sm-12 col-md-12 div-cell">
                                <h1 class="section-title">Simplifiez la gestion de vos factures avec notre plateforme intuitive et efficacet</h1>
                                {{-- <p class="font_roboto">Bring people together, or turn your passion into a business. Eventbrite gives you everything you need to host your best event yet.</p> --}}
                            </div>
                            {{-- <div class="col-sm-12 col-md-2 purchase-now div-cell">
                                <a href="#" class="btn btn-theme">SUBMIT EVENT</a>
                            </div> --}}
                        </div>
                    </div>
                </section>
                <!-- /PAGE -->


            </div>
            <!-- /Content area -->

            <!-- FOOTER -->
            <footer class="footer">
                <div class="footer-widgets">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-3">
                                <div class="widget widget-about">
                                    <h4 class="widget-title">About Us</h4>
                                    <p>G-PFE Etudiant EST-Safi</p>
                                    <address>
                                        <div><i class="fa fa-phone"></i>+212 612345678</div>
                                        <div><i class="fa fa-envelope"></i> <a href="mailto:info@example.com">info@example.com</a></div>
                                    </address>
                                </div>
                            </div>
                          
                           
                            <div class="col-md-3">
                                <div class="widget widget-flickr-feed">
                                    <h4 class="widget-title"><span>Instagram Photos</span></h4>
                                    <ul>
                                        <li><a href="#"><img src="{{ asset('asset/img/preview/sidebar-1.jpg') }}" alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('asset/img/preview/sidebar-2.jpg') }}" alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('asset/img/preview/sidebar-3.jpg') }}" alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('asset/img/preview/sidebar-4.jpg') }}" alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('asset/img/preview/sidebar-5.jpg') }}" alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('asset/img/preview/sidebar-6.jpg') }}" alt=""></a></li>
                                        <!--li><a href="#"><img src="{{ asset('asset/img/preview/sidebar-7.jpg') }}" alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('asset/img/preview/sidebar-8.jpg') }}" alt=""></a></li-->
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="footer-meta footer-meta-alt">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-9 col-sm-6">
                              
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <form action="#" class="country-select">
                                    <div class="form-group">
                                        <select class="selectpicker" data-width="100%">
                                            <option>Select Country</option>
                                
                                            <option>Sebt Gzoula</option>
                                            <option>Rabat</option>
                                            <option>CasaBlanca</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </footer>
            <!-- /FOOTER -->

            <div class="to-top"><i class="fa fa-angle-up"></i></div>

        </div>
        <!-- /Wrap all content -->

        <!-- Popup: Login -->
        <div class="modal fade login-register" id="popup-login" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">                 
                <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                <div class="form-background">
                    <div class="col-sm-6 popup-form">
                        <div class="form-header color">
                            <h1 class="section-title">
                                <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
                                <span class="title-inner">Login</span>
                            </h1>
                        </div>
                        <form method="post" action="#" class="registration-form alt" name="registration-form-alt" id="registration-form-alt">
                            <div class="row">
                                <div class="col-sm-12 form-alert"></div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="User Name" title="" data-toggle="tooltip" class="form-control input-name" data-original-title="Name is required">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text"  placeholder="Password"  title="" data-toggle="tooltip" class="form-control input-password" data-original-title="Password">
                                    </div>
                                </div>                                  
                                <div class="col-sm-12">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-theme btn-block submit-button" data-animation-delay="100" data-animation="flipInY"> Log in <i class="fa fa-arrow-circle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>     
                        <div class="form-footer color">
                            <a href="#" class="popup-password"> Lost your password?</a>                        
                        </div>
                    </div> 

                    <div class="popup-form col-sm-6">
                        <div class="form-header color">
                            <h1 class="section-title">
                                <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
                                <span class="title-inner">Register</span>
                            </h1>
                        </div>
                        <form method="post" action="#" class="registration-form alt" name="registration-form-alt" id="registration-form-alt">
                            <div class="row">
                                <div class="col-sm-12 form-alert"></div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="User Name" title="" data-toggle="tooltip" class="form-control input-name" data-original-title="Name is required">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text"  placeholder="E-mail"  title="" data-toggle="tooltip" class="form-control input-password" data-original-title="Password">
                                    </div>
                                </div>                                  
                                <div class="col-sm-12">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-theme btn-block submit-button" data-animation-delay="100" data-animation="flipInY"> Register Now <i class="fa fa-arrow-circle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>                         
                    </div> 

                </div>
            </div>

        </div>
        <!-- /Popup: Login -->

        <!-- JS Global -->

        <!--[if lt IE 9]><script src="{{ asset('asset/plugins/jquery/jquery-1.11.1.min.js') }}"></script><![endif]-->
        <!--[if gte IE 9]><!--><script src="{{ asset('asset/plugins/jquery/jquery-2.1.1.min.js') }}"></script><!--<![endif]-->
        <script src="{{ asset('asset/plugins/jquery-ui-1.11.4.custom/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('asset/plugins/modernizr.custom.js') }}"></script>
        <script src="{{ asset('asset/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('asset/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('asset/plugins/superfish/js/superfish.js') }}"></script>
        <script src="{{ asset('asset/plugins/prettyphoto/js/jquery.prettyPhoto.js') }}"></script>
        <script src="{{ asset('asset/plugins/placeholdem.min.js') }}"></script>
        <script src="{{ asset('asset/plugins/jquery.smoothscroll.min.js') }}"></script>
        <script src="{{ asset('asset/plugins/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('asset/plugins/smooth-scrollbar.min.js') }}"></script>

        <!-- JS Page Level -->
        <script src="{{ asset('asset/plugins/owlcarousel2/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('asset/plugins/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('asset/plugins/countdown/jquery.plugin.min.js') }}"></script>
        <script src="{{ asset('asset/plugins/countdown/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('asset/plugins/isotope/jquery.isotope.min.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

        <script src="{{ asset('asset/js/theme-ajax-mail.js') }}"></script>
        <script src="{{ asset('asset/js/theme.js') }}"></script>
        <script src="{{ asset('asset/js/custom.js') }}"></script>

        <script type="text/javascript">
            "use strict";
            jQuery(document).ready(function () {
                theme.init();
                theme.initMainSlider();
                theme.initCountDown();
                theme.initPartnerSlider();
                theme.initCorouselSlider4();
                theme.initTestimonials();
            });
            jQuery(window).load(function () {
                theme.initAnimation();
            });

            jQuery(window).load(function () {
                jQuery('body').scrollspy({offset: 100, target: '.navigation'});
            });
            jQuery(window).load(function () {
                jQuery('body').scrollspy('refresh');
            });
            jQuery(window).resize(function () {
                jQuery('body').scrollspy('refresh');
            });

            jQuery(document).ready(function () {
                theme.onResize();
            });
            jQuery(window).load(function () {
                theme.onResize();
            });
            jQuery(window).resize(function () {
                theme.onResize();
            });

            jQuery(window).load(function () {
                if (location.hash != '') {
                    var hash = '#' + window.location.hash.substr(1);
                    if (hash.length) {
                        jQuery('html,body').delay(0).animate({
                            scrollTop: jQuery(hash).offset().top - 44 + 'px'
                        }, {
                            duration: 1200,
                            easing: "easeInOutExpo"
                        });
                    }
                }
            });

        </script>

    </body>
</html>
