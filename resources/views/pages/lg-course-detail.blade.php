@extends('layout.index')
@section('content')
    <!--Loader-->
    <div id="global-loader">
        <img src="../assets/preloader/index.svg" class="loader-img " alt="">
    </div>

    <div class="header-main">
      <div class="top-bar lg-top-bar">
          <div class="container">
              <div class="row">
                  @include('common.logged-top-header')

                  <div class="col-xl-4 col-lg-4 col-sm-8 col-5">
                      <div class="top-bar-right">
                          <ul class="custom">
                              <li>
                                  <a href="{{route('edit-profile')}}" class="text-dark top-header-text"><i class="fa fa-user mr-1"></i>
                                      <span>{{$logged_user->name}}</span></a>
                              </li>
                              <li>
                                  <a href="#" class="text-dark top-header-text"><i class="fa fa-envelope-open-o mr-1"></i>
                                      <span>{{$logged_user->email}}</span></a>
                              </li>
                              <li>
                                  <a href="/logout" class="text-dark top-header-text"><i class="icon icon-power mr-1"></i>
                                      <span>Logout</span></a>
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
    
      @include('common.logged-nav')
    </div>


    <!--listing-->
    <section class="sptb mt-7">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <!--Classified Description-->
                    <div class="card overflow-hidden">
                        <div class="ribbon ribbon-top-right text-danger"><span class="bg-danger">Best Seller</span></div>
                        <div class="card-body">
                            <div class="item-det mb-4">
                                <a href="#" class="text-dark">
                                    <h3>Harlequini Dawn</h3>
                                </a>
                                <p>A course by Alicia Recio Rodríguez, Nordic-style Crochet Designer and Yarnbomber</p>
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

                    <div class="">
					    <div class="">
                            <div class=" border-0">
                                <div class="wideget-user-tab wideget-user-tab3">
                                    <div class="tab-menu-heading">
                                        <div class="tabs-menu1">
                                            <ul class="nav">
                                                <li><a href="#tab-1" data-toggle="tab" class="active">Information</a></li>
                                                {{-- <li class=""><a href="#tab-2" class="" data-toggle=" tab">Content</a></li> --}}
                                                <li><a href="#tab-2" data-toggle="tab" class="">Products</a></li>
                                                 <li><a href="{{route('login')}}" data-toggle="tab" class=""><i class=" icon icon-lock text-muted mr-1"></i>Community</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-content border-left border-right border-top br-tr-3 border-bottom br-br-3 br-bl-3 p-5 bg-white mb-4">
                                    <div class="tab-pane active" id="tab-1">
                                        <ul class="list-unstyled video-list-thumbs row ">
                                            <li class="mb-0">
                                                <a data-toggle="modal" data-target="#homeVideo">
                                                    <img src="../assets/images/media/others/v1.jpg" alt="Barca"
                                                        class="img-responsive">
                                                    <span class="mdi mdi-arrow-right-drop-circle-outline text-white"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="social-share">
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-icon btn-facebook"><i
                                                        class="fa fa-facebook"></i></button>
                                                <button type="button" class="btn btn-icon btn-twitter"><i
                                                        class="fa fa-twitter"></i></button>
                                                <button type="button" class="btn btn-icon btn-google"><i
                                                        class="icon icon-envelope"></i></button>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="info-area">
                                            <div class="info-text-area">
                                                <a class="text-dark">
                                                    <h3>Learn how to crochet garments by imitating the texture of two needles</h3>
                                                </a>
                                                <p class="info-text">Would you like to make your own crochet garments filled with style and color? Alicia—better known as Alimaravillas—is a nordic crochet designer and yarnbomber that has taken social media by storm with her minimal designs filled with hipster vibes and nordic style. Let her guide you through her tricks and techniques so you can finally make that statement piece you’ve been dreaming of, with just a hook and simple stitches.In this course, Alicia shows you how to create garments with your own hands, using a crochet hook. Discover how to create textures that mimic knitwear textures made with two needles, and have fun creating while learning the stitches you need to make your own modern crochet pieces. See the basic steps to making a pattern so you can create anything you want and discover a technique that will allow you to add a burst of color to your creations: the Colorwork technique.</p>
                                            </div>
                                            <div class="about-area">
                                                <a class="text-dark">
                                                    <h3>About this course</h3>
                                                </a>
                                                <ul class="list-group">
                                                    <li class="list-group-item"><i class="fa fa-cog text-primary"
                                                            aria-hidden="true"></i> Introduction</li>
                                                    <li class="list-group-item"><i class="fa fa-cog text-danger"
                                                            aria-hidden="true"></i> Before starting</li>
                                                    <li class="list-group-item"><i class="fa fa-cog text-success"
                                                            aria-hidden="true"></i> Main Types of Stitche</li>
                                                    <li class="list-group-item"><i class="fa fa-cog text-warning"
                                                            aria-hidden="true"></i> Knit the garment</li>
                                                    <li class="list-group-item"><i class="fa fa-cog text-info"
                                                            aria-hidden="true"></i> Final Touches</li>
                                                    <li class="list-group-item"><i class="fa fa-cog text-success"
                                                            aria-hidden="true"></i> Final Project/li>
                                                </ul>
                                            </div>
                                            <div class="about-author">
                                                <a class="text-dark">
                                                    <h3>About us</h3>
                                                </a>
                                                <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="bg-white h-100">
                                                    <img class="card-img-top br-tr-10 br-tl-10 br-br-10 br-bl-10" src="../assets/images/media/mensjackets.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <a class="text-dark">
                                                        <h3>Alica Recio Rodrego</h3>
                                                    </a>
                                                    <p>Nordic-style Crochet Designer and Yarnbomber</p>
                                                    <div class="btn-list">
                                                    <button type="button" class="btn btn-icon btn-facebook"><i class="fa fa-facebook"></i></button>
                                                    <button type="button" class="btn btn-icon btn-twitter"><i class="fa fa-twitter"></i></button>
                                                    <button type="button" class="btn btn-icon btn-google"><i class="fa fa-google"></i></button>
                                                    <button type="button" class="btn btn-icon btn-instagram"><i class="fa fa-instagram"></i></button>
                                                    </div>
                                                    <p class="info-join-date">Joined November 2020</p>
                                                </div>
                                                </div>
                                                <div class="about-content">
                                                <p>
                                                    Get to know Alicia, better known as Alimaravillas, see the artists that inspire
                                                    her creations, and discover how she uses Instagram to keep in touch with those
                                                    that love and follow her work.

                                                    Get to grips with the tools and materials you’ll use in the course, learning the
                                                    difference between types of yarn and how they can be used.

                                                    Alicia shares her tips to start crocheting and creating patterns, starting with
                                                    how to hold your hook, how tight you should keep your stitches, how to make a
                                                    sample or measure up your sections, as well as telling you what to keep in mind
                                                    with each type of crochet knot. Then, start creating different textures with a
                                                    knit-effect to your stitches.

                                                    Next, learn how to make patterns and discover the different types you can use to
                                                    create more elaborate garments.
                                                </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-2">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12 col-sm-12">
                                                <a href="#">
                                                    <div class="card">
                                                        <div class="card-body products-card">
                                                            <div class="product-item text-center">
                                                                <img src="../assets/images/media/2.png" alt="img">
                                                            </div>
                                                        </div>
                                                        <div class="card-footer products-card-footer">
                                                            <h5 class="text-center mb-0 font-weight-semibold">Sherbrooke</h5>
                                                            <p class="mb-0">by business name</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-12 col-sm-12">
                                                <a href="#">
                                                    <div class="card">
                                                        <div class="card-body products-card">
                                                            <div class="product-item text-center">
                                                                <img src="../assets/images/media/2.png" alt="img">
                                                            </div>
                                                        </div>
                                                        <div class="card-footer products-card-footer">
                                                            <h5 class="text-center mb-0 font-weight-semibold">Sherbrooke</h5>
                                                            <p class="mb-0">by business name</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-12 col-sm-12">
                                                <a href="#">
                                                    <div class="card">
                                                        <div class="card-body products-card">
                                                            <div class="product-item text-center">
                                                                <img src="../assets/images/media/2.png" alt="img">
                                                            </div>
                                                        </div>
                                                        <div class="card-footer products-card-footer">
                                                            <h5 class="text-center mb-0 font-weight-semibold">Sherbrooke</h5>
                                                            <p class="mb-0">by business name</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-12 col-sm-12">
                                                <a href="#">
                                                    <div class="card">
                                                        <div class="card-body products-card">
                                                            <div class="product-item text-center">
                                                                <img src="../assets/images/media/2.png" alt="img">
                                                            </div>
                                                        </div>
                                                        <div class="card-footer products-card-footer">
                                                            <h5 class="text-center mb-0 font-weight-semibold">Sherbrooke</h5>
                                                            <p class="mb-0">by business name</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-12 col-sm-12">
                                                <a href="#">
                                                    <div class="card">
                                                        <div class="card-body products-card">
                                                            <div class="product-item text-center">
                                                                <img src="../assets/images/media/2.png" alt="img">
                                                            </div>
                                                        </div>
                                                        <div class="card-footer products-card-footer">
                                                            <h5 class="text-center mb-0 font-weight-semibold">Sherbrooke</h5>
                                                            <p class="mb-0">by business name</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-12 col-sm-12">
                                                <a href="#">
                                                    <div class="card">
                                                        <div class="card-body products-card">
                                                            <div class="product-item text-center">
                                                                <img src="../assets/images/media/2.png" alt="img">
                                                            </div>
                                                        </div>
                                                        <div class="card-footer products-card-footer">
                                                            <h5 class="text-center mb-0 font-weight-semibold">Sherbrooke</h5>
                                                            <p class="mb-0">by business name</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="center-block text-center page-move">
                                                <ul class="pagination mb-3">
                                                    <li class="page-item page-prev disabled">
                                                        <a class="page-link" href="#" tabindex="-1">Prev</a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item page-next">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-3">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered border-top mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <td>ARAI Mileage</td>
                                                                <td>24.7 km/kg</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Engine Displacement (cc)</td>
                                                                <td>796</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Max Torque (nm@rpm)</td>
                                                                <td>69Nm@3500rpm</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Seating Capacity</td>
                                                                <td>5</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Boot Space (Litres)</td>
                                                                <td>177</td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered border-top mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <td>Fuel Type</td>
                                                                <td>CNG</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Max Power (bhp@rpm)</td>
                                                                <td>47.3bhp@6000rpm</td>
                                                            </tr>
                                                            <tr>
                                                                <td>TransmissionType</td>
                                                                <td>Manual</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Fuel Tank Capacity</td>
                                                                <td>35</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Body Type</td>
                                                                <td>Hatchback</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Classified Description-->


                    <!--Comments-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Reviews</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="reivews-area">
                                        <div class="d-flex justify-content-center">
                                            <ul class="d-flex mb-0">
                                                <li class="mr-5"><a class="icons review-rank"><i
                                                            class="fa fa-user-o text-muted mr-1"></i> 5601
                                                        <br><span>Customers</span></a></li>
                                                <li class="mr-5"><a class="icons review-rank"><i
                                                            class="fa fa-comments-o text-muted mr-1"></i> 5601
                                                        <br><span>Reviews</span></a></li>
                                                <li class="mr-5"><a class="icons review-rank"><i
                                                            class="fa fa-thumbs-o-up text-muted mr-1 fs-15"></i>
                                                        99%<br><span>Positive ratings</span></a></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="media p-5 border-top mt-0">
                                <div class="d-flex mr-3">
                                    <a href="#"> <img class="media-object brround" alt="64x64"
                                            src="../assets/images/users/male/3.jpg"> </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1 font-weight-semibold">Edward
                                        <span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title="verified"><i
                                                class="fa fa-check-circle-o text-success"></i></span>
                                    </h5>
                                    <small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st <i
                                            class=" ml-3 fa fa-clock-o"></i> 16.35 
                                        </small>
                                    <p class="font-13  mb-2 mt-2">
                                        Lorem Ipsum available, quis Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                        consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                                        nostrud exercitation ullamco laboris commodo consequat.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Comments-->
                    <div class="card mb-lg-0">
                        <div class="card-header">
                            <h3 class="card-title">Leave a reply</h3>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name1" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="example-textarea-input" rows="6"
                                        placeholder="Comment"></textarea>
                                </div>
                                <a href="#" class="btn btn-primary">Send Reply</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Right Side Content-->
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="card">
                        <div class="price-area">
                            <h1>₽985<span> 72% Disc<del>₽3,475</del></span></h1>
                        </div>
                        <div class="buy-btn-area">
                            <div class="btn-list">
                                <button type="button" class="btn btn-success buy-btn"><i class="icon icon-basket mr-2"></i>Buy</button>
                            </div>
                        </div>
                    
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
                                    <h6 class="mt-2 mb-0"><a href="#" class="btn btn-primary btn-sm">See All
                                            Products</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body item-user">
                            <h4 class="mb-4">Detail Info</h4>
                            <div>
                                <h6><span class="font-weight-semibold"><i class="fa fa-thumbs-o-up mr-3 mb-2"></i></span><a href="#"
                                        class="text-body">99% Positive review(1.0k)</a></h6>
                                <h6><span class="font-weight-semibold"><i class="fa fa-user  mb-2"></i></span><a href="#"
                                        class="text-body"> 5061 Customers</a></h6>
                                <h6><span class="font-weight-semibold"><i class="fa fa-pencil-square-o mr-3 mb-2"></i></span><a href="#"
                                        class="text-body">18 Lessons</a></h6>
                                <h6><span class="font-weight-semibold"><i class="fa fa-bullhorn mr-3 "></i></span><a
                                        class="text-body">  Audio: English, Spanish</a></h6>
                                <h6><span class="font-weight-semibold"><i class="fa fa-signal mr-3 "></i></span><a
                                        class="text-body">  Level: BEGINNER</a></h6>
                            </div>
                            <div class=" item-user-icons mt-4">
                                <a href="#" class="facebook-bg mt-0"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                                <a href="#" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-left">
                                <a href="#" class="btn  btn-info"><i class="fa fa-envelope"></i> Chat</a>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#contact"><i
                                        class="fa fa-user"></i> Contact Me</a>
                                <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#contact"><i
                                        class="fa fa-share-alt"></i> Share</a>
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
                        <div class="col-lg-6 col-md-12 col-xl-4">
                            <div class="card overflow-hidden">
                                <div class="item-card9-img">
                                    <div class="arrow-ribbon bg-primary">$635.00</div>
                                    <div class="item-card9-imgs">
                                        <a class="link" href="{{route('lg-companies-profile')}}"></a>
                                        <img src="../assets/images/media/j3.png" alt="img" class="cover-image">
                                    </div>
                                    <div class="item-card9-icons">
                                        <a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
                                    </div>
                                    <div class="item-overly-trans">
                                        <span><a href="#" class="bg-success">New</a></span>
                                    </div>
                                </div>
                                <div class="card border-0 mb-0">
                                    <div class="card-body ">
                                        <div class="item-card9">
                                            <a href="#" class="text-dark"><h4 class="font-weight-semibold mt-1"> Dignissimos</h4></a>
                                            <div class="item-card9-desc mb-2">
                                                <a href="#" class="mr-4"><span class=""><i class="fa fa-handshake-o text-muted mr-1"></i> Business name</span></a>
                                            </div>
                                            <p class="mb-0 leading-tight">Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                            <div class="mt-2">
                                                <a href="#" class="mr-4" id="posted-date"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i>  09/12 2021</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer pt-4 pb-4 pr-4 pl-4">
                                        <div class="item-card9-footer d-sm-flex">
                                            <div class="ml-auto">
                                                <a href="#" class="mr-2 mt-1 mb-1 float-left" title="Students"><i class="fa fa-user-o  mr-1 text-muted"></i> 1544</a>
                                                <a href="#" class="mr-2 mt-1 mb-1 float-left" title="98% of the 1099 student ratings are positive"><i class="fa fa-thumbs-o-up text-muted mr-1 "></i>99%(450)</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-xl-4">
                            <div class="card overflow-hidden">
                                <div class="item-card9-img">
                                    <div class="arrow-ribbon bg-primary">$635.00</div>
                                    <div class="item-card9-imgs">
                                        <a class="link" href="#"></a>
                                        <img src="../assets/images/media/j3.png" alt="img" class="cover-image">
                                    </div>
                                    <div class="item-card9-icons">
                                        <a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
                                    </div>
                                    <div class="item-overly-trans">
                                        <span><a href="#" class="bg-success">New</a></span>
                                    </div>
                                </div>
                                <div class="card border-0 mb-0">
                                    <div class="card-body ">
                                        <div class="item-card9">
                                            <a href="#" class="text-dark"><h4 class="font-weight-semibold mt-1"> Dignissimos</h4></a>
                                            <div class="item-card9-desc mb-2">
                                                <a href="#" class="mr-4"><span class=""><i class="fa fa-handshake-o text-muted mr-1"></i> Business name</span></a>
                                            </div>
                                            <p class="mb-0 leading-tight">Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                            <div class="mt-2">
                                                <a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i>  09/11 2021</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer pt-4 pb-4 pr-4 pl-4">
                                        <div class="item-card9-footer d-sm-flex">
                                            <div class="ml-auto">
                                                <a href="#" class="mr-2 mt-1 mb-1 float-left" title="Students"><i class="fa fa-user-o  mr-1 text-muted"></i> 1544</a>
                                                <a href="#" class="mr-2 mt-1 mb-1 float-left" title="98% of the 1099 student ratings are positive"><i class="fa fa-thumbs-o-up text-muted mr-1 "></i>99%(450)</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-xl-4">
                            <div class="card overflow-hidden">
                                <div class="item-card9-img">
                                    <div class="arrow-ribbon bg-primary">$256.00</div>
                                    <div class="item-card9-imgs">
                                        <a class="link" href="#"></a>
                                        <img src="../assets/images/media/v1.png" alt="img" class="cover-image">
                                    </div>
                                    <div class="item-card9-icons">
                                        <a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
                                    </div>
                                    <div class="item-overly-trans">
                                        <span>
                                            <a href="#" class="bg-danger">Best Seller</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="card border-0 mb-0">
                                    <div class="card-body ">
                                        <div class="item-card9">
                                            <div class="rating-stars">
                                                <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
                                            </div>
                                            <a href="#" class="text-dark"><h4 class="font-weight-semibold mt-1">Chittenden</h4></a>
                                            <div class="item-card9-desc mb-2">
                                                <a href="#" class="mr-4"><span class=""><i class="fa fa-handshake-o text-muted mr-1"></i> Business name</span></a>
                                            </div>
                                            <p class="mb-0 leading-tight">Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                            <div class="mt-2">
                                                <a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i>  09/02 2021</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer pt-4 pb-4 pr-4 pl-4">
                                        <div class="item-card9-footer d-sm-flex">
                                            <div class="ml-auto">
                                                <a href="#" class="mr-2 mt-1 mb-1 float-left" title="Students"><i class="fa fa-user-o  mr-1 text-muted"></i> 1544</a>
                                                <a href="#" class="mr-2 mt-1 mb-1 float-left" title="98% of the 1099 student ratings are positive"><i class="fa fa-thumbs-o-up text-muted mr-1 "></i>99%(450)</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                    
                </div>
            </section>
            <!--Section-->

    <!--Footer Section-->
    @include('common.footer')
    <!--Footer Section-->

    <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fa fa-rocket"></i></a>

@endsection
