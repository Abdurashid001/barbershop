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
<h2><strong>The Barber Shop</strong><br>
    Admin page</h2>
<div id="page-content-wrapper">
    <a href="#menu-toggle" class="menuopener"><i class="fa fa-bars"></i></a>

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <h2><strong>Create Barber</strong></h2>
    <form action="{{ route('addbarber') }}" method="post">
        @csrf
        <fieldset class="row-fluid">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <input type="file" name="img" class="form-control"
                       placeholder="Image">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="name_barber" class="form-control"
                       placeholder="Barber Name">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="profession" class="form-control"
                       placeholder="Profession">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="about_barber" class="form-control"
                       placeholder="About Barber">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <button type="submit">Create Barber</button>
            </div>
        </fieldset>
    </form>

    <h2><strong>Create Service</strong></h2>
    <form action="{{ route('addservice') }}" method="post">
        @csrf
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <input type="text" name="service_name" class="form-control"
                   placeholder="Service Name">
        </div>
        <fieldset class="row-fluid">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <input type="file" name="service_img" class="form-control"
                       placeholder="Image">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="about_service" class="form-control"
                       placeholder="About Service">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <button type="submit">Create Service</button>
            </div>
        </fieldset>
    </form>
{{--    <h2><strong>Our Work</strong></h2>--}}
{{--    <form action="{{ route('addwork') }}" method="post">--}}
{{--        @csrf--}}
{{--        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
{{--            <input type="file" name="work_img" class="form-control"--}}
{{--                   placeholder="Our Work Image">--}}
{{--        </div>--}}
{{--        <fieldset class="row-fluid">--}}
{{--            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
{{--                <input type="text" name="title" class="form-control"--}}
{{--                       placeholder="Title">--}}
{{--            </div>--}}

{{--            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
{{--                <input type="text" name="about_work" class="form-control"--}}
{{--                       placeholder="Content Of Work">--}}
{{--            </div>--}}
{{--            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">--}}
{{--                <button type="submit">Create Work</button>--}}
{{--            </div>--}}
{{--        </fieldset>--}}
{{--    </form>--}}
    <script src="js/all.js"></script>
    <script src="js/responsive-tabs.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

    <!-- Menu Toggle Script -->
    <script>
        (function ($) {
            "use strict";
            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
            smoothScroll.init({
                selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
                selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
                speed: 500, // Integer. How fast to complete the scroll in milliseconds
                easing: 'easeInOutCubic', // Easing pattern to use
                offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
                callback: function (anchor, toggle) {
                } // Function to run after scrolling
            });
        })(jQuery);
    </script>

