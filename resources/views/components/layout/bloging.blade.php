<div id="services" class="section lb">
    <div class="container-fluid">
        <div class="section-title row text-center">
            <div class="col-md-8 col-md-offset-2">
                <small>WELCOME TO THE OUR BARBER SHOP</small>
                <h3>OUR SERVICES</h3>
                <hr class="grd1">
                <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula
                    enim,
                    non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
            </div>
        </div><!-- end title -->
        <div class="row">
            <div class="col-md-6">
                @foreach($services as $service)
                    <div class="service-wrap clearfix">
                        <img src="uploads/barber_service_01.jpg" alt=""
                             class="img-responsive img-rounded alignleft">
                        <h4>{{ $service -> service_name }}</h4>
                        <p>{{ $service->about_service }}</p>
                    </div><!-- end issue -->
                @endforeach
            </div>
        </div>
    </div>
</div>
