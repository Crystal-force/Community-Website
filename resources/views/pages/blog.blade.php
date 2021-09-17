@extends('layout.index')
@section('content')
		<!--Loader-->
		<div id="global-loader">
			<img src="../assets/preloader/Fidget-spinner.gif" class="loader-img " alt="">
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
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="row">
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card">
									<div class="item7-card-img">
										<a href="{{route('blog-detail')}}"></a>
										<img src="../assets/images/media/others/f1.jpg" alt="img" class="cover-image">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-2">
											<a href="{{route('blog-detail')}}"><i class="fa fa-calendar-o text-muted mr-2"></i>Dec-03-2019</a>
											<div class="ml-auto">
												<a href=""><i class="fa fa-comment-o text-muted mr-2"></i>4 Comments</a>
											</div>
										</div>
										<a href="{{route('blog-detail')}}" class="text-dark"><h4 class="font-weight-semibold">Bennington</h4></a>
										<p>Lorem Ipsum available, quis exercitationem into enim ad Ipsum available, quis nostrum itationem </p>
										<a href="{{route('blog-detail')}}" class="btn btn-primary btn-sm">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card">
									<div class="item7-card-img">
										<a href="#"></a>
										<img src="../assets/images/media/others/j2.jpg" alt="img" class="cover-image">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-2">
											<a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Nov-28-2019</a>
											<div class="ml-auto">
												<a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>2 Comments</a>
											</div>
										</div>
										<a href="#" class="text-dark"><h4 class="font-weight-semibold">Herkime</h4></a>
										<p>Lorem Ipsum available, quis exercitationem into enim ad Ipsum available, quis nostrum itationem </p>
										<a href="#" class="btn btn-primary btn-sm">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card">
									<div class="item7-card-img">
										<a href="#"></a>
										<img src="../assets/images/media/others/b2.jpg" alt="img" class="cover-image">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-2">
											<a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Nov-19-2019</a>
											<div class="ml-auto">
												<a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>8 Comments</a>
											</div>
										</div>
										<a href="#" class="text-dark"><h4 class="font-weight-semibold">Millenium</h4></a>
										<p>Lorem Ipsum available, quis exercitationem into enim ad Ipsum available, quis nostrum itationem </p>
										<a href="#" class="btn btn-primary btn-sm">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card">
									<div class="item7-card-img">
										<a href="#"></a>
										<img src="../assets/images/media/others/j2.jpg" alt="img" class="cover-image">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-2">
											<a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Nov-28-2019</a>
											<div class="ml-auto">
												<a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>2 Comments</a>
											</div>
										</div>
										<a href="#" class="text-dark"><h4 class="font-weight-semibold">Herkime</h4></a>
										<p>Lorem Ipsum available, quis exercitationem into enim ad Ipsum available, quis nostrum itationem </p>
										<a href="#" class="btn btn-primary btn-sm">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card">
									<div class="item7-card-img">
										<a href="#"></a>
										<img src="../assets/images/media/others/b2.jpg" alt="img" class="cover-image">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-2">
											<a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Nov-19-2019</a>
											<div class="ml-auto">
												<a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>8 Comments</a>
											</div>
										</div>
										<a href="#" class="text-dark"><h4 class="font-weight-semibold">Millenium</h4></a>
										<p>Lorem Ipsum available, quis exercitationem into enim ad Ipsum available, quis nostrum itationem </p>
										<a href="#" class="btn btn-primary btn-sm">Read More</a>
									</div>
								</div>
							</div>
              <div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card">
									<div class="item7-card-img">
										<a href="#"></a>
										<img src="../assets/images/media/others/f1.jpg" alt="img" class="cover-image">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-2">
											<a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Dec-03-2019</a>
											<div class="ml-auto">
												<a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>4 Comments</a>
											</div>
										</div>
										<a href="#" class="text-dark"><h4 class="font-weight-semibold">Bennington</h4></a>
										<p>Lorem Ipsum available, quis exercitationem into enim ad Ipsum available, quis nostrum itationem </p>
										<a href="#" class="btn btn-primary btn-sm">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Add listing-->

		<!--Footer Section-->
		@include('common.footer')
		<!--Footer Section-->

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>
   
@endsection