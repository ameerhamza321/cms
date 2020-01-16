@extends('frontend._partial._master')

@section('main_content')

@include('frontend._partial.breadcrumb')


<!--Add listing-->
<section class="sptb">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12">
                <!--Add lists-->
                <div class="row">
                    @foreach($articles as $article)
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card overflow-hidden">

                            <div class="row no-gutters blog-list">
                                @if($article->image_url)
                                <div class="col-xl-4 col-lg-12 col-md-12">
                                    <div class="item7-card-img">
                                        <a href="classified.html"></a>
                                        <img src="{{ $article->image_url }}" alt="img" class="cover-image">
                                    </div>
                                </div>
                                @endif
                                <div class="col-xl-8 col-lg-12 col-md-12">
                                    <div class="card-body">
                                        <div class="item7-card-desc d-flex mb-1">
                                            <a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>{{ $article->date }}</a>
                                            <a href="#"><i class="fa fa-user text-muted mr-2"></i>{{$article->user->name}}</a>
                                            <div class="ml-auto">
                                                <a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>4 Comments</a>
                                            </div>
                                        </div>
                                        <a href="{{ route('view_article', $article->id ) }}" class="text-dark"><h4 class="font-weight-semibold mb-3">{{ $article->title }}</h4></a>
                                        <p class="mb-1">{!! Str::words($article->description, 20, '.....') !!}</p>
                                        <a href="{{ route('view_article', $article->id ) }}" class="btn btn-primary btn-sm mt-4">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="center-block text-center">
                    {{ $articles->links() }}
                </div>
                <!--/Add lists-->
            </div>

            <!--Right Side Content-->
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control br-tl-3  br-bl-3" placeholder="Search">
                            <div class="input-group-append ">
                                <button type="button" class="btn btn-primary br-tr-3  br-br-3">
                                    Search
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Categories</h3>
                    </div>
                    <div class="card-body p-0">
                        <div class="list-catergory">
                            <div class="item-list">
                                <ul class="list-group mb-0">
                                    <li class="list-group-item">
                                        <a href="#" class="text-dark">
                                            <i class="fa fa-building bg-primary text-primary"></i> Real Estate
                                            <span class="badgetext badge badge-pill badge-light mb-0 mt-1">14</span>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="text-dark">
                                            <i class="fa fa-bed bg-success text-success"></i> Hostel & Travels
                                            <span class="badgetext badge badge-pill badge-light mb-0 mt-1">63</span>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="text-dark">
                                            <i class="fa fa-heartbeat bg-info text-info"></i> Health & Fitness
                                            <span class="badgetext badge badge-pill badge-light mb-0 mt-1">25</span>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="text-dark">
                                            <i class="fa fa-cutlery bg-warning text-warning"></i> Restaurant
                                            <span class="badgetext badge badge-pill badge-light mb-0 mt-1">74</span>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="text-dark">
                                            <i class="fa fa-laptop bg-danger text-danger"></i> Computer
                                            <span class="badgetext badge badge-pill badge-light mb-0 mt-1">18</span>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="text-dark">
                                            <i class="fa fa-mobile bg-blue text-blue"></i> Mobile
                                            <span class="badgetext badge badge-pill badge-light mb-0 mt-1">32</span>
                                        </a>
                                    </li>
                                    <li class="list-group-item border-bottom-0">
                                        <a href="#" class="text-dark">
                                            <i class="fa fa-pencil-square  bg-secondary text-pink"></i> Education
                                            <span class="badgetext badge badge-pill badge-light mb-0 mt-1">08</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Popular Tags</h3>
                    </div>
                    <div class="card-body">
                        <div class="product-tags clearfix">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#">RealEstate</a></li>
                                <li><a href="#">Vehicles</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Health& Beauty</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Restaurant</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Automobiles</a></li>
                                <li><a href="#">Computer</a></li>
                                <li><a href="#" class="mb-0">Electronics</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card mb-0">
                    <div class="card-header">
                        <h3 class="card-title">Blog Authors</h3>
                    </div>
                    <div class="card-body p-0">
                        <ul class="vertical-scroll">
                            <li class="item2">
                                <div class="footerimg d-flex mt-0 mb-0">
                                    <div class="d-flex footerimg-l mb-0">
                                        <img src="../assets/images/faces/female/18.jpg" alt="image" class="avatar brround  mr-2">
                                        <a href="#" class="time-title p-0 leading-normal mt-2">Boris	Nash <i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></a>
                                    </div>
                                    <div class="mt-2 footerimg-r ml-auto">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Articles"><span class="text-muted mr-2"><i class="fa fa-comment-o"></i> 16</span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 36</span></a>
                                    </div>
                                </div>
                            </li>
                            <li class="item2">
                                <div class="footerimg d-flex mt-0 mb-0">
                                    <div class="d-flex footerimg-l mb-0">
                                        <img src="../assets/images/faces/female/10.jpg" alt="image" class="avatar brround  mr-2">
                                        <a href="#" class="time-title p-0 leading-normal mt-2">Lorean Mccants <i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></a>
                                    </div>
                                    <div class="mt-2 footerimg-r ml-auto">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Articles"><span class="text-muted mr-2"><i class="fa fa-comment-o"></i> 43</span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 23</span></a>
                                    </div>
                                </div>
                            </li>
                            <li class="item2">
                                <div class="footerimg d-flex mt-0 mb-0">
                                    <div class="d-flex footerimg-l mb-0">
                                        <img src="../assets/images/faces/male/18.jpg" alt="image" class="avatar brround  mr-2">
                                        <a href="#" class="time-title p-0 leading-normal mt-2">Dewitt Hennessey <i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></a>
                                    </div>
                                    <div class="mt-2 footerimg-r ml-auto">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Articles"><span class="text-muted mr-2"><i class="fa fa-comment-o"></i> 34</span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 12</span></a>
                                    </div>
                                </div>
                            </li>
                            <li class="item2">
                                <div class="footerimg d-flex mt-0 mb-0">
                                    <div class="d-flex footerimg-l mb-0">
                                        <img src="../assets/images/faces/male/8.jpg" alt="image" class="avatar brround  mr-2">
                                        <a href="#" class="time-title p-0 leading-normal mt-2">Archie Overturf <i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></a>
                                    </div>
                                    <div class="mt-2 footerimg-r ml-auto">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Articles"><span class="text-muted mr-2"><i class="fa fa-comment-o"></i> 12</span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 32</span></a>
                                    </div>
                                </div>
                            </li>
                            <li class="item2">
                                <div class="footerimg d-flex mt-0 mb-0">
                                    <div class="d-flex footerimg-l mb-0">
                                        <img src="../assets/images/faces/female/21.jpg" alt="image" class="avatar brround  mr-2">
                                        <a href="#" class="time-title p-0 leading-normal mt-2">Barbra Flegle <i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></a>
                                    </div>
                                    <div class="mt-2 footerimg-r ml-auto">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Articles"><span class="text-muted mr-2"><i class="fa fa-comment-o"></i> 21</span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 32</span></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/Right Side Content-->
        </div>
    </div>
</section>
<!--All Listing-->

<!-- Newsletter-->
<section class="sptb bg-white border-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-xl-6 col-md-12">
                <div class="sub-newsletter">
                    <h3 class="mb-2"><i class="fa fa-paper-plane-o mr-2"></i> Subscribe To Our Newsletter</h3>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                </div>
            </div>
            <div class="col-lg-5 col-xl-6 col-md-12">
                <div class="input-group sub-input mt-1">
                    <input type="text" class="form-control input-lg " placeholder="Enter your Email">
                    <div class="input-group-append ">
                        <button type="button" class="btn btn-primary btn-lg br-tr-3  br-br-3">
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Newsletter-->

@endsection
