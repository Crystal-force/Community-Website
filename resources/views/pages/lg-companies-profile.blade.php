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

		<!--Breadcrumb-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-image-src="../assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white ">
							<h1 class="">Company Profile</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Company Profile</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Breadcrumb-->

		<!--User Profile-->
		<section class="sptb mt-7">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body pattern-1">
								<div class="wideget-user">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<div class="wideget-user-desc text-center">
												<div class="team-img d-flex justify-content-center">
                          <img src="../assets/img/users/bu_logo_1.png" class="img-thumbnail rounded-circle w-15" alt="">
                        </div>
												<div class="user-wrap wideget-user-info">
													<a href="#" class="text-white"><h4 class="font-weight-semibold">UMA Universidad de Málaga</h4></a>
													<div class="wideget-user-rating d-flex justify-content-center">
														<p class="mr-1 ml-1"><i class="fa fa-map  mr-1 text-muted text-warning mr-1 text-white"></i><span class="text-white">Moscow, Russian Federation</span></p>
														<p class="mr-1 ml-1"><i class="fa fa-user  mr-1 text-muted text-warning mr-1 text-white"></i><span class="text-white">18 students</span></p>
														<p class="mr-1 ml-1"><i class="fa fa-leanpub  mr-1 text-muted text-warning mr-1 text-white"></i><span class="text-white">180 products published</span></p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-12 col-md-12 text-center">
											<div class="wideget-user-info ">
												<div class="wideget-user-icons mt-2">
													<a href="#" class="facebook-bg mt-0"><i class="fa fa-facebook"></i></a>
													<a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
													<a href="#" class="google-bg"><i class="fa fa-google"></i></a>
													<a href="#" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<div class="wideget-user-tab">
									<div class="tab-menu-heading">
										<div class="tabs-menu1">
											<ul class="nav">
												<li class=""><a href="#tab-5" class="active" data-toggle="tab">Profile</a></li>
                        <li><a href="#tab-6" data-toggle="tab" class="">Products <span class="badge badge-primary badge-pill">5</span></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="card mb-0">
							<div class="card-body">
								<div class="border-0">
									<div class="tab-content">
										<div class="tab-pane active" id="tab-5">
											<div class="profile-log-switch">
												<div class="media-heading">
													<h3 class="card-title mb-3 font-weight-bold">Personal Details</h3>
												</div>
												<ul class="usertab-list mb-0">
													<li><a href="#" class="text-dark"><span class="font-weight-semibold">Full Name :</span> Robert	McLean</a></li>
													<li><a href="#" class="text-dark"><span class="font-weight-semibold">Location :</span>  Moscow, Russian Federation</a></li>
													<li><a href="#" class="text-dark"><span class="font-weight-semibold">Languages :</span> English, Spanish,Vehiclenish.</a></li>
													<li><a href="#" class="text-dark"><span class="font-weight-semibold">Email :</span> robertmcleanr@Autolist.com</a></li>
													<li><a href="#" class="text-dark"><span class="font-weight-semibold">Phone :</span> +125 254 3562 </a></li>
												</ul>
												<div class="row profie-img">
													<div class="col-md-12">
														<div class="media-heading">
															<h3 class="card-title mb-3 font-weight-bold">Nordic-style Crochet Designer and Yarnbomber</h3>
														</div>
														<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus how to pursue pleasure rationally encounter but because those who do not know how to pursue consequences that are extremely</p>
														<p class="mb-0">because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter but because those who do not know how to pursue consequences the extre painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab-6">
											<div class="row">
												<div class="col-lg-3 col-md-12 col-sm-12">
                          <a href="{{route('product-detail')}}">
                              <div class="card">
                                  <div class="card-body products-card">
                                      <div class="product-item text-center">
                                          <img src="../assets/images/media/2.png" alt="img">
                                      </div>
                                  </div>
                                  <div class="card-footer products-card-footer">
                                      <h5 class="text-center mb-0 font-weight-semibold">Sherbrooke</h5>
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
                                    </div>
                                </div>
                            </a>
                        </div>
                      </div>
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
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/User Profile-->

		<!-- Newsletter-->
		<section class="sptb2 bg-white border-top">
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

		<!--Footer Section-->
		@include('common.footer')
		<!--Footer Section-->

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>
   
@endsection