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

    <div class="container">
      <div class="row">
        <div class="card">
        </div>
      </div>
    </div>

		<!--Breadcrumbs Section-->
		<div class="bannerimg cover-image bg-background3" data-image-src="../assets/images/banners/banner2.jpg">
			<div class="header-text mb-0">
				<div class="container">
					<div class="text-center text-white ">
						<h1 class="">Add New Topic</h1>
						<ol class="breadcrumb text-center">
							<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
							<li class="breadcrumb-item active text-white" aria-current="page">Add New Topic</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!--Breadcrumbs Section-->

		
		@include('common.footer')
		<!--Footer Section-->

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>
   
@endsection