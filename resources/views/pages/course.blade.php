@extends('layout.index')
@section('content')
		<!--Loader-->
		<div id="global-loader">
			<img src="../assets/preloader/index.svg" class="loader-img " alt="">
		</div>

		@include('common.top-header')

		<!--Section-->
		<div>
			<div class="cover-image sptb-1 bg-background" data-image-src="../assets/images/banners/banner1.jpg">
				<div class="header-text1 mb-0">
					<div class="container">
						<div class="row">
							<div class="col-xl-10 col-lg-12 col-md-12 d-block mx-auto">
								<div class="text-center text-white ">
									<h1 class=""><span class="font-weight-bold">16,25,365&nbsp;</span>Offered Courses Available</h1>
								</div>
								<div class="search-background bg-transparent mt-5">
									<div class="form row no-gutters ">
										<div class="form-group  col-xl-7 col-lg-3 col-md-12 mb-0 bg-white ">
											<input type="text" class="form-control input-lg br-tr-md-0 br-br-md-0 border-right-0" id="text4" placeholder="Search Course">
										</div>
										<div class="form-group col-xl-3 col-lg-3 col-md-12 select2-lg  mb-0 bg-white">
											<select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
												<optgroup label="Courses">
                          <option value="0">All time</option>
													<option value="1">This week</option>
													<option value="2">This month</option>
													<option value="3">This year</option>
													<option value="4">Chittenden</option>
												</optgroup>
											</select>
										</div>
										<div class="col-xl-2 col-lg-3 col-md-12 mb-0">
											<a href="#" class="btn btn-lg btn-block btn-primary br-tl-md-0 br-bl-md-0 right-0">Search Here</a>
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
					<h4 class="page-title">Course list</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{route('main')}}">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Course list</li>
					</ol>
				</div>
			</div>
		</div>
		<!--/Breadcrumb-->

		<!--listing-->
		<section class="sptb">
			<div class="container">
				<div class="row">

					<!--Left Side Content-->
					<div class="col-xl-3 col-lg-3 col-md-12">
						<div class="card overflow-hidden">
							<div class="px-4 py-3 border-bottom">
								<h4 class="mb-0">Products</h4>
							</div>
              <div class="card-body">
								<div class="filter-product-checkboxs">
								<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
										<span class="custom-control-label">
											All
										</span>
									</label>

									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox1" value="option1">
										<span class="custom-control-label">
											New
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
										<span class="custom-control-label">
											Best Seller
										</span>
									</label>
								</div>
							</div>
							<div class="px-4 py-3 border-bottom border-top">
								<h4 class="mb-0">Posted By</h4>
							</div>
							<div class="card-body">
								<div class="filter-product-checkboxs">
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox1" value="option1">
										<span class="custom-control-label">
											Institution
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
										<span class="custom-control-label">
											Company
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-0">
										<input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
										<span class="custom-control-label">
											Natural person
										</span>
									</label>
								</div>
							</div>
							<div class="px-4 py-3 border-bottom border-top">
								<h4 class="mb-0">Language</h4>
							</div>
							<div class="card-body">
								<div class="filter-product-checkboxs">
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox11" value="option1">
										<span class="custom-control-label">
											English
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox12" value="option2">
										<span class="custom-control-label">
											Spanish
										</span>
									</label>
								</div>
							</div>
							<div class="card-footer">
								<a href="#" class="btn btn-secondary btn-block">Apply Filter</a>
							</div>
						</div>
						<div class="card mb-lg-0">
							<div class="card-header">
								<h3 class="card-title">Shares</h3>
							</div>
							<div class="card-body product-filter-desc">
								<div class="product-filter-icons text-center">
									<a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
									<a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
									<a href="#" class="google-bg"><i class="fa fa-google"></i></a>
									<a href="#" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
									<a href="#" class="pinterest-bg"><i class="fa fa-pinterest"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!--/Left Side Content-->

					<div class="col-xl-9 col-lg-9 col-md-12">
						<!--Lists-->
						<div class=" mb-0">
							<div class="">
								<div class="item2-gl ">
									<div class=" mb-0">
										<div class="">
											<div class="bg-white p-5 item2-gl-nav d-flex">
												<h6 class="mb-0 mt-3 text-left">Showing 1 to 10 of 30 entries</h6>
												<ul class="nav item2-gl-menu ml-auto mt-1">
                          <li><a href="#tab-11" data-toggle="tab" class="active show" title="Grid"><i class="fa fa-th"></i></a></li>
												</ul>
												<div class="d-sm-flex">
													<label class="mr-2 mt-2 mb-sm-1">Sort By:</label>
													<div class="selectgroup">
														<label class="selectgroup-item mb-md-0">
															<input type="radio" name="value" value="Popularity" class="selectgroup-input" onclick="AllTimeCourse()" checked>
															<span class="selectgroup-button">All time </span>
														</label>
														<label class="selectgroup-item mb-md-0">
															<input type="radio" name="value" value="Popularity" class="selectgroup-input" onclick="ThisWeekCourse()">
															<span class="selectgroup-button">This week</span>
														</label>
														<label class="selectgroup-item mb-md-0">
															<input type="radio" name="value" value="Latest" class="selectgroup-input">
															<span class="selectgroup-button">This month</span>
														</label>
														<label class="selectgroup-item mb-0">
															<input type="radio" name="value" value="Rating" class="selectgroup-input">
															<span class="selectgroup-button">This year</span>
														</label>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="tab-content">
                    <div class="tab-pane active" id="tab-11">
											<div class="row">
                        <div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															<div class="arrow-ribbon bg-primary">$635.00</div>
															<div class="item-card9-imgs">
																<a class="link" href="{{route('course-detail')}}"></a>
																<img src="../assets/images/media/j3.png" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="{{route('course-detail')}}" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
															</div>
															<div class="item-overly-trans">
																<span><a href="{{route('course-detail')}}" class="bg-success">New</a></span>
															</div>
														</div>
														<div class="card border-0 mb-0">
															<div class="card-body ">
																<div class="item-card9">
																	<a href="#" class="text-dark"><h4 class="font-weight-semibold mt-1"> Dignissimos</h4></a>
																	<div class="item-card9-desc mb-2">
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-handshake-o text-muted mr-1"></i> Business name</span></a>
																	</div>
																	<p class="mb-0 leading-tight">Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                  <div class="mt-2">
                                    <a href="#" class="mr-4" id="posted-date"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i>  09/12 2021</span></a>
                                  </div>
																</div>
															</div>
															<div class="card-footer pt-4 pb-4 pr-4 pl-4">
																<div class="item-card9-footer d-sm-flex">
																	<div class="ml-auto">
																		<a href="#" class="mr-2 mt-1 mb-1 float-left" title="Students"><i class="fa fa-user-o  mr-1 text-muted"></i> 1544</a>
																		<a href="#" class="mr-2 mt-1 mb-1 float-left" title="98% of the 1099 student ratings are positive"><i class="fa fa-thumbs-o-up text-muted mr-1 "></i>99%(450)</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															<div class="arrow-ribbon bg-primary">$635.00</div>
															<div class="item-card9-imgs">
																<a class="link" href="#"></a>
																<img src="../assets/images/media/j3.png" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
															</div>
															<div class="item-overly-trans">
																<span><a href="#" class="bg-success">New</a></span>
															</div>
														</div>
														<div class="card border-0 mb-0">
															<div class="card-body ">
																<div class="item-card9">
																	<a href="#" class="text-dark"><h4 class="font-weight-semibold mt-1"> Dignissimos</h4></a>
																	<div class="item-card9-desc mb-2">
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-handshake-o text-muted mr-1"></i> Business name</span></a>
																	</div>
																	<p class="mb-0 leading-tight">Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                  <div class="mt-2">
                                    <a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i>  09/11 2021</span></a>
                                  </div>
																</div>
															</div>
															<div class="card-footer pt-4 pb-4 pr-4 pl-4">
																<div class="item-card9-footer d-sm-flex">
																	<div class="ml-auto">
																		<a href="#" class="mr-2 mt-1 mb-1 float-left" title="Students"><i class="fa fa-user-o  mr-1 text-muted"></i> 1544</a>
																		<a href="#" class="mr-2 mt-1 mb-1 float-left" title="98% of the 1099 student ratings are positive"><i class="fa fa-thumbs-o-up text-muted mr-1 "></i>99%(450)</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															<div class="arrow-ribbon bg-primary">$256.00</div>
															<div class="item-card9-imgs">
																<a class="link" href="#"></a>
																<img src="../assets/images/media/v1.png" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
															</div>
															<div class="item-overly-trans">
																<div class="rating-stars">
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="4">
																	<div class="rating-stars-container">
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																	</div>
																</div>
																<span>
																	<a href="#" class="bg-danger">Best Seller</a>
																</span>
															</div>
														</div>
														<div class="card border-0 mb-0">
															<div class="card-body ">
																<div class="item-card9">
																	<div class="rating-stars">
																		<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																	</div>
																	<a href="#" class="text-dark"><h4 class="font-weight-semibold mt-1">Chittenden</h4></a>
																	<div class="item-card9-desc mb-2">
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-handshake-o text-muted mr-1"></i> Business name</span></a>
																	</div>
																	<p class="mb-0 leading-tight">Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                  <div class="mt-2">
                                    <a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i>  09/02 2021</span></a>
                                  </div>
																</div>
															</div>
															<div class="card-footer pt-4 pb-4 pr-4 pl-4">
																<div class="item-card9-footer d-sm-flex">
																	<div class="ml-auto">
																		<a href="#" class="mr-2 mt-1 mb-1 float-left" title="Students"><i class="fa fa-user-o  mr-1 text-muted"></i> 1544</a>
																		<a href="#" class="mr-2 mt-1 mb-1 float-left" title="98% of the 1099 student ratings are positive"><i class="fa fa-thumbs-o-up text-muted mr-1 "></i>99%(450)</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															<div class="arrow-ribbon bg-primary">$635.00</div>
															<div class="item-card9-imgs">
																<a class="link" href="#"></a>
																<img src="../assets/images/media/j3.png" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
															</div>
															<div class="item-overly-trans">
																<span><a href="#" class="bg-success">New</a></span>
															</div>
														</div>
														<div class="card border-0 mb-0">
															<div class="card-body ">
																<div class="item-card9">
																	<a href="#" class="text-dark"><h4 class="font-weight-semibold mt-1"> Dignissimos</h4></a>
																	<div class="item-card9-desc mb-2">
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-handshake-o text-muted mr-1"></i> Business name</span></a>
																	</div>
																	<p class="mb-0 leading-tight">Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                  <div class="mt-2">
                                    <a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i>  08/23 2021</span></a>
                                  </div>
																</div>
															</div>
															<div class="card-footer pt-4 pb-4 pr-4 pl-4">
																<div class="item-card9-footer d-sm-flex">
																	<div class="ml-auto">
																		<a href="#" class="mr-2 mt-1 mb-1 float-left" title="Students"><i class="fa fa-user-o  mr-1 text-muted"></i> 1544</a>
																		<a href="#" class="mr-2 mt-1 mb-1 float-left" title="98% of the 1099 student ratings are positive"><i class="fa fa-thumbs-o-up text-muted mr-1 "></i>99%(450)</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															<div class="arrow-ribbon bg-primary">$635.00</div>
															<div class="item-card9-imgs">
																<a class="link" href="#"></a>
																<img src="../assets/images/media/j3.png" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
															</div>
															<div class="item-overly-trans">
																<span><a href="#" class="bg-success">New</a></span>
															</div>
														</div>
														<div class="card border-0 mb-0">
															<div class="card-body ">
																<div class="item-card9">
																	<a href="#" class="text-dark"><h4 class="font-weight-semibold mt-1"> Dignissimos</h4></a>
																	<div class="item-card9-desc mb-2">
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-handshake-o text-muted mr-1"></i> Business name</span></a>
																	</div>
																	<p class="mb-0 leading-tight">Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                  <div class="mt-2">
                                    <a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i>  08/06 2021</span></a>
                                  </div>
																</div>
															</div>
															<div class="card-footer pt-4 pb-4 pr-4 pl-4">
																<div class="item-card9-footer d-sm-flex">
																	<div class="ml-auto">
																		<a href="#" class="mr-2 mt-1 mb-1 float-left" title="Students"><i class="fa fa-user-o  mr-1 text-muted"></i> 1544</a>
																		<a href="#" class="mr-2 mt-1 mb-1 float-left" title="98% of the 1099 student ratings are positive"><i class="fa fa-thumbs-o-up text-muted mr-1 "></i>99%(450)</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															<div class="arrow-ribbon bg-primary">$256.00</div>
															<div class="item-card9-imgs">
																<a class="link" href="#"></a>
																<img src="../assets/images/media/v1.png" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
															</div>
															<div class="item-overly-trans">
																<div class="rating-stars">
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="4">
																	<div class="rating-stars-container">
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																	</div>
																</div>
																<span>
																	<a href="#" class="bg-danger">Best Seller</a>
																</span>
															</div>
														</div>
														<div class="card border-0 mb-0">
															<div class="card-body ">
																<div class="item-card9">
																	<div class="rating-stars">
																		<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																	</div>
																	<a href="#" class="text-dark"><h4 class="font-weight-semibold mt-1">Chittenden</h4></a>
																	<div class="item-card9-desc mb-2">
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-handshake-o text-muted mr-1"></i> Business name</span></a>
																	</div>
																	<p class="mb-0 leading-tight">Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                  <div class="mt-2">
                                    <a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i>  07/25 2021</span></a>
                                  </div>
																</div>
															</div>
															<div class="card-footer pt-4 pb-4 pr-4 pl-4">
																<div class="item-card9-footer d-sm-flex">
																	<div class="ml-auto">
																		<a href="#" class="mr-2 mt-1 mb-1 float-left" title="Students"><i class="fa fa-user-o  mr-1 text-muted"></i> 1544</a>
																		<a href="#" class="mr-2 mt-1 mb-1 float-left" title="98% of the 1099 student ratings are positive"><i class="fa fa-thumbs-o-up text-muted mr-1 "></i>99%(450)</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												
												
                        <div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															<div class="arrow-ribbon bg-primary">$748.00</div>
															<div class="item-card9-imgs">
																<a class="link" href="#"></a>
																<img src="../assets/images/media/h4.png" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1 wishlist"> <i class="fa fa fa-heart-o"></i></a>
															</div>
															<div class="item-overly-trans">
																<div class="rating-stars">
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																	<div class="rating-stars-container">
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="card border-0 mb-0">
															<div class="card-body ">
																<div class="item-card9">
																	<a href="#" class="text-dark"><h4 class="font-weight-semibold mt-1"> Dignissimos</h4></a>
																	<div class="item-card9-desc mb-2">
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-handshake-o text-muted mr-1"></i> Business name</span></a>
																	</div>
																	<p class="mb-0 leading-tight">Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                  <div class="mt-2">
                                  <a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i>  08/15 2020</span></a>
                                  </div>
																</div>
															</div>
															<div class="card-footer pt-4 pb-4 pr-4 pl-4">
																<div class="item-card9-footer d-sm-flex">
																	<div class="ml-auto">
																		<a href="#" class="mr-2 mt-1 mb-1 float-left" title="Students"><i class="fa fa-user-o  mr-1 text-muted"></i> 1544</a>
																		<a href="#" class="mr-2 mt-1 mb-1 float-left" title="98% of the 1099 student ratings are positive"><i class="fa fa-thumbs-o-up text-muted mr-1 "></i>99%(450)</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
                        <div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															<div class="arrow-ribbon bg-primary">$748.00</div>
															<div class="item-card9-imgs">
																<a class="link" href="#"></a>
																<img src="../assets/images/media/h4.png" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1 wishlist"> <i class="fa fa fa-heart-o"></i></a>
															</div>
															<div class="item-overly-trans">
																<div class="rating-stars">
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																	<div class="rating-stars-container">
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="card border-0 mb-0">
															<div class="card-body ">
																<div class="item-card9">
																	<a href="#" class="text-dark"><h4 class="font-weight-semibold mt-1"> Dignissimos</h4></a>
																	<div class="item-card9-desc mb-2">
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-handshake-o text-muted mr-1"></i> Business name</span></a>
																	</div>
																	<p class="mb-0 leading-tight">Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                  <div class="mt-2">
                                  <a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i>  08/15 2020</span></a>
                                  </div>
																</div>
															</div>
															<div class="card-footer pt-4 pb-4 pr-4 pl-4">
																<div class="item-card9-footer d-sm-flex">
																	<div class="ml-auto">
																		<a href="#" class="mr-2 mt-1 mb-1 float-left" title="Students"><i class="fa fa-user-o  mr-1 text-muted"></i> 1544</a>
																		<a href="#" class="mr-2 mt-1 mb-1 float-left" title="98% of the 1099 student ratings are positive"><i class="fa fa-thumbs-o-up text-muted mr-1 "></i>99%(450)</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															<div class="arrow-ribbon bg-primary">$256.00</div>
															<div class="item-card9-imgs">
																<a class="link" href="#"></a>
																<img src="../assets/images/media/v1.png" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
															</div>
															<div class="item-overly-trans">
																<div class="rating-stars">
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="4">
																	<div class="rating-stars-container">
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																	</div>
																</div>
																<span>
																	<a href="#" class="bg-danger">Best Seller</a>
																</span>
															</div>
														</div>
														<div class="card border-0 mb-0">
															<div class="card-body ">
																<div class="item-card9">
																	<div class="rating-stars">
																		<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																	</div>
																	<a href="#" class="text-dark"><h4 class="font-weight-semibold mt-1">Chittenden</h4></a>
																	<div class="item-card9-desc mb-2">
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-handshake-o text-muted mr-1"></i> Business name</span></a>
																	</div>
																	<p class="mb-0 leading-tight">Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                  <div class="mt-2">
                                    <a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i>  09/11 2020</span></a>
                                  </div>
																</div>
															</div>
															<div class="card-footer pt-4 pb-4 pr-4 pl-4">
																<div class="item-card9-footer d-sm-flex">
																	<div class="ml-auto">
																		<a href="#" class="mr-2 mt-1 mb-1 float-left" title="Students"><i class="fa fa-user-o  mr-1 text-muted"></i> 1544</a>
																		<a href="#" class="mr-2 mt-1 mb-1 float-left" title="98% of the 1099 student ratings are positive"><i class="fa fa-thumbs-o-up text-muted mr-1 "></i>99%(450)</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
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
						<!--/Lists-->
					</div>
				</div>
			</div>
		</section>
		<!--/Listing-->

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

		<!-- Recent Post-->
		<section class="sptb2 border-top">
			<div class="container">
				<h6 class="fs-18 mb-4">Latest Posts</h6>
				<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
				<div class="row">
					<div class="col-md-12 col-lg-4">
						<div class="d-flex mt-0 mb-5 mb-lg-0 border bg-white p-4 box-shadow2">
							<img class="w-8 h-8 mr-4" src="../assets/images/media/6.png" alt="img">
							<div class="media-body">
								<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Buy a CrusaderRecusandae</a></h4>
								<span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 13th May 2019</span>
								<div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $128 <del>$218</del></div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="d-flex mt-0 mb-5 mb-lg-0 border bg-white p-4 box-shadow2">
							<img class="w-8 h-8 mr-4" src="../assets/images/media/4.png" alt="img">
							<div class="media-body">
								<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Best New</a></h4>
								<span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 20th Jun 2019</span>
								<div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $245 <del>$354</del></div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="d-flex mt-0 mb-0 border bg-white p-4 box-shadow2">
							<img class="w-8 h-8 mr-4" src="../assets/images/media/2.png" alt="img">
							<div class="media-body">
								<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Fuel Effeciency Redattxe</a></h4>
								<span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 14th Aug 2019</span>
								<div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $214 <del>$562</del></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Recent Post-->

		

		<!--Footer Section-->
		@include('common.footer')
		<!--Footer Section-->

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>
    {{-- <script>
      function AllTimeCourse(e) {
          
      }

      function ThisWeekCourse() {
        let fdWeek = new Date();
        let dia = fdWeek.getDay();
        let firtDay = new Date();
        firtDay.setTime(fdWeek.setUTCHours(-((dia) * 24)));
        let lastDay = new Date();
        lastDay.setTime(fdWeek.setUTCHours(6 * 24));
        let week = {
            firtDay : firtDay,
            lastDay : lastDay
        }
        console.log(week);
      
      }
    </script> --}}
@endsection