<!doctype html>
<html lang="en" dir="ltr">

<!--Start Header-->
@include('backend._partial._header')
<!--End Header-->

<body class="app sidebar-mini">
<!--Loader-->
<div id="global-loader">
    <img src="../assets/images/products/products/loader.png" class="loader-img floating" alt="">
</div>
<div class="page">
    <div class="page-main">
        <div class="app-header1 header py-1 d-flex">
            <div class="container-fluid">
                <div class="d-flex">
                    <a class="header-brand" href="index.html">
                        <img src="../assets/images/brand/logo.png" class="header-brand-img" alt="Claylist logo">
                    </a>
                    <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
                    <div class="header-navicon">
                        <a href="#" data-toggle="search" class="nav-link d-lg-none navsearch-icon">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                    <div class="header-navsearch">
                        <a href="#" class=" "></a>
                        <form class="form-inline mr-auto">
                            <div class="nav-search">
                                <input type="search" class="form-control header-search" placeholder="Search…"
                                       aria-label="Search">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex order-lg-2 ml-auto">
                        <div class="dropdown d-none d-md-flex">
                            <a class="nav-link icon full-screen-link">
                                <i class="fe fe-maximize-2" id="fullscreen-button"></i>
                            </a>
                        </div>
                        <!----- select flag ------->
                        <div class="dropdown d-none d-md-flex country-selector">
                            <a href="#" class="d-flex nav-link leading-none" data-toggle="dropdown">
                                <img src="../assets/images/us_flag.jpg" alt="img"
                                     class="avatar avatar-xs mr-1 align-self-center">
                                <div>
                                    <strong class="text-dark">English</strong>
                                </div>
                            </a>
                            <div class="language-width dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <img src="../assets/images/french_flag.jpg" alt="flag-img"
                                         class="avatar  mr-3 align-self-center">
                                    <div>
                                        <strong>French</strong>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <img src="../assets/images/germany_flag.jpg" alt="flag-img"
                                         class="avatar  mr-3 align-self-center">
                                    <div>
                                        <strong>Germany</strong>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <img src="../assets/images/italy_flag.jpg" alt="flag-img"
                                         class="avatar  mr-3 align-self-center">
                                    <div>
                                        <strong>Italy</strong>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <img src="../assets/images/russia_flag.jpg" alt="flag-img"
                                         class="avatar  mr-3 align-self-center">
                                    <div>
                                        <strong>Russia</strong>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <img src="../assets/images/spain_flag.jpg" alt="flag-img"
                                         class="avatar  mr-3 align-self-center">
                                    <div>
                                        <strong>Spain</strong>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!----- select flag end ------->

                        <!----- Notification ------->
                        <div class="dropdown d-none d-md-flex">
                            <a class="nav-link icon" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class=" nav-unread badge badge-danger  badge-pill">4</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a href="#" class="dropdown-item text-center">You have 4 notification</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <div class="notifyimg">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div>
                                        <strong>2 new Messages</strong>
                                        <div class="small text-muted">17:50 Pm</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <div class="notifyimg">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <div>
                                        <strong> 1 Event Soon</strong>
                                        <div class="small text-muted">19-10-2019</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <div class="notifyimg">
                                        <i class="fa fa-comment-o"></i>
                                    </div>
                                    <div>
                                        <strong> 3 new Comments</strong>
                                        <div class="small text-muted">05:34 Am</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <div class="notifyimg">
                                        <i class="fa fa-exclamation-triangle"></i>
                                    </div>
                                    <div>
                                        <strong> Application Error</strong>
                                        <div class="small text-muted">13:45 Pm</div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item text-center">See all Notification</a>
                            </div>
                        </div>
                        <div class="dropdown d-none d-md-flex">
                            <a class="nav-link icon" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class=" nav-unread badge badge-warning  badge-pill">3</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <img src="../assets/images/faces/male/41.jpg" alt="avatar-img"
                                         class="avatar brround mr-3 align-self-center">
                                    <div>
                                        <strong>Blake</strong> I've finished it! See you so.......
                                        <div class="small text-muted">30 mins ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <img src="../assets/images/faces/female/1.jpg" alt="avatar-img"
                                         class="avatar brround mr-3 align-self-center">
                                    <div>
                                        <strong>Caroline</strong> Just see the my Admin....
                                        <div class="small text-muted">12 mins ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <img src="../assets/images/faces/male/18.jpg" alt="avatar-img"
                                         class="avatar brround mr-3 align-self-center">
                                    <div>
                                        <strong>Jonathan</strong> Hi! I'am singer......
                                        <div class="small text-muted">1 hour ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <img src="../assets/images/faces/female/18.jpg" alt="avatar-img"
                                         class="avatar brround mr-3 align-self-center">
                                    <div>
                                        <strong>Emily</strong> Just a reminder that you have.....
                                        <div class="small text-muted">45 mins ago</div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item text-center">View all Messages</a>
                            </div>
                        </div>
                        <div class="dropdown d-none d-md-flex">
                            <a class="nav-link icon" data-toggle="dropdown">
                                <i class="fe fe-grid"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow  app-selector">
                                <ul class="drop-icon-wrap">
                                    <li>
                                        <a href="#" class="drop-icon-item">
                                            <i class="icon icon-speech text-dark"></i>
                                            <span class="block"> E-mail</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="drop-icon-item">
                                            <i class="icon icon-map text-dark"></i>
                                            <span class="block">map</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="drop-icon-item">
                                            <i class="icon icon-bubbles text-dark"></i>
                                            <span class="block">Messages</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="drop-icon-item">
                                            <i class="icon icon-user-follow text-dark"></i>
                                            <span class="block">Followers</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="drop-icon-item">
                                            <i class="icon icon-picture text-dark"></i>
                                            <span class="block">Photos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="drop-icon-item">
                                            <i class="icon icon-settings text-dark"></i>
                                            <span class="block">Settings</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item text-center">View all</a>
                            </div>
                        </div>
                        <!----- Notification End ------->

                        <div class="dropdown ">
                            <a href="#" class="nav-link pr-0 leading-none user-img" data-toggle="dropdown">
                                <img src="../assets/images/faces/male/25.jpg" alt="profile-img"
                                     class="avatar avatar-md brround">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
                                <a class="dropdown-item" href="profile.html">
                                    <i class="dropdown-icon icon icon-user"></i> My Profile
                                </a>
                                <a class="dropdown-item" href="emailservices.html">
                                    <i class="dropdown-icon icon icon-speech"></i> Inbox
                                </a>
                                <a class="dropdown-item" href="editprofile.html">
                                    <i class="dropdown-icon  icon icon-settings"></i> Account Settings
                                </a>
                                <a class="dropdown-item" href="login.html">

                                    <i class="dropdown-icon icon icon-power"></i> Log out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar menu-->
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
        <aside class="app-sidebar doc-sidebar">
            <div class="app-sidebar__user clearfix">
                <div class="dropdown user-pro-body">
                    <div>
                        <img src="../assets/images/faces/male/25.jpg" alt="user-img" class="avatar avatar-lg brround">
                        <a href="editprofile.html" class="profile-img">
                            <span class="fa fa-pencil" aria-hidden="true"></span>
                        </a>
                    </div>
                    <div class="user-info">
                        <h2>Rubin Carmody</h2>
                        <span>Web Designer</span>
                    </div>
                </div>
            </div>
            <ul class="side-menu">
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#"><i
                            class="side-menu__icon fa fa-tachometer"></i><span class="side-menu__label">Dashboard</span><i
                            class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li><a class="slide-item" href="index5.html">Dashboard 5</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#"><i
                            class="side-menu__icon fa fa-cogs"></i><span
                            class="side-menu__label">Admin settings</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li><a class="slide-item" href="admin-pricing.html">Admin Pricing</a></li>
                        <li><a class="slide-item" href="Ads.html">Ads List</a></li>
                        <li><a class="slide-item" href="comments.html">Comments</a></li>
                        <li><a class="slide-item" href="email-users.html">Email-Users</a></li>
                        <li><a class="slide-item" href="media-gallery.html">Media Gallery</a></li>
                        <li><a class="slide-item" href="newad.html">New Ad</a></li>
                        <li><a class="slide-item" href="newuser.html">New User</a></li>
                        <li><a class="slide-item" href="favourite-ads.html">Favourite-Ads</a></li>
                        <li><a class="slide-item" href="payment-orders.html">Payment Orders</a></li>
                        <li><a class="slide-item" href="payments-adpacks.html">Payment Adpacks</a></li>
                        <li><a class="slide-item" href="payment-settings.html">Payment Settings</a></li>
                        <li><a class="slide-item" href="payments-membership.html">Payment Membership</a></li>
                        <li><a class="slide-item" href="profile-admin.html">Profile Admin</a></li>
                        <li><a class="slide-item" href="settings.html">Settings</a></li>
                        <li><a class="slide-item" href="users-all.html">All Users</a></li>
                    </ul>
                </li>

                <li class="slide">
                    
                    <a class="side-menu__item" data-toggle="slide" href="#"><i
                            class="side-menu__icon fa fa-th-large"></i><span class="side-menu__label">Articles</span><i
                            class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li>
                            <a href="{{route("article.add_article")}}" class="slide-item">Add Article</a>
                        </li>
                        <li>
                            <a href="{{route('article')}}" class="slide-item">List Article</a>
                        </li>
                    </ul>

                    <a class="side-menu__item" data-toggle="slide" href="#"><i
                            class="side-menu__icon fa fa-th-large"></i><span
                            class="side-menu__label">User Management</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li>
                            <a href="{{route('Users.index')}}" class="slide-item">Add New User</a>
                        </li>
                        <li>
                            <a href="form-wizard.html" class="slide-item">User List</a>
                        </li>

                    </ul>
                </li>

                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#"><i
                            class="side-menu__icon fa fa-database"></i><span class="side-menu__label">Pages</span><i
                            class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">



                        <a href="{{route('PagesMgt.index')}}" class="slide-item">Add New Page</a>
                        </li>
                        <li>
                            <a href="{{route('Pages_list.index')}}" class="slide-item">Pages List</a>
                        </li
                        >

                    </ul>
                </li>
            </ul>

            <li class="slide">

                <a class="side-menu__item" href="{{route('Role.index')}}"><i
                        class="side-menu__icon fa fa-user"></i><span class="side-menu__label">Roll</span></a>

            </li>
            <li class="slide">

                <a class="side-menu__item" href="#"><i class="side-menu__icon fa fa-sliders"></i><span
                        class="side-menu__label">Slider</span></a>

            </li>


            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#"><i
                        class="side-menu__icon fa fa-chain-broken"></i><span
                        class="side-menu__label">Custom  Pages</span><i class="angle fa fa-angle-right"></i></a>
                <ul class="slide-menu">
                    <li>
                        <a href="login.html" class="slide-item">Login</a>
                    </li>
                    <li>
                        <a href="register.html" class="slide-item">Register</a>
                    </li>
                    <li>
                        <a href="forgot-password.html" class="slide-item">Forgot password</a>
                    </li>
                    <li>
                        <a href="lockscreen.html" class="slide-item">Lock screen</a>
                    </li>
                </ul>
            </li>

            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-image"></i><span
                        class="side-menu__label">Slider</span><i class="angle fa fa-angle-right"></i></a>
                <ul class="slide-menu">
                    <li>
                        <a href="{{route("slider.index")}}" class="slide-item">List Slider</a>
                    </li>
                    <li>
                        <a href="{{route("slider.create")}}" class="slide-item">Add Slider</a>
                    </li>
                </ul>
            </li>

            </ul>
            <div class="app-sidebar-footer">
                <a href="emailservices.html">
                    <span class="fa fa-envelope" aria-hidden="true"></span>
                </a>
                <a href="profile.html">
                    <span class="fa fa-user" aria-hidden="true"></span>
                </a>
                <a href="editprofile.html">
                    <span class="fa fa-cog" aria-hidden="true"></span>
                </a>
                <a href="login.html">
                    <span class="fa fa-sign-in" aria-hidden="true"></span>
                </a>
                <a href="chat.html">
                    <span class="fa fa-comment" aria-hidden="true"></span>
                </a>
            </div>
        </aside>

        <div class="app-content  my-3 my-md-5">
            <div class="side-app">

                <!-- breadcrumb start-->
            @include('backend._partial.breadcrumb')
            <!-- breadcrumb start-->

                <!-- main content start-->
            @yield('main_content')
            <!-- main content ends-->

            </div>
        </div>
    </div>

    <!--footer-->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
                    Copyright © 2019 <a href="#">Claylist</a>. Designed by <a href="#">Spruko</a> All rights reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer-->
</div>

<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fa fa-rocket"></i></a>


<!-- Dashboard Core -->
<script src="../assets/js/vendors/jquery-3.2.1.min.js"></script>
<script src="../assets/plugins/bootstrap-4.3.1-dist/js/popper.min.js"></script>
<script src="../assets/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<script src="../assets/js/vendors/jquery.sparkline.min.js"></script>
<script src="../assets/js/vendors/selectize.min.js"></script>
<script src="../assets/js/vendors/jquery.tablesorter.min.js"></script>
<script src="../assets/js/vendors/circle-progress.min.js"></script>
<script src="../assets/plugins/rating/jquery.rating-stars.js"></script>


<!-- Fullside-menu Js-->
<script src="../assets/plugins/toggle-sidebar/sidemenu.js"></script>


<!--Morris.js Charts Plugin -->
<script src="../assets/plugins/morris/raphael-min.js"></script>
<script src="../assets/plugins/morris/morris.js"></script>

<!-- Input Mask Plugin -->
<script src="../assets/plugins/input-mask/jquery.mask.min.js"></script>
<script src="{{ asset('assets') }}/js/index5.js"></script>

<!--Counters -->
<script src="../assets/plugins/counters/counterup.min.js"></script>
<script src="../assets/plugins/counters/waypoints.min.js"></script>

<!-- Data tables -->
<script src="../assets/plugins/datatable/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>
<script src="../assets/js/datatable.js"></script>

<!-- Custom scroll bar Js-->
<script src="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

<!--Counters -->
<script src="../assets/plugins/counters/counterup.min.js"></script>
<script src="../assets/plugins/counters/waypoints.min.js"></script>

<!-- Cover-image Js-->
<script src="{{ asset('assets') }}/js/cover-image.js"></script>

<!-- Custom Js-->
<script src="../assets/js/admin-custom.js"></script>



</body>
</html>
