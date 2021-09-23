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
			<div class="bannerimg cover-image bg-background3" data-image-src="../assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1>Product Post</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Product Post</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Section-->

		<!--Section-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<div class="col-xl-8">
						<div class="card ">
							<div class="card-header ">
								<h3 class="card-title">Add Post</h3>
							</div>
							<div class="card-body">
								<div class="form-group">
									<label class="form-label text-dark">Product Title</label>
									<input type="text" class="form-control" placeholder="">
								</div>
								<div class="form-group">
									<label class="form-label text-dark">Category</label>
									<select class="form-control custom-select select2">
										<option value="0">Select Option</option>
										<option value="1">Vehicle</option>
									</select>
								</div>
							
								<div class="form-group">
									<label class="form-label text-dark">Description</label>
									<textarea class="form-control" name="example-textarea-input" rows="6" placeholder="text here.."></textarea>
								</div>
								<div class="p-2 border mb-4 form-group">
									<form>
										<label >Upload Images</label>
										<input id="demo" type="file" name="files" accept=".jpg, .png, image/jpeg, image/png" multiple>
									</form>
								</div>
							</div>
							<div class="card-footer ">
								<a href="#" class="btn btn-success">Save Now</a>
							</div>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Terms And Conditions</h3>
							</div>
							<div class="card-body">
								<ul class="list-unstyled widget-spec vertical-scroll mb-0">
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Money Not Refundable
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>You can renew your Premium ad after experted.
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are active for depend on package.
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Money Not Refundable
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>You can renew your Premium ad after experted.
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium Service are active for depend on package.
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Money Not Refundable
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>You can renew your Premium ad after experted.
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium Service are active for depend on package.
									</li>
								</ul>
							</div>
						</div>
						<div class="card mb-0">
							<div class="card-header">
								<h3 class="card-title">Benefits Of Premium Service</h3>
							</div>
							<div class="card-body">
								<ul class="list-unstyled widget-spec  mb-0">
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium Service Active
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium Service are displayed on top
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium Service will be Show in Google results
									</li>
									<li class="ml-5 mb-0">
										<a href="#"> View more..</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div> <!-- end row -->
			</div>
		</section>
		<!--/Section-->

		<!--Footer Section-->
		@include('common.footer')
		<!--Footer Section-->

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>
   
@endsection