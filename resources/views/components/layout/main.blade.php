<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Site Metas -->
<title>SMBarber - Responsive HTML5 Template</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="{{asset('style.css')}}">
<!-- Colors CSS -->
<link rel="stylesheet" href="css/colors.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body class="barber_version">

<!-- LOADER -->
<div id="preloader">
    <div class="cube-wrapper">
        <div class="cube-folding">
            <span class="leaf1"></span>
            <span class="leaf2"></span>
            <span class="leaf3"></span>
            <span class="leaf4"></span>
        </div>
        <span class="loading" data-name="Loading">SMBarber Loading</span>
    </div>
</div><!-- end loader -->
<!-- END LOADER -->

<div id="wrapper">
    <x-layout.navbar>

    </x-layout.navbar>
    {{ $slot }}
    <div>
        <div class="copyrights">
            <div class="container-fluid">
                <div class="footer-distributed">
                    <div class="footer-left">
                        <p class="footer-links">
                            <a href="{{ route('index') }}">Home</a>
                            <a href="{{ route('blog') }}">Blog</a>
                            <a href="{{ route('price') }}">Price</a>
                            <a href="{{ route('about') }}">About</a>
                            <a href="#">Faq</a>
                            <a href="{{ route('contact') }}">Contact</a>
                        </p>
                        <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">SMBarber</a> Design
                            By :
                            <a href="https://html.design/">html design</a></p>
                    </div>

                    <div class="footer-right">
                        <form  action="{{ route('commenting') }}" method="Post">
                            @csrf
                            <input placeholder="Comments.." name="comment">
                            <i class="fa fa-envelope-o"></i>
                        </form>
                    </div>
                </div>
            </div><!-- end container -->
        </div><!-- end copyrights -->
    </div>
