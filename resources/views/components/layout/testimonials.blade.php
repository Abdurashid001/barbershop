<div id="testimonials" class="parallax section db parallax-off"
     style="background-image:url('uploads/parallax_20.jpg');">
    <div class="container-fluid">
        <div class="section-title row text-center">
            <div class="col-md-8 col-md-offset-2">
                <small>LET'S SEE OUR TESTIMONIALS</small>
                <h3>HAPPY TESTIMONIALS</h3>
                <hr class="grd1">
                <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim,
                    non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="testi-carousel owl-carousel owl-theme">
{{--                    @foreach($comments as $comment)--}}
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i>@{{ $comment -> comment }}</h3>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/avatar.jpg" alt="" class="img-responsive alignright">
                                <h4>James Fernando</h4>
                            </div>
                        </div>
{{--                    @endforeach--}}
                </div><!-- end carousel -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div>
</div>
