<x-layout.main>
    <x-slot:title>
        services
    </x-slot:title>
    <body class="barber_version">

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>

        <div class="all-page-bar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="title title-1 text-center">
                            <div class="title--heading">
                                <h1>Our Services</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb">
                                <li><a href="index-3.html">Home</a></li>
                                <li class="active">Our Services</li>
                            </ol>
                            <div class="much">
                                <img src="uploads/mustache.png" alt=""/>
                            </div>
                        </div>
                        <!-- .title end -->
                    </div>
                </div>
            </div>
        </div><!-- end all-page-bar -->

        <section class="section nopad cac text-center">
            <a href="#"><h3>Interesting our awesome barber services? Just drop an appointment form below!</h3></a>
        </section>
        <x-layout.bloging>

        </x-layout.bloging>
        <div class="text-center">
            <a href="{{ route('appointment') }}" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">APPOINTMENT
                NOW</a>
        </div>
    </div><!-- end container -->
    <x-layout.testimonials>
    </x-layout.testimonials>
    <!-- ALL JS FILES -->
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
    </body>
</x-layout.main>
