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

		<!--Breadcrumbs Section-->
		<div class="bannerimg cover-image bg-background3" data-image-src="../assets/images/banners/banner2.jpg">
			<div class="header-text mb-0">
				<div class="container">
					<div class="text-center text-white ">
						<h1 class="">Products</h1>
						<ol class="breadcrumb text-center">
							<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
							<li class="breadcrumb-item active text-white" aria-current="page">Products</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!--Breadcrumbs Section-->

		<!--Section-->
		<div class="container">
			<hr>
			<div class="row">
				<div class="items-blog-tab-heading row">
					<div class="col-12">
						<ul class="nav items-blog-tab-menu">
							<li class=""><a href="#tab-1" class="active show btn-pill" data-toggle="tab">Featured</a></li>
							<li><a href="#tab-2" data-toggle="tab" class="">Course projects</a></li>
							<li><a href="#tab-3" data-toggle="tab" class="">Highest rated</a></li>
							<li><a href="#tab-4" data-toggle="tab" class="">Most commented</a></li>
							<li><a href="#tab-5" data-toggle="tab" class="">Most viewed</a></li>
							<li><a href="#tab-5" data-toggle="tab" class="">Recent</a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<hr>
			<hr>
			<div class="row">
				<div class="btn-list">
					<a href="{{route('new-product')}}"><button type="button" class="btn btn-dark"><i class="fe fe-plus mr-2" ></i>Add product</button></a>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-lg-4 col-md-12">
					<a href="{{route('lg-product-detail')}}">
						<div class="card">
							<div class="bg-white h-100">
								<img class="card-img-top br-tr-7 br-tl-7" src="../assets/images/media/mensjackets.png" alt="">
							</div>
							<div class="card-body border-top">
								<div class="product-5">
									<div class="product-5-rating">
										<h4 class="font-weight-semibold mt-2 mb-0"><a href="#">Harlequin Recusandae</a></h4>
									</div>
									<div class="product-5-desc ml-auto ">
										<p class="mb-2 mt-2 fs-12">by<span class="fs-12 text-muted ml-2">tesdeade</span></h4>
									</div>
									<div class="item-card9-footer d-sm-flex">
										<div class="ml-auto">
											<a href="#" class="mr-2 mt-1 mb-1 float-left" title="message"><i class="fa fa-comment-o  mr-1 text-muted"></i> 12</a>
											<a href="#" class="mr-2 mt-1 mb-1 float-left" title="favorites"><i class="fa fa-heart-o text-muted mr-1 "></i>450</a>
											<a href="#" class="mr-2 mt-1 mb-1 float-left" title="visitors"><i class="fa fa-eye text-muted mr-1 "></i>50</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="card">
						<div class="bg-white h-100">
							<img class="card-img-top br-tr-7 br-tl-7" src="../assets/images/media/mensjackets.png" alt="">
						</div>
						<div class="card-body border-top">
							<div class="product-5">
								<div class="product-5-rating">
									<h4 class="font-weight-semibold mt-2 mb-0"><a href="#">Harlequin Recusandae</a></h4>
								</div>
								<div class="product-5-desc ml-auto ">
									<p class="mb-2 mt-2 fs-12">by<span class="fs-12 text-muted ml-2">tesdeade</span></h4>
								</div>
								<div class="item-card9-footer d-sm-flex">
									<div class="ml-auto">
										<a href="#" class="mr-2 mt-1 mb-1 float-left" title="message"><i class="fa fa-comment-o  mr-1 text-muted"></i> 12</a>
										<a href="#" class="mr-2 mt-1 mb-1 float-left" title="favorites"><i class="fa fa-heart-o text-muted mr-1 "></i>450</a>
										<a href="#" class="mr-2 mt-1 mb-1 float-left" title="visitors"><i class="fa fa-eye text-muted mr-1 "></i>50</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="card">
						<div class="bg-white h-100">
							<img class="card-img-top br-tr-7 br-tl-7" src="../assets/images/media/mensjackets.png" alt="">
						</div>
						<div class="card-body border-top">
							<div class="product-5">
								<div class="product-5-rating">
									<h4 class="font-weight-semibold mt-2 mb-0"><a href="#">Harlequin Recusandae</a></h4>
								</div>
								<div class="product-5-desc ml-auto ">
									<p class="mb-2 mt-2 fs-12">by<span class="fs-12 text-muted ml-2">tesdeade</span></h4>
								</div>
								<div class="item-card9-footer d-sm-flex">
									<div class="ml-auto">
										<a href="#" class="mr-2 mt-1 mb-1 float-left" title="message"><i class="fa fa-comment-o  mr-1 text-muted"></i> 12</a>
										<a href="#" class="mr-2 mt-1 mb-1 float-left" title="favorites"><i class="fa fa-heart-o text-muted mr-1 "></i>450</a>
										<a href="#" class="mr-2 mt-1 mb-1 float-left" title="visitors"><i class="fa fa-eye text-muted mr-1 "></i>50</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr>
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
									<a href="#" class="mr-2 mt-1 mb-1 float-left" title="message"><i class="fa fa-comment-o  mr-1 text-muted"></i> 12</a>
									<a href="#" class="mr-2 mt-1 mb-1 float-left" title="favorites"><i class="fa fa-heart-o text-muted mr-1 "></i>450</a>
									<a href="#" class="mr-2 mt-1 mb-1 float-left" title="visitors"><i class="fa fa-eye text-muted mr-1 "></i>50</a>
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
									<a href="#" class="mr-2 mt-1 mb-1 float-left" title="message"><i class="fa fa-comment-o  mr-1 text-muted"></i> 12</a>
									<a href="#" class="mr-2 mt-1 mb-1 float-left" title="favorites"><i class="fa fa-heart-o text-muted mr-1 "></i>450</a>
									<a href="#" class="mr-2 mt-1 mb-1 float-left" title="visitors"><i class="fa fa-eye text-muted mr-1 "></i>50</a>
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
									<img src="../assets/images/media/2.png" alt="img">
								</div>
							</div>
							<div class="card-footer products-card-footer">
								<h5 class="text-center mb-0 font-weight-semibold">Sherbrooke</h5>
								<p class="mb-0">by business name</p>
							</div>
							<div class="item-card9-footer d-sm-flex">
								<div class="ml-auto">
									<a href="#" class="mr-2 mt-1 mb-1 float-left" title="message"><i class="fa fa-comment-o  mr-1 text-muted"></i> 12</a>
									<a href="#" class="mr-2 mt-1 mb-1 float-left" title="favorites"><i class="fa fa-heart-o text-muted mr-1 "></i>450</a>
									<a href="#" class="mr-2 mt-1 mb-1 float-left" title="visitors"><i class="fa fa-eye text-muted mr-1 "></i>50</a>
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
									<img src="../assets/images/media/2.png" alt="img">
								</div>
							</div>
							<div class="card-footer products-card-footer">
								<h5 class="text-center mb-0 font-weight-semibold">Sherbrooke</h5>
								<p class="mb-0">by business name</p>
							</div>
							<div class="item-card9-footer d-sm-flex">
								<div class="ml-auto">
									<a href="#" class="mr-2 mt-1 mb-1 float-left" title="message"><i class="fa fa-comment-o  mr-1 text-muted"></i> 12</a>
									<a href="#" class="mr-2 mt-1 mb-1 float-left" title="favorites"><i class="fa fa-heart-o text-muted mr-1 "></i>450</a>
									<a href="#" class="mr-2 mt-1 mb-1 float-left" title="visitors"><i class="fa fa-eye text-muted mr-1 "></i>50</a>
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
									<img src="../assets/images/media/2.png" alt="img">
								</div>
							</div>
							<div class="card-footer products-card-footer">
								<h5 class="text-center mb-0 font-weight-semibold">Sherbrooke</h5>
								<p class="mb-0">by business name</p>
							</div>
							<div class="item-card9-footer d-sm-flex">
								<div class="ml-auto">
									<a href="#" class="mr-2 mt-1 mb-1 float-left" title="message"><i class="fa fa-comment-o  mr-1 text-muted"></i> 12</a>
									<a href="#" class="mr-2 mt-1 mb-1 float-left" title="favorites"><i class="fa fa-heart-o text-muted mr-1 "></i>450</a>
									<a href="#" class="mr-2 mt-1 mb-1 float-left" title="visitors"><i class="fa fa-eye text-muted mr-1 "></i>50</a>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="card-body">
					<div class="text-wrap">
						<div class="project-more-btn">
							<div class="btn-list">
								<a href="#" class="btn btn-outline-primary btn-pill show-more-btn">Show more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Footer Section-->
		@include('common.footer')
		<!--Footer Section-->

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>
   
@endsection