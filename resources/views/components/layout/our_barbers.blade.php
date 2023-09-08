<div id="barbers" class="section lb">
    <div class="container-fluid">
        <div class="section-title row text-center">
            <div class="col-md-8 col-md-offset-2">
                <small>MEET OUR BABRER TEAM</small>
                <h3>OUR BARBERS</h3>
                <hr class="grd1">
                <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim,
                    non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
            </div>
        </div><!-- end title -->

        <div class="row dev-list text-center">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s"
                 data-wow-delay="0.2s">
                @foreach($barbers as $barber)
                    <div class="widget clearfix">
                        <div class="hover-br">
                            <img src="uploads/barber_team_01.jpg" alt="" class="img-responsive">
                            <div class="social-up-hover">
                                <div class="footer-social">
                                    <a href="#" class="btn grd1"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#" class="btn grd1"><i class="fa-solid fa-phone"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="widget-title">
                            <h3>{{ $barber->name_barber }}</h3>
                            <small>{{ $barber->profession }}</small>
                        </div>
                        <!-- end title -->
                        <p>H{{ $barber->about_barber }}</p>
                    </div><!--widget -->
                @endforeach
            </div><!-- end col -->

        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->
