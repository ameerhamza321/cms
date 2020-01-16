@extends('frontend._partial._master')
@section('main_content')

    <!--Sliders Section-->
    <section>
        <div class="banner-1 cover-image sptb-2 sptb-tab bg-background2" data-image-src="../assets/images/banners/banner1.jpg">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white mb-7">
                        <h1 class="mb-1">Find Your Best Classified</h1>
                        <p>It is a long established fact that a reader will be distracted by the readable.</p>
                    </div>
                    <div class="row">
                        <div class="col-xl-10 col-lg-12 col-md-12 d-block mx-auto">
                            <div class="search-background bg-transparent">
                                <div class="form row no-gutters ">
                                    <div class="form-group  col-xl-4 col-lg-3 col-md-12 mb-0 bg-white ">
                                        <input type="text" class="form-control input-lg br-tr-md-0 br-br-md-0" id="text4" placeholder="Job Title or Phrase or Keywords">
                                    </div>
                                    <div class="form-group  col-xl-3 col-lg-3 col-md-12 mb-0 bg-white">
                                        <input type="text" class="form-control input-lg br-md-0" id="text5" placeholder="Enter Location">
                                        <span><i class="fa fa-map-marker location-gps mr-1"></i></span>
                                    </div>
                                    <div class="form-group col-xl-3 col-lg-3 col-md-12 select2-lg  mb-0 bg-white">
                                        <select class="form-control select2-show-search  border-bottom-0" data-placeholder="Select Category">
                                            <optgroup label="Categories">
                                                <option>Select</option>
                                                <option value="1">Private</option>
                                                <option value="2">Software</option>
                                                <option value="3">Banking</option>
                                                <option value="4">Finaces</option>
                                                <option value="5">Corporate</option>
                                                <option value="6">Driver</option>
                                                <option value="7">Sales</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-xl-2 col-lg-3 col-md-12 mb-0">
                                        <a href="#" class="btn btn-lg btn-block btn-primary br-tl-md-0 br-bl-md-0">Search Here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /header-text -->
        </div>
    </section>
    <!--Sliders Section-->

    <!--Categories-->
    <section class="categories">
        <div class="container">
            <div id="small-categories" class="owl-carousel owl-carousel-icons2">
                <div class="item">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="classifieds-list.html"></a>
                                <div class="cat-img">
                                    <img src="../assets/images/products/categories/loan.png" alt="img">
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-1">Real Estate</h5>
                                    <small class="badge badge-pill badge-primary mr-2">45</small><span class="text-muted">ads are posted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="classifieds-list.html"></a>
                                <div class="cat-img">
                                    <img src="../assets/images/products/categories/dress.png" alt="img">
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-1">Clothing</h5>
                                    <small class="badge badge-pill badge-primary mr-2">32</small><span class="text-muted">ads are posted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="classifieds-list.html"></a>
                                <div class="cat-img">
                                    <img src="../assets/images/products/categories/store.png" alt="img">
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-1">Restaurant</h5>
                                    <small class="badge badge-pill badge-primary mr-2">19</small><span class="text-muted">ads are posted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="classifieds-list.html"></a>
                                <div class="cat-img text-shadow1">
                                    <img src="../assets/images/products/categories/delivery-truck.png" alt="img">
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-1">Vehicle</h5>
                                    <small class="badge badge-pill badge-primary mr-2">25</small><span class="text-muted">ads are posted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="classifieds-list.html"></a>
                                <div class="cat-img">
                                    <img src="../assets/images/products/categories/call-center.png" alt="img">
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-1">Services</h5>
                                    <small class="badge badge-pill badge-primary mr-2">23</small><span class="text-muted">ads are posted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="classifieds-list.html"></a>
                                <div class="cat-img">
                                    <img src="../assets/images/products/categories/makeover.png" alt="img">
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-1">Beauty</h5>
                                    <small class="badge badge-pill badge-primary mr-2">52</small><span class="text-muted">ads are posted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="classifieds-list.html"></a>
                                <div class="cat-img">
                                    <img src="../assets/images/products/categories/graduation.png" alt="img">
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-1">Education </h5>
                                    <small class="badge badge-pill badge-primary mr-2">46</small><span class="text-muted">ads are posted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="classifieds-list.html"></a>
                                <div class="cat-img">
                                    <img src="../assets/images/products/categories/workspace.png" alt="img">
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-1">Computer</h5>
                                    <small class="badge badge-pill badge-primary mr-2">22</small><span class="text-muted">ads are posted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="classifieds-list.html"></a>
                                <div class="cat-img">
                                    <img src="../assets/images/products/categories/sketch.png" alt="img">
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-1">Construction</h5>
                                    <small class="badge badge-pill badge-primary mr-2">31</small><span class="text-muted">ads are posted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="classifieds-list.html"></a>
                                <div class="cat-img">
                                    <img src="../assets/images/products/categories/furniture.png" alt="img">
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-1">Furnitures</h5>
                                    <small class="badge badge-pill badge-primary mr-2">12</small><span class="text-muted">ads are posted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="classifieds-list.html"></a>
                                <div class="cat-img">
                                    <img src="../assets/images/products/categories/electronics.png" alt="img">
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-1">Electronics</h5>
                                    <small class="badge badge-pill badge-primary mr-2">21</small><span class="text-muted">ads are posted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="classifieds-list.html"></a>
                                <div class="cat-img">
                                    <img src="../assets/images/products/categories/heart.png" alt="img">
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-1">Health</h5>
                                    <small class="badge badge-pill badge-primary mr-2">24</small><span class="text-muted">ads are posted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Categories-->

    <!--Latest Ads-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Latest Ads</h2>
                <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
            </div>
            <div id="myCarousel1" class="owl-carousel owl-carousel-icons2">
                <div class="item">
                    <div class="card mb-0">
                        <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                        <div class="item-card2-img">
                            <a href="classified.html"></a>
                            <img src="../assets/images/products/products/f1.jpg" alt="img" class="cover-image">
                        </div>
                        <div class="item-card2-icons">
                            <a href="classified.html" class="item-card2-icons-l bg-primary"> <i class="fa fa-cutlery"></i></a>
                            <a href="#" class="item-card2-icons-r bg-secondary"><i class="fa fa fa-heart-o"></i></a>
                        </div>
                        <div class="card-body pb-0">
                            <div class="item-card2">
                                <div class="item-card2-desc">
                                    <div class="item-card2-text">
                                        <a href="classified.html" class="text-dark"><h4 class="mb-0">Somik Restaurant</h4></a>
                                    </div>
                                    <div class="d-flex">
                                        <a href="">
                                            <p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i>Florida, USA</p>
                                        </a>
                                        <span class="ml-3 pb-0 pt-0 mb-2 mt-2">$200.00</span>
                                    </div>
                                    <p class="">Ut enim ad minima veniam, quis int nostrum exercitationem </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="item-card2-footer">
                                <div class="item-card2-footer-u">
                                    <div class="row d-flex">
                                        <span class="review_score mr-2 badge badge-primary">4.0/5</span>
                                        <div class="rating-stars d-inline-flex">
                                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
                                            <div class="rating-stars-container">
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div> (5 Reviews)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                        <div class="item-card2-img">
                            <a href="classified.html"></a>
                            <img src="../assets/images/products/products/h4.jpg" alt="img" class="cover-image">
                        </div>
                        <div class="item-card2-icons">
                            <a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-home"></i></a>
                            <a href="#" class="item-card2-icons-r bg-secondary"><i class="fa fa fa-heart-o"></i></a>
                        </div>
                        <div class="card-body pb-0">
                            <div class="item-card2">
                                <div class="item-card2-desc">
                                    <div class="item-card2-text">
                                        <a href="classified.html" class="text-dark"><h4 class="mb-0">GilkonStar Hotel</h4></a>
                                    </div>
                                    <div class="d-flex pb-0 pt-0">
                                        <a href="">
                                            <p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i>Florida, Uk</p>
                                        </a>
                                        <span class="ml-3 pb-0 pt-0 mb-2 mt-2">$200.00</span>
                                    </div>
                                    <p class="">Ut enim ad minima veniam, quis int nostrum exercitationem </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="item-card2-footer ">
                                <div class="item-card2-footer-u">
                                    <div class="row d-flex">
                                        <span class="review_score mr-2 badge badge-primary">4.0/5</span>
                                        <div class="rating-stars d-inline-flex">
                                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
                                            <div class="rating-stars-container">
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div> (5 Reviews)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card2-img">
                            <a href="classified.html"></a>
                            <img src="../assets/images/products/products/b1.jpg" alt="img" class="cover-image">
                        </div>
                        <div class="item-card2-icons">
                            <a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-paint-brush"></i></a>
                            <a href="#" class="item-card2-icons-r bg-secondary"><i class="fa fa fa-heart-o"></i></a>
                        </div>
                        <div class="card-body pb-0">
                            <div class="item-card2">
                                <div class="item-card2-desc">
                                    <div class="item-card2-text">
                                        <a href="classified.html" class="text-dark"><h4 class="mb-0">Sear Beauty & Spa</h4></a>
                                    </div>
                                    <div class="d-flex pb-0 pt-0">
                                        <a href="">
                                            <p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i>Florida, Uk</p>
                                        </a>
                                        <span class="ml-3 pb-0 pt-0 mb-2 mt-2">$200.00</span>
                                    </div>
                                    <p class="">Ut enim ad minima veniam, quis int nostrum exercitationem </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="item-card2-footer">
                                <div class="item-card2-footer-u">
                                    <div class="row d-flex">
                                        <span class="review_score mr-2 badge badge-primary">4.0/5</span>
                                        <div class="rating-stars d-inline-flex">
                                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
                                            <div class="rating-stars-container">
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div> (5 Reviews)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">Urgent</span></div>
                        <div class="item-card2-img">
                            <a href="classified.html"></a>
                            <img src="../assets/images/products/products/v1.jpg" alt="img" class="cover-image">
                        </div>
                        <div class="item-card2-icons">
                            <a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-car"></i></a>
                            <a href="#" class="item-card2-icons-r bg-secondary"><i class="fa fa fa-heart-o"></i></a>
                        </div>
                        <div class="card-body pb-0">
                            <div class="item-card2">
                                <div class="item-card2-desc">
                                    <div class="item-card2-text">
                                        <a href="classified.html" class="text-dark"><h4 class="mb-0">Seep Automobiles</h4></a>
                                    </div>
                                    <div class="d-flex pb-0 pt-0">
                                        <a href="">
                                            <p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i>Florida, Uk</p>
                                        </a>
                                        <span class="ml-3 pb-0 pt-0 mb-2 mt-2">$200.00</span>
                                    </div>
                                    <p class="">Ut enim ad minima veniam, quis int nostrum exercitationem </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="item-card2-footer">
                                <div class="item-card2-footer-u">
                                    <div class="row d-flex">
                                        <span class="review_score mr-2 badge badge-primary">4.0/5</span>
                                        <div class="rating-stars d-inline-flex">
                                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
                                            <div class="rating-stars-container">
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div> (5 Reviews)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                        <div class="item-card2-img">
                            <a href="classified.html"></a>
                            <img src="../assets/images/products/products/f3.jpg" alt="img" class="cover-image">
                        </div>
                        <div class="item-card2-icons">
                            <a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-cutlery"></i></a>
                            <a href="#" class="item-card2-icons-r bg-secondary"><i class="fa fa fa-heart-o"></i></a>
                        </div>
                        <div class="card-body pb-0">
                            <div class="item-card2">
                                <div class="item-card2-desc">
                                    <div class="item-card2-text">
                                        <a href="classified.html" class="text-dark"><h4 class="mb-0">Somik Restaurant</h4></a>
                                    </div>
                                    <div class="d-flex pb-0 pt-0">
                                        <a href="">
                                            <p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i>Florida, Uk</p>
                                        </a>
                                        <span class="ml-3 pb-0 pt-0 mb-2 mt-2">$200.00</span>
                                    </div>
                                    <p class="">Ut enim ad minima veniam, quis int nostrum exercitationem </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="item-card2-footer">
                                <div class="item-card2-footer-u">
                                    <div class="row d-flex">
                                        <span class="review_score mr-2 badge badge-primary">4.0/5</span>
                                        <div class="rating-stars d-inline-flex">
                                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
                                            <div class="rating-stars-container">
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div> (5 Reviews)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Latest Ads-->

    <!--Featured Ads-->
    <section class="sptb bg-patterns">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Featured Ads</h2>
                <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
            </div>
            <div id="myCarousel2" class="owl-carousel owl-carousel-icons2">
                <!-- Wrapper for carousel items -->

                <div class="item">
                    <div class="card mb-0">
                        <div class="arrow-ribbon bg-danger">sale</div>
                        <div class="item-card7-imgs">
                            <a href="classified.html"></a>
                            <img src="../assets/images/products/products/b3.jpg" alt="img" class="cover-image">
                        </div>
                        <div class="item-card7-overlaytext">
                            <a href="classified.html" class="text-white"> Beauty & Spa </a>
                            <h4  class="mb-0">$398.99</h4>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text">
                                    <a href="classified.html" class="text-dark"><h4 class="">Golik Beauty & Spa</h4></a>
                                </div>
                                <ul class="item-cards7-ic mb-0">
                                    <li><a href="#"><span class="text-muted"><i class="icon icon-eye mr-1"></i> 22 Views</span></a></li>
                                    <li><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i> USA</a></li>
                                    <li><a href="#" class="icons"><i class="icon icon-event text-muted mr-1"></i> 5 hours ago</a></li>
                                    <li><a href="#" class="icons"><i class="icon icon-phone text-muted mr-1"></i> 14 675 65430</a></li>
                                </ul>
                                <p class="mb-0">Omnis iste natus error sit dolore dg voluptatem accusantium</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="footerimg d-flex mt-0 mb-0">
                                <div class="d-flex footerimg-l mb-0">
                                    <img src="../assets/images/faces/female/17.jpg" alt="image" class="avatar brround  mr-2">
                                    <h5 class="time-title text-muted p-0 leading-normal mt-2 mb-0">Victoria<i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="verified"></i></h5>
                                </div>
                                <div class="mt-2 footerimg-r ml-auto">
                                    <a href="#" class="text-pink" data-toggle="tooltip" data-placement="top" title="Remove from Wishlist"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="arrow-ribbon bg-primary">sale</div>
                        <div class="item-card7-imgs">
                            <a href="classified.html"></a>
                            <img src="../assets/images/products/products/h3.jpg" alt="img" class="cover-image">
                        </div>
                        <div class="item-card7-overlaytext">
                            <a href="classified.html" class="text-white"> RealEstate</a>
                            <h4  class="mb-0">$752.99</h4>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text">
                                    <a href="classified.html" class="text-dark"><h4 class="">2Bk Deluxe Flat</h4></a>
                                </div>
                                <ul class="item-cards7-ic mb-0">
                                    <li><a href="#"><span class="text-muted"><i class="icon icon-eye mr-1"></i> 22 Views</span></a></li>
                                    <li><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i> USA</a></li>
                                    <li><a href="#" class="icons"><i class="icon icon-event text-muted mr-1"></i> 5 hours ago</a></li>
                                    <li><a href="#" class="icons"><i class="icon icon-phone text-muted mr-1"></i> 14 675 65430</a></li>
                                </ul>
                                <p class="mb-0">Omnis iste natus error sit dolore dg voluptatem accusantium</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="footerimg d-flex mt-0 mb-0">
                                <div class="d-flex footerimg-l mb-0">
                                    <img src="../assets/images/faces/male/17.jpg" alt="image" class="avatar brround  mr-2">
                                    <h5 class="time-title text-muted p-0 leading-normal mt-2 mb-0">Christopher<i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="verified"></i></h5>
                                </div>
                                <div class="mt-2 footerimg-r ml-auto">
                                    <a href="#" class="text-muted" data-toggle="tooltip" data-placement="top" title="Add Wishlist"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="arrow-ribbon bg-purple">sale</div>
                        <div class="item-card7-imgs">
                            <a href="classified.html"></a>
                            <img src="../assets/images/products/products/v4.jpg" alt="img" class="cover-image">
                        </div>
                        <div class="item-card7-overlaytext">
                            <a href="classified.html" class="text-white"> Vehicle</a>
                            <h4  class="mb-0">$786.00</h4>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text">
                                    <a href="classified.html" class="text-dark"><h4 class="">Gittbo AutoMobiles</h4></a>
                                </div>
                                <ul class="item-cards7-ic mb-0">
                                    <li><a href="#"><span class="text-muted"><i class="icon icon-eye mr-1"></i> 22 Views</span></a></li>
                                    <li><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i> USA</a></li>
                                    <li><a href="#" class="icons"><i class="icon icon-event text-muted mr-1"></i> 5 hours ago</a></li>
                                    <li><a href="#" class="icons"><i class="icon icon-phone text-muted mr-1"></i> 14 675 65430</a></li>
                                </ul>
                                <p class="mb-0">Omnis iste natus error sit dolore dg voluptatem accusantium</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="footerimg d-flex mt-0 mb-0">
                                <div class="d-flex footerimg-l mb-0">
                                    <img src="../assets/images/faces/male/18.jpg" alt="image" class="avatar brround  mr-2">
                                    <h5 class="time-title text-muted p-0 leading-normal mt-2 mb-0">Wendy	Peake<i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="verified"></i></h5>
                                </div>
                                <div class="mt-2 footerimg-r ml-auto">
                                    <a href="#" class="text-muted" data-toggle="tooltip" data-placement="top" title="Add Wishlist"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="arrow-ribbon bg-success">Open</div>
                        <div class="item-card7-imgs">
                            <a href="classified.html"></a>
                            <img src="../assets/images/products/products/f2.jpg" alt="img" class="cover-image">
                        </div>
                        <div class="item-card7-overlaytext">
                            <a href="classified.html" class="text-white"> Restaurant</a>
                            <h4  class=" fs-20 mb-0">$86.00</h4>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text">
                                    <a href="classified.html" class="text-dark"><h4 class="">Chinese Restaurant</h4></a>
                                </div>
                                <ul class="item-cards7-ic mb-0">
                                    <li><a href="#"><span class="text-muted"><i class="icon icon-eye mr-1"></i> 12 Views</span></a></li>
                                    <li><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i> UK</a></li>
                                    <li><a href="#" class="icons"><i class="icon icon-event text-muted mr-1"></i> 1 hours ago</a></li>
                                    <li><a href="#" class="icons"><i class="icon icon-phone text-muted mr-1"></i> 14 675 65430</a></li>
                                </ul>
                                <p class="mb-0">Omnis iste natus error sit dolore dg voluptatem accusantium</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="footerimg d-flex mt-0 mb-0">
                                <div class="d-flex footerimg-l mb-0">
                                    <img src="../assets/images/faces/female/12.jpg" alt="image" class="avatar brround  mr-2">
                                    <h5 class="time-title text-muted p-0 leading-normal mt-2 mb-0">Wendy	Peake<i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="verified"></i></h5>
                                </div>
                                <div class="mt-2 footerimg-r ml-auto">
                                    <a href="#" class="text-pink" data-toggle="tooltip" data-placement="top" title="Remove from Wishlist"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="arrow-ribbon bg-secondary">sale</div>
                        <div class="item-card7-imgs">
                            <a href="classified.html"></a>
                            <img src="../assets/images/products/products/j3.jpg" alt="img" class="cover-image">
                        </div>
                        <div class="item-card7-overlaytext">
                            <a href="classified.html" class="text-white"> Beauty</a>
                            <h4  class="font-weight-semibold mb-0">$65.00</h4>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text  d-flex">
                                    <a href="classified.html" class="text-dark"><h4 class="">FrogeBeauty & Spa</h4></a>
                                </div>
                                <ul class="item-cards7-ic mb-0">
                                    <li><a href="#"><span class="text-muted"><i class="icon icon-eye mr-1"></i> 22 Views</span></a></li>
                                    <li><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i> USA</a></li>
                                    <li><a href="#" class="icons"><i class="icon icon-event text-muted mr-1"></i> 5 hours ago</a></li>
                                    <li><a href="#" class="icons"><i class="icon icon-phone text-muted mr-1"></i> 14 675 65430</a></li>
                                </ul>
                                <p class="mb-0">Omnis iste natus error sit dolore dg voluptatem accusantium</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="footerimg d-flex mt-0 mb-0">
                                <div class="d-flex footerimg-l mb-0">
                                    <img src="../assets/images/faces/female/19.jpg" alt="image" class="avatar brround  mr-2">
                                    <h5 class="time-title text-muted p-0 leading-normal mt-2 mb-0">Elizabeth<i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="verified"></i></h5>
                                </div>
                                <div class="mt-2 footerimg-r ml-auto">
                                    <a href="classified.html" class="text-muted" data-toggle="tooltip" data-placement="top" title="Add Wishlist"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Featured Ads-->

    <!--Statistics-->
    <section>
        <div class="about-1 cover-image sptb bg-background-color" data-image-src="../assets/images/banners/banner5.jpg">
            <div class="content-text mb-0 text-white info">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status md-mb-0">
                                <div class="counter-icon">
                                    <i class="icon icon-people"></i>
                                </div>
                                <h5>Clients</h5>
                                <h2 class="counter mb-0">2569</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status status-1 md-mb-0">
                                <div class="counter-icon text-warning">
                                    <i class="icon icon-rocket"></i>
                                </div>
                                <h5>Total Sales</h5>
                                <h2 class="counter mb-0">1765</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status status md-mb-0">
                                <div class="counter-icon text-primary">
                                    <i class="icon icon-docs"></i>
                                </div>
                                <h5>Total Projects</h5>
                                <h2 class="counter mb-0">846</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status status">
                                <div class="counter-icon text-success">
                                    <i class="icon icon-emotsmile"></i>
                                </div>
                                <h5>Happy Customers</h5>
                                <h2 class="counter">7253</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Statistics-->

    <!--Locations-->
    <section class="sptb">
        <div class="container">
            <div class="col-md-12">
                <div class="items-gallery">
                    <div class="items-blog-tab text-center">
                        <h2 class="">Latest News</h2>
                        <div class="items-blog-tab-heading row">
                            <div class="col-12">
                                <ul class="nav items-blog-tab-menu">
                                    <li class=""><a href="#tab-1" class="active show" data-toggle="tab">All</a></li>
                                    <li><a href="#tab-2" data-toggle="tab" class="">Business</a></li>
                                    <li><a href="#tab-3" data-toggle="tab" class="">Beauty</a></li>
                                    <li><a href="#tab-4" data-toggle="tab" class="">Real Estate</a></li>
                                    <li><a href="#tab-5" data-toggle="tab" class="">Restaurant</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-1">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
											    <span class="ribbon-1">
													<span><i class="fa fa-cutlery"></i></span>
												</span>
                                            <div class="item-card8-img  br-tr-7 br-tl-7">
                                                <img src="../assets/images/products/f2.png" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class=" fs-20 mb-0">Restaurants</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
											    <span class="ribbon-2">
													<span><i class="fa fa-home"></i></span>
												</span>
                                            <div class="item-card8-img  br-tr-7 br-tl-7">
                                                <img src="../assets/images/products/h2.jpg" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary fs-20 mb-0">Real State</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-lg-0">
											    <span class="ribbon-3">
													<span><i class="fa fa-paint-brush"></i></span>
												</span>
                                            <div class="item-card8-img  br-tr-7 br-tl-7">
                                                <img src="../assets/images/products/j1.png" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info fs-20 mb-0">Beauty Spa</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
											    <span class="ribbon-2">
													<span><i class="fa fa-briefcase"></i></span>
												</span>
                                            <div class="item-card8-img  br-tr-7 br-tl-7">
                                                <img src="../assets/images/products/f1.png" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary fs-20 mb-0">Business</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
											    <span class="ribbon-1">
													<span><i class="fa fa-briefcase"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <img src="../assets/images/products/j2.png" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary fs-20 mb-0">Business</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-0">
											    <span class="ribbon-3">
													<span><i class="fa fa-briefcase"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <img src="../assets/images/products/j3.png" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info fs-20 mb-0">Business</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
										    <span class="ribbon-3">
												<span><i class="fa fa-paint-brush"></i></span>
											</span>
                                        <div class="card mb-xl-0">
                                            <div class="item-card8-img  br-tr-7 br-tl-7">
                                                <img src="../assets/images/products/b1.png" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info fs-20 mb-0">Spa</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-0">
											    <span class="ribbon-2">
													<span><i class="fa fa-paint-brush"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <img src="../assets/images/products/b2.png" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary fs-20 mb-0">Spa</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-lg-0">
											    <span class="ribbon-1">
													<span><i class="fa fa-paint-brush"></i></span>
												</span>
                                            <div class="item-card8-img  br-tr-7 br-tl-7">
                                                <img src="../assets/images/products/j1.png" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary fs-20 mb-0">Spa</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
											<span class="ribbon-2">
												<span><i class="fa fa-home"></i></span>
											</span>
                                        <div class="card mb-xl-0">
                                            <div class="item-card8-img  br-tr-7 br-tl-7">
                                                <img src="../assets/images/products/h4.png" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary fs-20 mb-0">Real Estate</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
											    <span class="ribbon-3">
													<span><i class="fa fa-home"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <img src="../assets/images/products/h2.png" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info fs-20 mb-0">Real Estate</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-0">
											    <span class="ribbon-1">
													<span><i class="fa fa-home"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <img src="../assets/images/products/h3.png" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary fs-20 mb-0">Real Estate</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
											    <span class="ribbon-3">
													<span><i class="fa fa-cutlery"></i></span>
												</span>
                                            <div class="item-card8-img  br-tr-7 br-tl-7">
                                                <img src="../assets/images/products/f4.png" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info fs-20 mb-0">Restaurant</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
											    <span class="ribbon-1">
													<span><i class="fa fa-cutlery"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <img src="../assets/images/products/f3.png" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary fs-20 mb-0">Restaurant</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-0">
											    <span class="ribbon-2">
													<span><i class="fa fa-cutlery"></i></span>
												</span>
                                            <div class="item-card8-img">
                                                <img src="../assets/images/products/f2.png" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary fs-20 mb-0">Restaurant</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Locations-->

    <!--Testimonials-->
    <section class="sptb position-relative pattern">
        <div class="container">
            <div class="section-title center-block text-center">
                <h1 class="text-white position-relative">Testimonials</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel" class="owl-carousel testimonial-owl-carousel">
                        <div class="item text-center">
                            <div class="row">
                                <div class="col-xl-8 col-md-12 d-block mx-auto">
                                    <div class="testimonia">
                                        <p class="text-white-80">
                                            <i class="fa fa-quote-left text-white-80"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore cum accusamus eveniet molestias voluptatum inventore laboriosam labore sit, aspernatur praesentium iste impedit quidem dolor veniam.
                                        </p>
                                        <h3 class="title">Elizabeth</h3>
                                        <span class="post">Web Developer</span>
                                        <div class="rating-stars">
                                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
                                            <div class="rating-stars-container">
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-controls clickable">
                                            <div class="owl-pagination">
                                                <div class="owl-page active">
                                                    <span class=""></span>
                                                </div>
                                                <div class="owl-page ">
                                                    <span class=""></span>
                                                </div>
                                                <div class="owl-page">
                                                    <span class=""></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="row">
                                <div class="col-xl-8 col-md-12 d-block mx-auto">
                                    <div class="testimonia">
                                        <p class="text-white-80"><i class="fa fa-quote-left"></i> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore. </p>
                                        <div class="testimonia-data">
                                            <h3 class="title">williamson</h3>
                                            <span class="post">Web Developer</span>
                                            <div class="rating-stars">
                                                <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
                                                <div class="rating-stars-container">
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="owl-controls clickable">
                                                    <div class="owl-pagination">
                                                        <div class="owl-page ">
                                                            <span class=""></span>
                                                        </div>
                                                        <div class="owl-page active">
                                                            <span class=""></span>
                                                        </div>
                                                        <div class="owl-page">
                                                            <span class=""></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="row">
                                <div class="col-xl-8 col-md-12 d-block mx-auto">
                                    <div class="testimonia">
                                        <p class="text-white-80"><i class="fa fa-quote-left"></i> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                        <div class="testimonia-data">
                                            <h3 class="title">Sophie Carr</h3>
                                            <span class="post">Web Developer</span>
                                            <div class="rating-stars">
                                                <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
                                                <div class="rating-stars-container">
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="owl-controls clickable">
                                                    <div class="owl-pagination">
                                                        <div class="owl-page ">
                                                            <span class=""></span>
                                                        </div>
                                                        <div class="owl-page">
                                                            <span class=""></span>
                                                        </div>
                                                        <div class="owl-page active">
                                                            <span class=""></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Testimonials-->

    <!--Blogs-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Best Rated Locations</h2>
                <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-6">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6 col-md-6 ">
                            <div class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <div class="card text-center overflow-hidden">
                                        <div class="card-img">
                                            <img src="../assets/images/locations/germany.jpg" alt="img" class="cover-image">
                                        </div>
                                        <div class="item-card-text">
                                            <h4 class="mb-0">44,327<span><i class="fa fa-map-marker mr-1 text-primary"></i>GERMANY</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6 col-md-6 ">
                            <div class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <div class="card text-center overflow-hidden">
                                        <div class="card-img">
                                            <img src="../assets/images/locations/london.jpg" alt="img" class="cover-image">
                                        </div>
                                        <div class="item-card-text">
                                            <h4 class="mb-0">52,145<span><i class="fa fa-map-marker mr-1 text-primary"></i> LONDON</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6 col-md-6 ">
                            <div class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <div class="card text-center overflow-hidden">
                                        <div class="card-img">
                                            <img src="../assets/images/locations/austerlia.jpg" alt="img" class="cover-image">
                                        </div>
                                        <div class="item-card-text">
                                            <h4 class="mb-0">63,263<span><i class="fa fa-map-marker text-primary mr-1"></i>AUSTERLIA</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6 col-md-6 ">
                            <div class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <div class="card text-center overflow-hidden">
                                        <div class="card-img">
                                            <img src="../assets/images/locations/chicago.jpg" alt="img" class="cover-image">
                                        </div>
                                        <div class="item-card-text">
                                            <h4 class="mb-0">36,485<span><i class="fa fa-map-marker text-primary mr-1"></i>CHICAGO</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xl-6 col-sm-12">
                    <div class="item-card overflow-hidden">
                        <div class="item-card-desc">
                            <div class="card overflow-hidden">
                                <div class="card-img">
                                    <img src="../assets/images/locations/losangels-1.jpg"  alt="img" class="cover-image">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">64,825<span><i class="fa fa-map-marker text-primary mr-1"></i>WASHINGTON</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blogs-->

@endsection
