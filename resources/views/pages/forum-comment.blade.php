@extends('layout.index')
@section('content')
		<!--Loader-->
		<div id="global-loader">
			<img src="../assets/preloader/Fidget-spinner.gif" class="loader-img " alt="">
		</div>

		@include('common.top-header')

		<!--Section-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-image-src="../assets/images/banners/banner3.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1>Forums</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="{{route('main')}}">Home</a></li>
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
                            <a href="{{route('forum-comment')}}" class="btn btn-outline-secondary"><i class="fa fa-comment-o mr-2"></i>Comment</a>
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
              <div class="card">
                <div class="w-100">
                  <div class="card-header">
                    <h3 class="card-title">Login or Register Commet</h3>
                  </div>
                  <div class="card-body">
                    <div class="text-wra">
                        <div class="">
                          <div class="btn-list">
                              <a href="{{route('login')}}" class="btn btn-pill btn-primary" style="color:white">Register</a>
                              <a href="{{route('register')}}" class="btn btn-pill btn-info" style="color:white">Login</a>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Comment it on the forum</h3>
                </div>
                <div class="card-body  item-user">
                  <p class="forum-side-login">Sign up and learn with creative professionals like you</p>
                  <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputname" placeholder="Username or Email">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputname" placeholder="Password">
                  </div>
                  <div class="btn-list">
                    <a href="#" class="btn btn-pill btn-info forum-login-btn">Login</a>
                  </div>
                  <div class="side-sign-link">
                    <p class="forum-side-login mt-2">Don't have account?<span><a href="{{route('register')}}"> Sign UP</a></span></p>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Posted By</h3>
                </div>
                <div class="card-body  item-user">
                    <div class="profile-pic mb-0">
                        <img src="../assets/images/users/male/25.jpg" class="brround avatar-xxl" alt="user">
                        <div>
                            <a href="userprofile.html" class="text-dark">
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