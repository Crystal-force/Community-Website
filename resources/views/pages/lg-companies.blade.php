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

		<!--Section-->
		<div>
			<div class="cover-image sptb-1 bg-background" data-image-src="../assets/images/banners/banner3.jpg">
				<div class="header-text1 mb-0">
					<div class="container">
						<div class="row">
							<div class="col-xl-8 col-lg-12 col-md-12 d-block mx-auto">
								<div class="search-background mb-0">
									<div class="form row no-gutters">
										<div class="form-group  col-xl-6 col-lg-5 col-md-12 mb-0">
											<input type="text" class="form-control input-lg" id="text" placeholder="Search Company Name">
										</div>
										<div class="form-group col-xl-4 col-lg-4 select2-lg  col-md-12 mb-0">
											<select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
												<optgroup label="Categories">
													<option>Profile</option>
													<option value="1">Admin</option>
													<option value="2">Chef</option>
													<option value="3">Beautician</option>
													<option value="4">IT/Hardware</option>
													<option value="5">Driver</option>
													<option value="6">IT/Software</option>
													<option value="7">HR Recruiter</option>
													<option value="8">Customer Support(BPO)</option>
													<option value="9">Sales</option>
													<option value="10">Teachers/Lecturers</option>
													<option value="11">Life Insurance</option>
													<option value="12">Delivery Boy</option>
												</optgroup>
											</select>
										</div>
										<div class="col-xl-2 col-lg-3 col-md-12 mb-0">
											<a href="#" class="btn btn-lg btn-block btn-primary br-bl-0 br-tl-0">Search Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /header-text -->
			</div>
		</div>
		<!--Section-->

		<!--Breadcrumb-->
		<div class="bg-white border-bottom">
			<div class="container">
				<div class="page-header">
					<h4 class="page-title">Companies</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Companies</li>
					</ol>
				</div>
			</div>
		</div>
		<!--Breadcrumb-->

		<!-- User-All-->
		<section class="sptb">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>Companies List</h2>
					<p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
				</div>
				<div class="row">
					<div class="col-lg-12 users-list">
						<div class="page-header bg-white mb-4 p-4 border">
							<select class="form-control page-select">
								<option value="0">All</option>
								<option value="1">New</option>
								<option value="2">Popular</option>
							</select>
							<div class="page-options d-flex">
								<div class="input-group">
									<input type="text" class="form-control br-tl-3  br-bl-3" placeholder="search">
									<div class="input-group-append ">
										<button type="button" class="btn btn-primary br-tr-3  br-br-3">
											<i class="fa fa-search" aria-hidden="true"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
        <div class="row">
          <div class="col-lg-4 col-md-12">
            <a href="{{route('lg-companies-profile')}}" class="companies-area">
              <div class="card" style="height: 100%">
                <div class="card-body">
                  <div class="service-card text-center">
                    <div class="bg-purple-transparent icon-bg icon-service text-purple">
                      <div class="team-img d-flex justify-content-center">
                        <img src="../assets/img/users/avatar.png" class="img-thumbnail rounded-circle" alt="">
                      </div>
                    </div>
                    <div class="servic-data mt-3">
                      <a href="#"><h4 class="font-weight-semibold mb-2 companies-name">HSE Higher School of Economics</h4></a>
                    </div>
                    <div class="mt-4">
                      <div class="">
                        <p class="companies-attribue mb-1"><i class="fa fa-map  mr-1 text-muted"></i> Moscow, Russian Federation</p>
                        <p class="companies-attribue mb-1"><i class="fa fa-user  mr-1 text-muted"></i> 18 students</p>
                        <p class="companies-attribue mb-1"><i class="fa fa-leanpub  mr-1 text-muted"></i> 180 products published</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-12">
            <a href="#" class="companies-area">
              <div class="card" style="height: 100%">
                <div class="card-body">
                  <div class="service-card text-center">
                    <div class="bg-purple-transparent icon-bg icon-service text-purple">
                      <div class="team-img d-flex justify-content-center">
                        <img src="../assets/img/users/bu_logo_1.png" class="img-thumbnail rounded-circle" alt="">
                      </div>
                    </div>
                    <div class="servic-data mt-3">
                      <a href="#"><h4 class="font-weight-semibold mb-2 companies-name">UMA Universidad de Málaga</h4></a>
                    </div>
                    <div class="mt-4">
                      <div class="">
                        <p class="companies-attribue mb-1"><i class="fa fa-map  mr-1 text-muted"></i> Moscow, Russian Federation</p>
                        <p class="companies-attribue mb-1"><i class="fa fa-user  mr-1 text-muted"></i> 18 students</p>
                        <p class="companies-attribue mb-1"><i class="fa fa-leanpub  mr-1 text-muted"></i> 180 products published</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-12">
            <a href="#" class="companies-area">
              <div class="card" style="height: 100%">
                <div class="card-body">
                  <div class="service-card text-center">
                    <div class="bg-purple-transparent icon-bg icon-service text-purple">
                      <div class="team-img d-flex justify-content-center">
                        <img src="../assets/img/users/bu_logo_2.png" class="img-thumbnail rounded-circle" alt="">
                      </div>
                    </div>
                    <div class="servic-data mt-3">
                      <a href="#"><h4 class="font-weight-semibold mb-2 companies-name">AN Kosygin Moscow State Textile University</h4></a>
                    </div>
                    <div class="mt-4">
                      <div class="">
                        <p class="companies-attribue mb-1"><i class="fa fa-map  mr-1 text-muted"></i> Moscow, Russian Federation</p>
                        <p class="companies-attribue mb-1"><i class="fa fa-user  mr-1 text-muted"></i> 18 students</p>
                        <p class="companies-attribue mb-1"><i class="fa fa-leanpub  mr-1 text-muted"></i> 180 products published</p>
                      </div>
                    </div>
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
		</section>
		<!--/User-All-->

    

		<!-- Newsletter-->
		<section class="sptb2 bg-white border-top">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-7 col-md-12">
						<div class="sub-newsletter">
							<h3 class="mb-2"><i class="fa fa-paper-plane-o mr-2"></i> Subscribe To Our Newsletter</h3>
							<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-xl-6 col-lg-5 col-md-12">
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