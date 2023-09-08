<x-layout.main>
    <x-slot:title>
        appointment
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
                                <h1>Appointment</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb">
                                <li><a href="index-3.html">Home</a></li>
                                <li class="active">Appointment</li>
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

        <div id="appointment" class="section wb">
            <div class="container-fluid">
                <div class="section-title row text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <small>LET'S MAKE AN APPOINTMENT FOR YOUR LIFE</small>
                        <h3>Book now</h3>
                        <hr class="grd1">
                        <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim,
                            non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
                    </div>
                </div><!-- end title -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="appointment-left">
                            <h2>Opening Time</h2>
                            <div class="appointment-time">
                                <ul>
                                    <li>
                                        <span>Monday </span><span>9am-6pm</span>
                                    </li>
                                    <li>
                                        <span>Tuesday </span><span>9am-6pm</span>
                                    </li>
                                    <li>
                                        <span>Wednesday </span><span>9am-6pm</span>
                                    </li>
                                    <li>
                                        <span>Thursday </span><span>9am-6pm</span>
                                    </li>
                                    <li>
                                        <span>Friday  </span><span>9am-6pm</span>
                                    </li>
                                    <li>
                                        <span>Saturday  </span><span>10am-4pm</span>
                                    </li>
                                    <li>
                                        <span>Sunday  </span><span>CLOSED</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact_form">
                            <div id="message"></div>
                            <form action="{{ route('app') }}" method="post">
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
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" name="email" class="form-control"
                                               placeholder="Your Email">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="phone" class="form-control"
                                               placeholder="Your Phone">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <label class="sr-only">Select Time</label>
                                        <input type="datetime-local" name="select_service">
                                        {{--                                        <select name="select_service"--}}
                                        {{--                                                class="selectpicker form-control" data-style="btn-white">--}}
                                        {{--                                            <option value="selecttime">Today</option>--}}
                                        {{--                                            <option value="Weekdays">Weekdays</option>--}}
                                        {{--                                            <option value="Weekend">Weekend</option>--}}
                                        {{--                                        </select>--}}
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <label class="sr-only">Select Barber</label>
                                        <select name="select_barber"
                                                class="selectpicker form-control" data-style="btn-white">
                                            <option value="Oybek">Oybek</option>
                                            <option value="Sardor">Sardor</option>
                                            <option value="Shaxzod">Shaxzod</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <textarea class="form-control" name="any_details" rows="6"
                                                  placeholder="Give us more details.."></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                        <button type="submit">Get
                                            Appointment
                                        </button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->
        <x-layout.testimonials>
        </x-layout.testimonials>
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
</x-layout.main>
