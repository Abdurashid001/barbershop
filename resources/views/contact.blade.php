<x-layout.main>
    <x-slot:title>
        contact
    </x-slot:title>
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>

        <div class="all-page-bar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="title title-1 text-center">
                            <div class="title--heading">
                                <h1>Contact</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb">
                                <li><a href="index-3.html">Home</a></li>
                                <li class="active">Contact</li>
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

        <div id="contact" class="section wb">
            <div class="container-fluid">
                <div class="section-title row text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <small>LET'S MAKE AN CONTACT FOR YOUR LIFE</small>
                        <h3>Contact</h3>
                        <hr class="grd1">
                        <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim,
                            non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
                    </div>
                </div><!-- end title -->

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="contact_form">
                            <div id="message"></div>
                            <form action={{ route('contacting') }} method="post">
                                @csrf
                                <fieldset class="row-fluid">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="first_name" class="form-control"
                                               placeholder="First Name">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="last_name" class="form-control"
                                               placeholder="Last Name">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" name="phone" class="form-control"
                                               placeholder="Your Phone">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                        <button type="submit" value="SEND" id="submit"
                                                class="btn btn-light btn-radius btn-brd grd1 btn-block subt">Submit
                                        </button>
                                    </div>
                                </fieldset>
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->
    </div>

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
