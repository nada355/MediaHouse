{{--<!DOCTYPE html>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta name="csrf-token" content="{{ csrf_token() }}">

                <title>{{ config('app.name', 'Laravel') }}</title>

                <!-- Fonts -->
                <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

                <!-- Styles -->
                <link rel="stylesheet" href="{{ mix('css/app.css') }}">

                <!-- Scripts -->
                <script src="{{ mix('js/app.js') }}" defer></script>
            </head>
            <body>
                <div class="font-sans text-gray-900 antialiased">
                    {{ $slot }}
                </div>
            </body>
        </html>--}}

        <!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Media House</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/icons/favicon.jpg')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/icons/favicon.jpg')}}">

    <link rel="manifest" href="{{ asset('assets/images/icons/site.html')}}">
    <link rel="mask-icon" href="{{ asset('assets/images/icons/safari-pinned-tab.svg')}}" color="#666666">
    <link rel="shortcut icon" href="{{ asset('assets/images/icons/favicon.ico')}}">
    <meta name="apple-mobile-web-app-title" content="">
    <meta name="application-name" content="">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{ asset('assets/images/icons/browserconfig.xml')}}">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{ asset('assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css')}}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery.countdown.css')}}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/pagination.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/quantity.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/skins/skin-demo-4.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/demos/demo-4.css')}}">
@livewireStyles
</head>

<body>
    <div class="page-wrapper">
        <header class="header header-intro-clearance header-4">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <a href="tel:#"><i class="icon-phone"></i>Appelez nous: (+216) 98 248 675</a>
                    </div><!-- End .header-left -->

                    <div class="header-right">

                        <ul class="top-menu">
                            <li>

                                <ul>

                                    <li>
                                        <div class="header-dropdown">
                                            <a href="#">English</a>
                                            <div class="header-menu">
                                                <ul>
                                                    <li><a href="#">English</a></li>
                                                    <li><a href="#">French</a></li>
                                                    <li><a href="#">Spanish</a></li>
                                                </ul>
                                            </div><!-- End .header-menu -->
                                        </div>
                                    </li>

                                    @if(Route::has('login'))
                                        @auth
                                            @if(Auth::user()->utype === 'ADM')
                                                <li>
                                                    <div class="header-dropdown">
                                                        <a href="#">{{Auth::user()->name}}</a>
                                                        <div class="header-menu">
                                                            <ul>
                                                                <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                                                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                                    @csrf
                                                                </form>
                                                            </ul>
                                                        </div><!-- End .header-menu -->
                                                    </div>
                                                </li>
                                            @else
                                                <li>
                                                    <div class="header-dropdown">
                                                        <a href="#">{{Auth::user()->name}}</a>
                                                        <div class="header-menu">
                                                            <ul>
                                                                <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                                                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                                                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                                    @csrf
                                                                </form>
                                                            </ul>
                                                        </div><!-- End .header-menu -->
                                                    </div>
                                                </li>

                                            @endif
                                        @else
                                            <li><a href="{{ route('login') }}">log in</a></li>
                                            <li><a href="{{ route('register') }}" >Register</a></li>
                                        @endif
                                    @endif
                                </ul>
                            </li>

                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->

                </div><!-- End .container -->
            </div><!-- End .header-top -->



            <div class="header-bottom sticky-header">
                <div class="container">

                    <div class="header-left">
                        <a href="index.html" class="logo">
                            <img src="{{ asset('assets/images/demos/demo-4/logo.jpg')}}" alt="MH logo" width="105" height="25">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <nav class="main-nav">
                            <ul class="menu">
                                <li class="megamenu-container active">
                                    <a href="/" class="">Accueil</a>

                                </li>
                                <li>
                                    <a href="#about" class="">À Propos</a>

                                </li>
                                <li>
                                    <a href="#categorie" class="sf-with-ul">Produits</a>

                                    <div class="megamenu megamenu-sm">
                                        <div class="row no-gutters" style="margin-right:0px;">
                                            <div class="col-md-4">
                                                <div class="menu-col">
                                                    <ul>
                                                        <li><a href="/shop">Galleries</a></li>

                                                    </ul>
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-6 -->

                                            <div class="col-md-4">
                                                <div class="banner banner-overlay">
                                                    <a href="/shop">
                                                        <img src="{{ asset('assets/images/demos/demo-4/products/product-4.jpg')}}" alt="Banner">

                                                        <div class="banner-content banner-content-bottom">
                                                            <div class="banner-title text-dark">Nouveau Produit<br><span><strong>2021/2022</strong></span></div><!-- End .banner-title -->
                                                        </div><!-- End .banner-content -->
                                                    </a>
                                                </div><!-- End .banner -->
                                            </div><!-- End .col-md-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu megamenu-sm -->
                                </li>

                                <li>
                                    <a href="#footer" class="">Contact</a>


                                </li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                        <div class="dropdown compare-dropdown">
                            <a href="#" class="dropdown-toggle" role="button">
                                <div class="icon">
                                    <i class="icon-search"></i>
                                </div>

                            </a>

                        </div><!-- End .compare-dropdown -->



                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->

     {{$slot}}

        <footer class="footer" id="footer">
        	<div class="footer-middle">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget widget-about">
	            				<img src="{{ asset('assets/images/demos/demo-4/logo.jpg')}}" class="footer-logo" alt="Footer Logo" width="105" height="25">
                                <div class="widget-call">
                                    <i class="icon-map-marker"></i>
                                    Avenue Habib Bourguiba, hammamet 80 ,Tunisie.
                    </div><!-- End .widget-call -->
                    <div class="widget-call">
                        <i class="icon-clock-o"></i>
                        <span class="text-dark">Lundi-Samedi</span> <br>8H-17H
                    </div><!-- End .widget-call -->
	            				<div class="widget-call">
                                    <i class="icon-phone"></i>
                                    Vous avez des questions? Appelez nous 24/7
                                    <a href="tel:#">(+216) 98 248 675</a>
                                </div><!-- End .widget-call -->



	            			</div><!-- End .widget about-widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-3" >
	            			<div class="widget">
                                <div class="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3211.0889565707757!2d10.609914214627995!3d36.40704299743249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd61e4e9c3f8eb%3A0x4e67b9095652e758!2sMediaHouse!5e0!3m2!1sfr!2stn!4v1640882406285!5m2!1sfr!2stn" width="250"  height="270" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title">Categories</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="#categorie">Laptop</a></li>
	            					<li><a href="#categorie">Computer</a></li>
	            					<li><a href="#categorie">Accessoirs</a></li>
	            					<li><a href="#categorie">Audio & Video</a></li>
	            					<li><a href="#categorie">Mobil & Tablet</a></li>

	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title">À Propos</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="#">Sign In</a></li>
	            					<li><a href="#footer">Contact</a></li>
                                    <li><a href="#about">À propos</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & conditions</a></li>           					<li><a href="#">Help</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->
	            	</div><!-- End .row -->
	            </div><!-- End .container -->
	        </div><!-- End .footer-middle -->

	        <div class="footer-bottom">
	        	<div class="container">
	        		<p class="footer-copyright">Copyright © 2022 Media House. All Rights Reserved.</p><!-- End .footer-copyright -->
	        		<figure class="footer-payments">
	        			<img src="{{ asset('assets/images/payments.png')}}" alt="Payment methods" width="272" height="20">
	        		</figure><!-- End .footer-payments -->
	        	</div><!-- End .container -->
	        </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->






    <!-- Plugins JS File -->
    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.hoverIntent.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('assets/js/superfish.min.js')}}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap-input-spinner.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.plugin.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js')}}"></script>
    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js')}}"></script>
    <script src="{{ asset('assets/js/demos/demo-4.js')}}"></script>

    @livewireScripts

	@stack('scripts')
</body>


</html>
