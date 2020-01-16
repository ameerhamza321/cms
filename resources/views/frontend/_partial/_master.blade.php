<!doctype html>
<html lang="zxx" dir="ltr">
    <!-- Header Start-->
@include('frontend._partial._header')
    <!-- Header end-->

<body>

<!--Loader-->
<div id="global-loader">
    <img src="{{ asset('assets') }}/images/products/products/loader.png" class="loader-img floating" alt="">
</div>

<!--Topbar-->
<div class="header-main">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-sm-4 col-7">
                    <div class="top-bar-left d-flex">
                        <div class="clearfix">
                            <ul class="socials">
                                <li>
                                    <a class="social-icon text-dark" href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon text-dark" href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon text-dark" href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon text-dark" href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix">
                            <ul class="contact border-left">
                                <li class="mr-5 d-lg-none">
                                    <a href="#" class="callnumber text-dark"><span><i class="fa fa-phone mr-1"></i>: +425 345 8765</span></a>
                                </li>
                                <li class="select-country mr-5">
                                    <select class="form-control select2-flag-search" data-placeholder="Select Country">
                                        <option value="UM">United States of America</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AL">Albania</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AG">Antigua and Barbuda</option>
                                        <option value="AU">Australia</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AO">Angola</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BA">Bosnia and Herzegovina</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BN">Brunei</option>
                                        <option value="BO">Bolivia</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BY">Belarus</option>
                                        <option value="CD">Congo</option>
                                        <option value="CA">Canada</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="CI">Cote d'Ivoire</option>
                                        <option value="CL">Chile</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CN">China</option>
                                        <option value="CO">Colombia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CV">Cabo Verde</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FI">Finland</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FR">France</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GE">Georgia</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GH">Ghana</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HU">Hungary</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IL">Israel</option>
                                        <option value="IN">India</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IR">Iran</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JO">Jordan</option>
                                        <option value="JP">Japan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="LA">Laos</option>
                                        <option value="LB">Lebanons</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LY">Libya</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MD">Moldova</option>
                                        <option value="ME">Montenegro</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MH">Marshall Islands</option>
                                        <option value="MK">Macedonia (FYROM)</option>
                                        <option value="ML">Mali</option>
                                        <option value="MM">Myanmar (formerly Burma)</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MT">Malta</option>
                                        <option value="MV">Maldives</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MX">Mexico</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NO">Norway</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="OM">Oman</option>
                                        <option value="PA">Panama</option>
                                        <option value="PF">Paraguay</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PL">Poland</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russia</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SE">Sweden</option>
                                        <option value="SG">Singapore</option>
                                        <option value="TG">Togo</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TL">Timor-Leste</option>
                                        <option value="TM">Turkmenistan</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TT">Trinidad and Tobago</option>
                                        <option value="TW">Taiwan</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VA">Vatican City (Holy See)</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Vietnam</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
                                </li>
                                <li class="dropdown mr-5">
                                    <a href="#" class="text-dark" data-toggle="dropdown"><span> Language <i class="fa fa-caret-down text-muted"></i></span> </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a href="#" class="dropdown-item" >
                                            English
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            Arabic
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            German
                                        </a>
                                        <a href="#" class="dropdown-item" >
                                            Greek
                                        </a>
                                        <a href="#" class="dropdown-item" >
                                            Spanish
                                        </a>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="text-dark" data-toggle="dropdown"><span>Currency <i class="fa fa-caret-down text-muted"></i></span></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a href="#" class="dropdown-item" >
                                            USD
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            EUR
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            INR
                                        </a>
                                        <a href="#" class="dropdown-item" >
                                            GBP
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-8 col-5">
                    <div class="top-bar-right">
                        <ul class="custom">
                            <li>
                                <a href="register.html" class="text-dark"><i class="fa fa-user mr-1"></i> <span>Register</span></a>
                            </li>
                            <li>
                                <a href="login.html" class="text-dark"><i class="fa fa-sign-in mr-1"></i> <span>Login</span></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="text-dark" data-toggle="dropdown"><i class="fa fa-home mr-1"></i><span> My Dashboard</span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a href="mydash.html" class="dropdown-item" >
                                        <i class="dropdown-icon icon icon-user"></i> My Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon icon icon-speech"></i> Inbox
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon icon icon-bell"></i> Notifications
                                    </a>
                                    <a href="mydash.html" class="dropdown-item" >
                                        <i class="dropdown-icon  icon icon-settings"></i> Account Settings
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon icon icon-power"></i> Log out
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Header -->
    <div class="horizontal-header clearfix ">
        <div class="container">
            <a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
            <span class="smllogo"><img src="../assets/images/brand/logo.png" width="120" alt=""/></span>
            <a href="tel:245-6325-3256" class="callusbtn"><i class="fa fa-phone" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- /Mobile Header -->

    <div class="horizontal-main bg-dark-transparent clearfix">
        <div class="horizontal-mainwrapper container clearfix">
            <div class="desktoplogo">
                <a href="index.html"><img src="../assets//images/brand/logo1.png" alt=""></a>
            </div>
            <div class="desktoplogo-1">
                <a href="index.html"><img src="../assets//images/brand/logo.png" alt=""></a>
            </div>
            <!--Nav-->
            <nav class="horizontalMenu clearfix d-md-flex">
                <ul class="horizontalMenu-list">
                    <li aria-haspopup="true"><a  href="{{ route('/') }}">Home</a></li>

                    <li aria-haspopup="true"><a href="about.html">About Us </a></li>

                    <li aria-haspopup="true"><a href="{{route('show_article')}}" >Blog </a></li>

                    <li aria-haspopup="true"><a href="#">Categories <span class="fa fa-caret-down m-0"></span></a>
                        <ul class="sub-menu">
                            <li aria-haspopup="true"><a href="classified.html">Classifieds Left</a></li>
                            <li aria-haspopup="true"><a href="classified-right.html">Classifieds Rights </a></li>
                        </ul>

                    </li>
                    <li aria-haspopup="true"><a href="contact.html"> Contact Us <span class="wsarrow"></span></a></li>
                    <li aria-haspopup="true" class="d-lg-none mt-5 pb-5 mt-lg-0">
                        <span><a class="btn btn-orange" href="ad-posts.html">Post Free Ad</a></span>
                    </li>
                </ul>
                <ul class="mb-0">
                    <li aria-haspopup="true" class="mt-5 d-none d-lg-block ">
                        <span><a class="btn btn-orange ad-post" href="ad-posts.html">Post Free Ad</a></span>
                    </li>
                </ul>
            </nav>
            <!--Nav-->
        </div>
    </div>
</div>

<!--Breadcrumb start-->
{{-- @include('frontend._partial.breadcrumb')--}}
<!--/Breadcrumb end-->

@yield('main_content')

<!--Footer Section-->
<section>
    <footer class="bg-dark-purple text-white">
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <h6>About</h6>
                        <hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit amet numquam iure provident voluptate essequasi, veritatis totam voluptas nostrum.Lorem ipsum dolor sit amet, consectetur </p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum .</p>
                    </div>
                    <div class="col-lg-2 col-md-12">
                        <h6>Our Services</h6>
                        <hr class="deep-purple text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
                        <ul class="list-unstyled mb-0">
                            <li><a href="javascript:;">Our Team</a></li>
                            <li><a href="javascript:;">Contact US</a></li>
                            <li><a href="javascript:;">About</a></li>
                            <li><a href="javascript:;">Services</a></li>
                            <li><a href="javascript:;">Blog</a></li>
                            <li><a href="javascript:;">Terms and Services</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12">
                        <h6>Contact</h6>
                        <hr class="deep-purple  text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#"><i class="fa fa-home mr-3 text-primary"></i> New York, NY 10012, US</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-envelope mr-3 text-primary"></i> info12323@example.com</a></li>
                            <li>
                                <a href="#"><i class="fa fa-phone mr-3 text-primary"></i> + 01 234 567 88</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-print mr-3 text-primary"></i> + 01 234 567 89</a>
                            </li>
                        </ul>
                        <ul class="list-unstyled list-inline mt-3">
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
                                    <i class="fa fa-facebook bg-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
                                    <i class="fa fa-twitter bg-info"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
                                    <i class="fa fa-google-plus bg-danger"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
                                    <i class="fa fa-linkedin bg-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <h6>Subscribe</h6>
                        <hr class="deep-purple  text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
                        <div class="clearfix"></div>
                        <div class="input-group w-70">
                            <input type="text" class="form-control br-tl-3  br-bl-3 " placeholder="Email">
                            <div class="input-group-append ">
                                <button type="button" class="btn btn-primary br-tr-3  br-br-3"> Subscribe </button>
                            </div>
                        </div>
                        <h6 class="mb-0 mt-5">Payments</h6>
                        <hr class="deep-purple  text-primary accent-2 mb-2 mt-3 d-inline-block mx-auto">
                        <div class="clearfix"></div>
                        <ul class="footer-payments">
                            <li class="pl-0"><a href="javascript:;"><i class="fa fa-cc-amex text-muted" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:;"><i class="fa fa-cc-visa text-muted" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:;"><i class="fa fa-credit-card-alt text-muted" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:;"><i class="fa fa-cc-mastercard text-muted" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:;"><i class="fa fa-cc-paypal text-muted" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-dark-purple text-white p-0">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-12 col-sm-12 mt-3 mb-3 text-center ">
                        Copyright © 2019 <a href="#" class="fs-14 text-primary">Claylist</a>. Designed by <a href="#" class="fs-14 text-primary">Spruko</a> All rights reserved.
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>
<!--Footer Section-->

<!-- Back to top -->
<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>

<!-- JQuery js-->
<script src="{{ asset('assets') }}/js/vendors/jquery-3.2.1.min.js"></script>

<!-- Bootstrap js -->
<script src="{{ asset('assets') }}/plugins/bootstrap-4.3.1-dist/js/popper.min.js"></script>
<script src="{{ asset('assets') }}/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

<!--JQuery Sparkline Js-->
<script src="{{ asset('assets') }}/js/vendors/jquery.sparkline.min.js"></script>

<!-- Circle Progress Js-->
<script src="{{ asset('assets') }}/js/vendors/circle-progress.min.js"></script>

<!-- Star Rating Js-->
<script src="{{ asset('assets') }}/plugins/rating/jquery.rating-stars.js"></script>

<!--Horizontal Menu-->
<script src="{{ asset('assets') }}/plugins/Horizontal2/Horizontal-menu/horizontal.js"></script>

<!--Owl Carousel js -->
<script src="{{ asset('assets') }}/plugins/owl-carousel/owl.carousel.js"></script>

<!--JQuery TouchSwipe js-->
<script src="{{ asset('assets') }}/js/jquery.touchSwipe.min.js"></script>

<!--Select2 js -->
<script src="{{ asset('assets') }}/plugins/select2/select2.full.min.js"></script>
<script src="{{ asset('assets') }}/js/select2.js"></script>

<!-- Cookie js -->
<script src="{{ asset('assets') }}/plugins/cookie/jquery.ihavecookies.js"></script>
<script src="{{ asset('assets') }}/plugins/cookie/cookie.js"></script>

<!-- sticky Js-->
<script src="{{ asset('assets') }}//js/sticky.js"></script>

<!-- Custom scroll bar Js-->
<script src="{{ asset('assets') }}/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Vertical scroll bar Js-->
<script src="{{ asset('assets') }}/plugins/vertical-scroll/jquery.bootstrap.newsbox.js"></script>
<script src="{{ asset('assets') }}/plugins/vertical-scroll/vertical-scroll.js"></script>

<!-- Swipe Js-->
<script src="{{ asset('assets') }}/js/swipe.js"></script>

<!-- Scripts Js-->
<script src="{{ asset('assets') }}/js/scripts2.js"></script>

<!-- Custom Js-->
<script src="{{ asset('assets') }}/js/custom.js"></script>
</body>
</html>
