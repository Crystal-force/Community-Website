@extends('layout.index')
@section('content')
		<!--Loader-->
		<div id="global-loader">
			<img src="../assets/preloader/index.svg" class="loader-img " alt="">
		</div>

		@include('common.top-header')

		<!--Breadcrumb-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-image-src="../assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1 class="">BLOG OF EXPERPTOS CHILE </h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="{{route('main')}}">Home</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Blog</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Breadcrumb-->
	
    <!--listing-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<!--Left Side Content-->
					<div class="col-lg-4 col-lg-4 col-md-12">
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

					<!--Lists-->
					<div class="col-xl-8 col-lg-8 col-md-12">
						<div class="card">
							<div class="card-body">
								<a href="#" class="text-dark"><h2 class="font-weight-semibold">Sapiente Swift</h2></a>
								<div class="item7-card-desc d-flex mb-2 mt-3">
									<a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Nov-28-2019</a>
									<a href="#"><i class="fa fa-user text-muted mr-2"></i>Nissy Sten</a>
									<div class="ml-auto">
										<a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>2 Comments</a>
									</div>
								</div>
								<div class="item7-card-img mt- mb-2">
									<img src="../assets/images/photos/c1.jpg" alt="img" class="w-100">
								</div>
								
								<p>Lorem Ipsum available, quis exercitationem, enim ad minima Ipsum, quis nostrum exercitationem
								Quaerat odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dol et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deser mollitian animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero temporin cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimusomnis voluptas assumenda est, omnis dolor repellendus. </p>
								<p>Lorem Ipsum available, quis exercitationem, enim ad minima Ipsum, quis nostrum exercitationem
								Quaerat odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dol et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deser mollitian animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero temporin cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimusomnis voluptas assumenda est, omnis dolor repellendus. </p>
								
								<div class="item7-card-img mt-1 mb-2">
									<img src="../assets/images/photos/c1.jpg" alt="img" class="w-100">
								</div>
								<div class="item7-card-img mt-1 mb-2">
									<img src="../assets/images/photos/c1.jpg" alt="img" class="w-100">
								</div>
								<p>Lorem Ipsum available, quis exercitationem, enim ad minima Ipsum, quis nostrum exercitationem
									Quaerat odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dol et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deser mollitian animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero temporin cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimusomnis voluptas assumenda est, omnis dolor repellendus. </p>
									<p>Lorem Ipsum available, quis exercitationem, enim ad minima Ipsum, quis nostrum exercitationem
									Quaerat odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dol et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deser mollitian animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero temporin cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimusomnis voluptas assumenda est, omnis dolor repellendus. </p>
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Comments</h3>
							</div>
							<div class="card-body p-0">
								<div class="media mt-0 p-5">
										<div class="d-flex mr-3">
												<a href="#"><img class="media-object brround" alt="64x64" src="../assets/images/users/male/1.jpg"> </a>
										</div>
                      <div class="media-body">
                      	<h5 class="mt-0 mb-1 font-weight-semibold">Joanne Scott<span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span><span class="fs-14 ml-2"> 4.5 <i class="fa fa-star text-yellow"></i></span></h5>
												<small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st  <i class=" ml-3 fa fa-clock-o"></i> 13.00  <i class=" ml-3 fa fa-map-marker"></i> Brezil</small>
												<p class="font-13  mb-2 mt-2">
														Lorem Ipsum available, quis Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et  nostrud exercitation ullamco laboris   commodo consequat.
												</p>
												<a href="#" class="mr-2"><span class="badge badge-primary">Helpful</span></a>
												<a href="" class="mr-2" data-toggle="modal" data-target="#Comment"><span class="">Comment</span></a>
												<a href="" class="mr-2" data-toggle="modal" data-target="#report"><span class="">Report</span></a>
										</div>
								</div>
								<div class="media p-5 border-top mt-0">
										<div class="d-flex mr-3">
											<a href="#"> <img class="media-object brround" alt="64x64" src="../assets/images/users/male/3.jpg"> </a>
										</div>
										<div class="media-body">
											<h5 class="mt-0 mb-1 font-weight-semibold">Edward<span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span><span class="fs-14 ml-2"> 4 <i class="fa fa-star text-yellow"></i></span>	</h5>
											<small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st  <i class=" ml-3 fa fa-clock-o"></i> 16.35  <i class=" ml-3 fa fa-map-marker"></i> UK</small>
											<p class="font-13  mb-2 mt-2">
													Lorem Ipsum available, quis Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et  nostrud exercitation ullamco laboris   commodo consequat.
											</p>
											<a href="#" class="mr-2"><span class="badge badge-primary">Helpful</span></a>
											<a href="" class="mr-2" data-toggle="modal" data-target="#Comment"><span class="">Comment</span></a>
											<a href="" class="mr-2" data-toggle="modal" data-target="#report"><span class="">Report</span></a>
										</div>
								</div>
							</div>
						</div>

						<div class="card mb-0">
							<div class="card-header">
								<h3 class="card-title">Write Your Comments</h3>
							</div>
							<div class="card-body">
								<div class="form-group">
									<input type="text" class="form-control" id="name1" placeholder="Your Name">
								</div>
								<div class="form-group">
									<input type="email" class="form-control" id="email" placeholder="Email Address">
								</div>
								<div class="form-group">
									<textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Write Your Comment"></textarea>
								</div>
								<a href="#" class="btn btn-primary">Submit</a>
							</div>
						</div>

						<div class="card mt-2">
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
					<!--/Lists-->
				</div>
			</div>
		</section>
		<!--/Listing-->

		<!--Footer Section-->
		@include('common.footer')
		<!--Footer Section-->

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>
   
@endsection