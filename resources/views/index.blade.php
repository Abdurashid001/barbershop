<x-layout.main>
    <x-slot:title>
        index
    </x-slot:title>

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>

        <div id="home" class="parallax first-section" data-stellar-background-ratio="0.4"
             style="background-image:url('uploads/barber_slider.jpg');">
            <div class="container-fluid">
                <div class="row">
                    <div id="full-width" class="owl-carousel owl-theme">
                        <div class="text-center item">
                            <div class="col-md-8 col-md-offset-2 col-sm-12">
                                <div class="big-tagline text-center">
                                    <h2><strong>The Barber Shop</strong><br>
                                        in New York</h2>
                                    <p class="lead">With SMBarber responsive landing page template, you can showcase
                                        your next barber shop websites!</p>
                                    <a href="{{ route('appointment') }}" class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">APPOINTMENT
                                        NOW</a>
                                </div>
                            </div>
                        </div>
                        <div class="text-center item">
                            <div class="col-md-8 col-md-offset-2 col-sm-12">
                                <div class="big-tagline text-center">
                                    <h2><strong>The Barber Shop</strong><br>
                                        in New York</h2>
                                    <p class="lead">With SMBarber responsive landing page template, you can showcase
                                        your next barber shop websites!</p>
                                    <a href="{{ route('appointment') }}" class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">APPOINTMENT
                                        NOW</a>
                                </div>
                            </div>
                        </div>
                        <div class="text-center item">
                            <div class="col-md-8 col-md-offset-2 col-sm-12">
                                <div class="big-tagline text-center">
                                    <h2><strong>The Barber Shop</strong><br>
                                        in New York</h2>
                                    <p class="lead">With SMBarber responsive landing page template, you can showcase
                                        your next barber shop websites!</p>
                                    <a href="{{ route('appointment') }}" class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">APPOINTMENT
                                        NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->

        <section class="section nopad cac text-center">
            <a href="#"><h3>Interesting our awesome barber services? Just drop an appointment form below!</h3></a>
        </section>

        <x-layout.about_barbershop>
        </x-layout.about_barbershop>

        <x-layout.our_barbers>
        </x-layout.our_barbers>

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

