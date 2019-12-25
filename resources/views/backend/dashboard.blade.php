@extends('backend._partial._master')

@section('main_content')


    <!-- main content start-->
    <div class="row row-cards">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body text-center feature">
                    <div class="fa-stack fa-lg fa-1x icons shadow-default bg-primary-transparent">
                        <i class="icon icon-people text-primary"></i>
                    </div>
                    <p class="card-text mt-3 mb-3">Total Users</p>
                    <p class="h2 text-center text-primary">3,456</p>
                </div>
            </div>
        </div><!-- COL END -->

        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body text-center feature">
                    <div class="fa-stack fa-lg fa-1x icons shadow-default bg-secondary-transparent">
                        <i class="icon icon-refresh text-secondary"></i>
                    </div>
                    <p class="card-text mt-3 mb-3">Total Updates</p>
                    <p class="h2 text-center text-secondary">2,635</p>
                </div>
            </div>
        </div><!-- COL END -->

        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body text-center feature ">
                    <div class="fa-stack fa-lg fa-1x icons shadow-default bg-info-transparent">
                        <i class="icon icon-speech text-info"></i>
                    </div>
                    <p class="card-text mt-3 mb-3">Total E-mail</p>
                    <p class="h2 text-center text-success-1">245</p>
                </div>
            </div>
        </div><!-- COL END -->

        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body text-center feature">
                    <div class="fa-stack fa-lg icons shadow-default bg-warning-transparent">
                        <i class="icon icon-rocket text-warning"></i>
                    </div>
                    <p class="card-text mt-3 mb-3">Total Posts</p>
                    <p class="h2 text-center text-secondary-1">5,459</p>
                </div>
            </div>
        </div><!-- COL END -->
    </div>
    <!-- main content ends-->

@endsection
