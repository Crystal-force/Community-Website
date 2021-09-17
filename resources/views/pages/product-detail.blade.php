@extends('layout.index')
@section('content')
    <!--Loader-->
    <div id="global-loader">
        <img src="../assets/preloader/Fidget-spinner.gif" class="loader-img " alt="">
    </div>

    @include('common.top-header')


    <!--listing-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <!--Classified Description-->
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="item-det mb-4">
                                <a href="#" class="text-dark">
                                    <h3>Charlie Takes His Shot: How Charlie Sifford Broke the Color Barrier in Golf. Nancy
                                        Churnin</h3>
                                </a>
                                <p>by <span><a href="#">John Joven</a></span> @johnjoven</p>
                                <div class="d-flex">
                                    <ul class="d-flex mb-0">
                                        <li class="mr-5"><a href="#" class="icons"><i
                                                    class="ti-calendar text-muted mr-1"></i> 5 hours ago</a></li>
                                        <li class="mr-5"><a href="#" class="icons"><i
                                                    class="fa fa-thumbs-o-up text-muted mr-1"></i> 99% Positive
                                                review(1.0k)</a></li>
                                        <li class="mr-5"><a href="#" class="icons"><i
                                                    class="fa fa-user-o text-muted mr-1"></i> 5601 customers</a></li>
                                        <li class="mr-5"><a href="#" class="icons"><i
                                                    class="ti-eye text-muted mr-1 fs-15"></i> 765</a></li>
                                    </ul>
                                    <div class="rating-stars d-flex">
                                        <div class="rating-stars-container mr-2">
                                            <div class="rating-star sm">
                                                <i class="fa fa-heart"></i>
                                            </div>
                                        </div> 135
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Comments-->

                    <!--/Comments-->
                    <div class="card mb-lg-0">
                        <div class="card-body">
                            <div class="item-card2-img product-img">
                                <img src="../assets/images/media/others/f3.jpg" alt="img" class="cover-image">
                            </div>

                            <div class="item-card2-img product-img">
                                <img src="../assets/images/media/others/f3.jpg" alt="img" class="cover-image">
                            </div>

                            <div class="item-card2-img product-img">
                                <img src="../assets/images/media/others/f3.jpg" alt="img" class="cover-image">
                            </div>

                            <div class="item-card2-img product-img">
                                <img src="../assets/images/media/others/f3.jpg" alt="img" class="cover-image">
                            </div>
                        </div>
                    </div>
                </div>

                <!--Right Side Content-->
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Posted By</h3>
                        </div>
                        <div class="card-body  item-user">
                            <div class="profile-pic mb-0">
                                <img src="../assets/images/users/male/25.jpg" class="brround avatar-xxl" alt="user">
                                <div>
                                    <a href="#" class="text-dark">
                                        <h4 class="mt-3 mb-1 font-weight-semibold">Alicia Recio Rodríguez</h4>
                                    </a>
                                    <h6 class="text-muted font-weight-normal">Teacher</h6>
                                    <span class="text-muted">Joined November 2020</span>
                                    <div class=" item-user-icons mt-4">
                                        <a href="#" class="facebook-bg mt-0"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                                        <a href="#" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body item-user">
                            <h4 class="mb-4">Detail Info</h4>
                            <div>
                                <h6><span class="font-weight-semibold"><i class="fa fa-thumbs-o-up mr-3 mb-2"></i></span><a
                                        href="#" class="text-body">99% Positive review(1.0k)</a></h6>
                                <h6><span class="font-weight-semibold"><i class="fa fa-user  mb-2"></i></span><a href="#"
                                        class="text-body"> 5061 Customers</a></h6>
                                <h6><span class="font-weight-semibold"><i
                                            class="fa fa-pencil-square-o mr-3 mb-2"></i></span><a href="#"
                                        class="text-body">18 Lessons</a></h6>
                                <h6><span class="font-weight-semibold"><i class="fa fa-bullhorn mr-3 "></i></span><a
                                        class="text-body"> Audio: English, Spanish</a></h6>
                                <h6><span class="font-weight-semibold"><i class="fa fa-signal mr-3 "></i></span><a
                                        class="text-body"> Level: BEGINNER</a></h6>
                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="text-center">
                                <a href="#" class="btn  btn-info"><i class="fa fa-envelope"></i> Chat</a>
                                <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#contact"><i
                                        class="fa fa-plus"></i> Follow</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Right Side Content-->
            </div>
        </div>
    </section>
    <!--/listing-->

    <!--Section-->
    <section class="sptb border-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <a href="#">
                        <div class="card">
                            <div class="card-body products-card">
                                <div class="product-item text-center">
                                    <span class="badge badge-danger"> NEW </span>
                                    <img src="../assets/images/media/2.png" alt="img">
                                </div>
                            </div>
                            <div class="card-footer products-card-footer">
                                <h5 class="text-center mb-0 font-weight-semibold">Sherbrooke</h5>
                                <p class="mb-0">by business name</p>
                            </div>
                            <div class="item-card9-footer d-sm-flex">
                                <div class="ml-auto">
                                    <a href="#" class="mr-2 mt-1 mb-1 float-left" title="message"><i
                                            class="fa fa-comment-o  mr-1 text-muted"></i> 12</a>
                                    <a href="#" class="mr-2 mt-1 mb-1 float-left" title="favorites"><i
                                            class="fa fa-heart-o text-muted mr-1 "></i>450</a>
                                    <a href="#" class="mr-2 mt-1 mb-1 float-left" title="visitors"><i
                                            class="fa fa-eye text-muted mr-1 "></i>50</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <a href="#">
                        <div class="card">
                            <div class="card-body products-card">
                                <div class="product-item text-center">
                                    <span class="badge badge-danger"> NEW </span>
                                    <img src="../assets/images/media/2.png" alt="img">
                                </div>
                            </div>
                            <div class="card-footer products-card-footer">
                                <h5 class="text-center mb-0 font-weight-semibold">Sherbrooke</h5>
                                <p class="mb-0">by business name</p>
                            </div>
                            <div class="item-card9-footer d-sm-flex">
                                <div class="ml-auto">
                                    <a href="#" class="mr-2 mt-1 mb-1 float-left" title="message"><i
                                            class="fa fa-comment-o  mr-1 text-muted"></i> 12</a>
                                    <a href="#" class="mr-2 mt-1 mb-1 float-left" title="favorites"><i
                                            class="fa fa-heart-o text-muted mr-1 "></i>450</a>
                                    <a href="#" class="mr-2 mt-1 mb-1 float-left" title="visitors"><i
                                            class="fa fa-eye text-muted mr-1 "></i>50</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <a href="#">
                        <div class="card">
                            <div class="card-body products-card">
                                <div class="product-item text-center">
                                    <span class="badge badge-danger"> NEW </span>
                                    <img src="../assets/images/media/2.png" alt="img">
                                </div>
                            </div>
                            <div class="card-footer products-card-footer">
                                <h5 class="text-center mb-0 font-weight-semibold">Sherbrooke</h5>
                                <p class="mb-0">by business name</p>
                            </div>
                            <div class="item-card9-footer d-sm-flex">
                                <div class="ml-auto">
                                    <a href="#" class="mr-2 mt-1 mb-1 float-left" title="message"><i
                                            class="fa fa-comment-o  mr-1 text-muted"></i> 12</a>
                                    <a href="#" class="mr-2 mt-1 mb-1 float-left" title="favorites"><i
                                            class="fa fa-heart-o text-muted mr-1 "></i>450</a>
                                    <a href="#" class="mr-2 mt-1 mb-1 float-left" title="visitors"><i
                                            class="fa fa-eye text-muted mr-1 "></i>50</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <a href="#">
                        <div class="card">
                            <div class="card-body products-card">
                                <div class="product-item text-center">
                                    <span class="badge badge-danger"> NEW </span>
                                    <img src="../assets/images/media/2.png" alt="img">
                                </div>
                            </div>
                            <div class="card-footer products-card-footer">
                                <h5 class="text-center mb-0 font-weight-semibold">Sherbrooke</h5>
                                <p class="mb-0">by business name</p>
                            </div>
                            <div class="item-card9-footer d-sm-flex">
                                <div class="ml-auto">
                                    <a href="#" class="mr-2 mt-1 mb-1 float-left" title="message"><i
                                            class="fa fa-comment-o  mr-1 text-muted"></i> 12</a>
                                    <a href="#" class="mr-2 mt-1 mb-1 float-left" title="favorites"><i
                                            class="fa fa-heart-o text-muted mr-1 "></i>450</a>
                                    <a href="#" class="mr-2 mt-1 mb-1 float-left" title="visitors"><i
                                            class="fa fa-eye text-muted mr-1 "></i>50</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--Section-->

    <!-- Under Login-->
    <section class="sptb2 bg-white border-top">
        <div class="container">
            <div class="row">
                <div class="w-100">
                    <div class="card-header">
                    <h3 class="card-title">Login or Register Commet</h3>
                    </div>
                    <div class="card-body">
                    <div class="text-wra">
                        <div class="">
                        <div class="btn-list">
                            <a href="{{route('login')}}" class="btn btn-pill btn-primary">Register</a>
                            <a href="{{route('register')}}" class="btn btn-pill btn-info">Login</a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Under Login-->

    <!--Footer Section-->
    @include('common.footer')
    <!--Footer Section-->

    <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fa fa-rocket"></i></a>

@endsection
