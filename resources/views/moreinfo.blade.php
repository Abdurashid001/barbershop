<x-layout.main>
    <x-slot:title>
        More info
    </x-slot:title>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
            <div class="message-box">
                <p></p>
                <h4>About</h4>
                <h2>Welcome to SMBarber</h2>
                <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula
                    enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim. Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus
                    faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque
                    penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vitae rutrum
                    neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum
                    risus. Phasellus et congue justo.</p>

                <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus
                    faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque
                    penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vitae rutrum
                    neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum
                    risus. Phasellus et congue justo.
                    Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus
                    faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque
                    penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vitae rutrum
                    neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum
                    risus. Phasellus et congue justo.
                    Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus
                    faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque
                    penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vitae rutrum
                    neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum
                    risus.</p>

            </div><!-- end messagebox -->
        </div><!-- end col -->
    </div><!-- end row -->

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

