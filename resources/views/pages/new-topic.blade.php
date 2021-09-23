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