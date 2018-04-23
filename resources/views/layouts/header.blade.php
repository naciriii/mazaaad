<!DOCTYPE html>
<!--[if IE 7]> <html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
    <head>
        <!-- TITLE OF SITE -->
        <title> Mazaad</title>
        
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="description" content="mazaad bid web application" />
        <meta name="keywords" content="tunisia, mazaad, vente,bid, selling" />
        <meta name="developer" content="Nsiri nacer">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        @yield('css')

        <!-- FAV AND ICONS   -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
        <link rel="shortcut icon" href="{{asset('assets/images/apple-icon.png')}}">
        <link rel="shortcut icon" sizes="72x72" href="{{asset('assets/images/apple-icon-72x72.png')}}">
        <link rel="shortcut icon" sizes="114x114" href="{{asset('assets/images/apple-icon-114x114.png')}}">

        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7cPlayfair+Display:400,400i,700,900" rel="stylesheet">

        <!-- FONT ICONS -->
        <link rel="stylesheet" href="{{asset('assets/icons/font-awesome-4.7.0/css/font-awesome.min.css')}}">
        
        <!-- Custom Icon Font -->
        <link rel="stylesheet" href="{{asset('assets/fonts/flaticon.css')}}">
        <!-- Bootstrap-->
        <link rel="stylesheet" href="{{asset('assets/plugins/css/bootstrap.min.css')}}">
        <!-- Fancybox-->
        <link rel="stylesheet" href="{{asset('assets/plugins/css/jquery.fancybox.min.css')}}">

        <!-- Animation -->
        <link rel="stylesheet" href="{{asset('assets/plugins/css/animate.css')}}">
        <!-- owl -->
        <link rel="stylesheet" href="{{asset('assets/plugins/css/owl.css')}}">
        <!--flexslider-->
        <link rel="stylesheet" href="{{asset('assets/plugins/css/flexslider.min.css')}}">
        <!-- selectize -->
        <link rel="stylesheet" href="{{asset('assets/plugins/css/selectize.css')}}">
        <link rel="stylesheet" href="{{asset('assets/plugins/css//selectize.bootstrap3.css')}}">
        <link rel="stylesheet" href="{{asset('assets/plugins/css/jquery-ui.min.css')}}">
        <!--dropdown -->
        <link rel="stylesheet" href="{{asset('assets/plugins/css/bootstrap-dropdownhover.min.css')}}">
        <!-- mobile nav-->
        <link rel="stylesheet" href="{{asset('assets/plugins/css/meanmenu.css')}}">

        <!-- COUSTOM CSS link  -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

        <!--[if lt IE 9]>
            <script src="{{asset('js/plagin-js/html5shiv.js')}}"></script>
            <script src="{{asset('js/plagin-js/respond.min.js')}}"></script>
        <![endif]-->

    </head>
     <body>
        <!--
        |========================
        |  HEADER
        |========================
        -->
        <header id="xt-home" class="xt-header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="xt-language col-md-6 col-sm-6 col-xs-12">
                            <div class="each-nav">
                                <ul>
                                    <li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">English <span class="fa fa-angle-down"></span> </a>
                                        <ul class="dropdown-menu xt-lang-dropdown">
                                            <li><a href="">Frensh</a></li>
                                            
                                            
                                        </ul>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                        
                        <div class="user-nav pull-right col-md-6 col-sm-6 col-xs-12">
                            <ul>
                                <li><a href="{{asset('/register')}}">Sign up</a></li>
                                <li><a href="{{asset('/login')}}">login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="main-navigation">
                <nav class="navbar navbar-fixed-top nav-scroll">
                    <div class="container">
                        <div class="row">
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span aria-hidden="true" class="icon"></span>
                              </button>
                              <a class="navbar-brand" href="{{route('home.index')}}"><img src="{{asset('assets/images/flogo.png')}}" alt="" class="img-responsive"></a>
                            </div>
                            
                            <div class="collapse navbar-collapse" id="js-navbar-menu">
                                <ul class="nav navbar-nav navbar-right ep-mobile-menu" id="navbar-nav">
                                    <li class="active"><a href="{{route('home.index')}}">Home</a></li>
                                    <li><a href="{{route('products.index')}}">Products</a></li>
                                    <li><a href="single-shop.html">Single Product</a></li>
                                    <li><a href="">About</a></li>
                                    <li><a href="">Live Auctions</a></li>
                                    <li><a href="contact-us.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>