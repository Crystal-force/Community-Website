@extends('layout.index')
@section('content')
		<!--Loader-->
		<div id="global-loader">
			<img src="../assets/preloader/index.svg" class="loader-img " alt="">
		</div>

		@include('common.top-header')

		<!--Breadcrumb-->
		<section>
			<div class="bannerimg cover-image bg-background3 sptb-2" data-image-src="../assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white ">
							<h1 class="">How it works</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="{{route('main')}}">Home</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">How it work</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Breadcrumb-->

		<!--section-->
		<section class="sptb">
			<div class="container">
				<div class="text-justify">
					<h2 class="mb-4">About Us</h2>
					<h4 class="leading-Automatic">Manage a community of people with different trades.</h4>
					<p class="leading-Automatic">Design, plan, modify, organize, execute, develop, impart and evaluate training activities, courses, advice, couching and mentoring at a professional, scientific and / or technological level for institutions and companies of all types and sizes, as well as natural persons or legal according to the specific needs required to improve knowledge, skills and abilities.</p>
					<p class="leading-Automatic mb-0">Carry out national and international events, seminars related to training, advisory, couching and mentoring activities at the level professional, scientific and / or technological linked to the organizations that require the service.</p>
				</div>
			</div>
		</section>
		<!--/section-->

		<!--How to work-->
		<section class="sptb bg-white">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>How It Works?</h2>
					<p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="">
							<div class="mb-lg-0 mb-4">
								<div class="service-card text-center">
									<div class="bg-light icon-bg icon-service text-purple about box-shadow2">
										<img src="../assets/images/png/about/employees.png" alt="img">
									</div>
									<div class="servic-data mt-3">
										<h4 class="font-weight-semibold mb-2">Register</h4>
										<p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="">
							<div class="mb-lg-0 mb-4">
								<div class="service-card text-center">
									<div class="bg-light icon-bg icon-service text-purple about box-shadow2">
										<img src="../assets/images/png/about/megaphone.png" alt="img">
									</div>
									<div class="servic-data mt-3">
										<h4 class="font-weight-semibold mb-2">Make Profile</h4>
										<p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="">
							<div class="mb-sm-0 mb-4">
								<div class="service-card text-center">
									<div class="bg-light icon-bg icon-service text-purple about box-shadow2">
										<img src="../assets/images/png/about/pencil.png" alt="img">
									</div>
									<div class="servic-data mt-3">
										<h4 class="font-weight-semibold mb-2">Add Service</h4>
										<p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="">
							<div class="">
								<div class="service-card text-center">
									<div class="bg-light icon-bg icon-service text-purple about box-shadow2">
										<img src="../assets/images/png/about/coins.png" alt="img">
									</div>
									<div class="servic-data mt-3">
										<h4 class="font-weight-semibold mb-2">Find Service</h4>
										<p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/How to work-->

		<!--Section-->
		<section>
			<div class="cover-image sptb bg-background-color" data-image-src="../assets/images/banners/banner4.jpg">
				<div class="content-text mb-0">
					<div class="container">
						<div class="text-center text-white ">
							<h2 class="mb-2 display-5">Are you ready for the posting you service on this Site?</h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
							<div class="mt-5">
								<a href="{{route('login')}}" class="btn btn-primary btn-pill">Free Post service</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Section-->

		<!--section-->
		<section class="sptb bg-white">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>Our Top Companies</h2>
					<p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
				</div>
				<div class="row">
					<div class="col-xl-4 col-md-12">
						<div class="card mb-xl-0 mb-5 box-shadow2">
							<div class="card-body">
								<div class="team-section text-center">
									<div class="team-img">
										<img src="../assets/images/users/male/1.jpg" class="img-thumbnail rounded-circle alt=" alt="">
									</div>
									<h4 class="font-weight-bold dark-grey-text mt-4">Tracey	Poole</h4>
									<h6 class="font-weight-bold blue-text ">Vehicle Agent 1</h6>
									<p class="font-weight-Automatic dark-grey-text">
									<i class="fa fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-12">
						<div class="card mb-xl-0 mb-5 box-shadow2">
							<div class="card-body">
								<div class="team-section text-center">
									<div class="team-img">
										<img src="../assets/images/users/female/1.jpg" class="img-thumbnail rounded-circle alt=" alt="">
									</div>
									<h4 class="font-weight-bold dark-grey-text mt-4">Harry	Walker</h4>
									<h6 class="font-weight-bold blue-text ">Vehicle Agent 2</h6>
									<p class="font-weight-Automatic dark-grey-text">
									<i class="fa fa-quote-left pr-2"></i>Lorem Ipsum available, quis nostrum exercitationem ullam quis nostrum  corporis suscipit laboriosam, nisi ut aliquid commodi.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-12">
						<div class="card mb-0 box-shadow2">
							<div class="card-body">
								<div class="team-section text-center">
									<div class="team-img">
										<img src="../assets/images/users/male/2.jpg" class="img-thumbnail rounded-circle alt=" alt="">
									</div>
									<h4 class="font-weight-bold dark-grey-text mt-4">Paul White</h4>
									<h6 class="font-weight-bold blue-text ">Modren Vehicle Agent</h6>
									<p class="font-weight-Automatic dark-grey-text">
									<i class="fa fa-quote-left pr-2"></i>Quaerat odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/section-->

		<!-- Newsletter-->
		<section class="sptb2 border-top">
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

		<!--latest Posts-->
		<section class="sptb2 bg-white border-top">
			<div class="container">
				<h6 class="fs-18 mb-4">Latest Posts</h6>
				<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
				<div class="row">
					<div class="col-md-12 col-lg-4">
						<div class="d-flex mt-0 mb-5 mb-lg-0 border bg-light p-4 box-shadow2">
							<img class="w-8 h-8 mr-4" src="../assets/images/media/6.png" alt="img">
							<div class="media-body">
								<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Buy a CrusaderRecusandae</a></h4>
								<span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 13th May 2019</span>
								<div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $128 <del>$218</del></div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="d-flex mt-0 mb-5 mb-lg-0 border bg-light p-4 box-shadow2">
							<img class="w-8 h-8 mr-4" src="../assets/images/media/4.png" alt="img">
							<div class="media-body">
								<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Best New Course</a></h4>
								<span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 20th Jun 2019</span>
								<div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $245 <del>$354</del></div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="d-flex mt-0 mb-0 border bg-light p-4 box-shadow2">
							<img class="w-8 h-8 mr-4" src="../assets/images/media/2.png" alt="img">
							<div class="media-body">
								<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Fuel Effeciency Course</a></h4>
								<span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 14th Aug 2019</span>
								<div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $214 <del>$562</del></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--latest Posts-->

		<!--Footer Section-->
		@include('common.footer')
		<!--Footer Section-->

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>
    
@endsection