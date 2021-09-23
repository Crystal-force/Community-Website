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

		<!--Section-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-image-src="../assets/images/banners/banner3.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1>Forums</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Forums</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Section-->

		<!--Testimonial1-->
		<section class="sptb">
			<div class="container">
				<div class="row">
            <div class="col-lg-8">
              <div class="card">
                <div class="card-body">
                  <div class="d-sm-flex team-section">
                    <div class="ml-sm-5 mt-4 mt-sm-0">
                      <h4 class="font-weight-bold dark-grey-text mt-2">Tips for outline better</h4>
                      <p class="forums-user-name">by <span>huynhbinh234</span> at Illustration, about 24 hours ago</p>
                      <p class="font-weight-normal dark-grey-text mb-0">
                      <i class="fa fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur. officiis hic tenetur quae quaerat ad velit ab hic tenetur officiis hic tenetur quae quaerat ad velit ab hic tenetur officiis hic tenetur quae quaerat ad velit ab hic tenetur. Woodoku: wooden block puzzle game meets sudoku grid. It has a calm yet challenging puzzle that you will be addicted to in no time!
                      Description and how to play about the game!
                      Place blocks in a 9x9 board and fill in rows, columns or squares to clear them from the game. Play as long as you can without running out of space to beat your high score! <i class="fa fa-quote-right pr-2"></i></p>
                      <div class="reivews-area mt-3">
                        <div class="comment-btn">
                          <div class="btn-list">
                            <a href="{{route('forum-comment')}}" class="btn btn-warning" style="color:white"><i class="fa fa-heart-o mr-2"></i>Like</a>
                          </div>
                        </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">0 comments</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
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
				</div>
			</div>
		</section>
		<!--Testimonial1-->

		<!--Footer Section-->
		@include('common.footer')
		<!--Footer Section-->

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>
    
@endsection