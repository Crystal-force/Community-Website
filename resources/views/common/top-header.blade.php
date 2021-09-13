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
                                    <a href="#" class="callnumber text-dark"><span><i class="fa fa-phone mr-1"></i>:
                                            +425 345 8765</span></a>
                                </li>
                                <li class="dropdown mr-5">
                                    <a href="#" class="text-dark" data-toggle="dropdown"><span> Language <i
                                                class="fa fa-caret-down text-muted"></i></span> </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a href="#" class="dropdown-item">
                                            English
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            Spanish
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            Portugese
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
                                <a href="{{ route('register') }}" class="text-dark"><i class="fa fa-user mr-1"></i>
                                    <span>Register</span></a>
                            </li>
                            <li>
                                <a href="{{ route('login') }}" class="text-dark"><i class="fa fa-sign-in mr-1"></i>
                                    <span>Login</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Horizontal Header -->
    <div class="horizontal-header clearfix ">
        <div class="container">
            <a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
            <span class="smllogo"><img src="../assets/logo/logo_mobile.png" width="120" alt="" /></span>
            <a href="tel:245-6325-3256" class="callusbtn"><i class="fa fa-phone" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- /Horizontal Header -->

    @include('common.navbar')
</div>
<!-- Topbar -->
