@extends('layout.index')
@section('content')
		<!--Loader-->
		<div id="global-loader">
			<img src="../assets/preloader/Fidget-spinner.gif" class="loader-img " alt="">
		</div>

		@include('common.top-header')

	
		<!--listing-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 col-lg-8 col-md-12">
						<!--Classified Description-->
						<div class="card overflow-hidden">
							<div class="ribbon ribbon-top-right text-danger"><span class="bg-danger">Offer</span></div>
							<div class="card-body">
								<div class="item-det mb-4">
									<a href="#" class="text-dark"><h3 >Harlequini Dawn</h3></a>
									<div class=" d-flex">
										<ul class="d-flex mb-0">
											<li class="mr-5"><a href="#" class="icons"><i class="ti-car text-muted mr-1 fs-18"></i> Cars</a></li>
											<li class="mr-5"><a href="#" class="icons"><i class="ti-location-pin text-muted mr-1"></i> USA</a></li>
											<li class="mr-5"><a href="#" class="icons"><i class="ti-calendar text-muted mr-1"></i> 5 hours ago</a></li>
											<li class="mr-5"><a href="#" class="icons"><i class="ti-eye text-muted mr-1 fs-15"></i> 765</a></li>
										</ul>
										<div class="rating-stars d-flex mr-5">
											<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" id="rating-stars-value" value="4">
											<div class="rating-stars-container mr-2">
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
											</div> 4.0
										</div>
										<div class="rating-stars d-flex">
											<div class="rating-stars-container mr-2">
												<div class="rating-star sm">
													<i class="fa fa-heart"></i>
												</div>
											</div> 135
										</div>
									</div>
								</div>
								<div class="product-slider">
									<div id="carousel" class="carousel slide" data-ride="carousel">
										<div class="arrow-ribbon2 bg-primary">$539</div>
										<div class="carousel-inner">
											<div class="carousel-item active"> <img src="../assets/images/media/gallery/v1.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="../assets/images/media/gallery/v2.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="../assets/images/media/gallery/v3.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="../assets/images/media/gallery/v4.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="../assets/images/media/gallery/v5.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="../assets/images/media/gallery/1.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="../assets/images/media/gallery/2.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="../assets/images/media/gallery/3.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="../assets/images/media/gallery/4.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="../assets/images/media/gallery/5.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="../assets/images/media/gallery/6.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="../assets/images/media/gallery/7.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="../assets/images/media/gallery/8.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="../assets/images/media/gallery/9.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="../assets/images/media/gallery/10.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="../assets/images/media/gallery/11.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="../assets/images/media/gallery/12.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="../assets/images/media/gallery/13.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="../assets/images/media/gallery/14.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="../assets/images/media/gallery/v6.jpg" alt="img"> </div>
										</div>
										<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
											<i class="fa fa-angle-left" aria-hidden="true"></i>
										</a>
										<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
											<i class="fa fa-angle-right" aria-hidden="true"></i>
										</a>
									</div>
									<div class="clearfix">
										<div id="thumbcarousel" class="carousel slide thumbcarousel" data-interval="false">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<div data-target="#carousel" data-slide-to="0" class="thumb"><img src="../assets/images/media/gallery/v1.png" alt="img"></div>
													<div data-target="#carousel" data-slide-to="1" class="thumb"><img src="../assets/images/media/gallery/v2.png" alt="img"></div>
													<div data-target="#carousel" data-slide-to="2" class="thumb"><img src="../assets/images/media/gallery/v3.png" alt="img"></div>
													<div data-target="#carousel" data-slide-to="3" class="thumb"><img src="../assets/images/media/gallery/v4.png" alt="img"></div>
													<div data-target="#carousel" data-slide-to="4" class="thumb"><img src="../assets/images/media/gallery/v5.png" alt="img"></div>
												</div>
												<div class="carousel-item ">
													<div data-target="#carousel" data-slide-to="5" class="thumb"><img src="../assets/images/media/gallery/1.jpg" alt="img"></div>
													<div data-target="#carousel" data-slide-to="6" class="thumb"><img src="../assets/images/media/gallery/2.jpg" alt="img"></div>
													<div data-target="#carousel" data-slide-to="7" class="thumb"><img src="../assets/images/media/gallery/3.jpg" alt="img"></div>
													<div data-target="#carousel" data-slide-to="8" class="thumb"><img src="../assets/images/media/gallery/4.jpg" alt="img"></div>
													<div data-target="#carousel" data-slide-to="9" class="thumb"><img src="../assets/images/media/gallery/5.jpg" alt="img"></div>
												</div>
												<div class="carousel-item ">
													<div data-target="#carousel" data-slide-to="10" class="thumb"><img src="../assets/images/media/gallery/6.jpg" alt="img"></div>
													<div data-target="#carousel" data-slide-to="11" class="thumb"><img src="../assets/images/media/gallery/7.jpg" alt="img"></div>
													<div data-target="#carousel" data-slide-to="12" class="thumb"><img src="../assets/images/media/gallery/8.jpg" alt="img"></div>
													<div data-target="#carousel" data-slide-to="13" class="thumb"><img src="../assets/images/media/gallery/9.jpg" alt="img"></div>
													<div data-target="#carousel" data-slide-to="14" class="thumb"><img src="../assets/images/media/gallery/10.jpg" alt="img"></div>
												</div>
												<div class="carousel-item ">
													<div data-target="#carousel" data-slide-to="15" class="thumb"><img src="../assets/images/media/gallery/11.jpg" alt="img"></div>
													<div data-target="#carousel" data-slide-to="16" class="thumb"><img src="../assets/images/media/gallery/12.jpg" alt="img"></div>
													<div data-target="#carousel" data-slide-to="17" class="thumb"><img src="../assets/images/media/gallery/13.jpg" alt="img"></div>
													<div data-target="#carousel" data-slide-to="18" class="thumb"><img src="../assets/images/media/gallery/14.jpg" alt="img"></div>
													<div data-target="#carousel" data-slide-to="19" class="thumb"><img src="../assets/images/media/gallery/v6.png" alt="img"></div>
												</div>

											</div>
											<a class="carousel-control-prev" href="#thumbcarousel" role="button" data-slide="prev">
												<i class="fa fa-angle-left" aria-hidden="true"></i>
											</a>
											<a class="carousel-control-next" href="#thumbcarousel" role="button" data-slide="next">
												<i class="fa fa-angle-right" aria-hidden="true"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="">
							<div class="">
								<div class="border-0">
									<div class="wideget-user-tab wideget-user-tab3">
										<div class="tab-menu-heading">
											<div class="tabs-menu1">
												<ul class="nav">
													<li class=""><a href="#tab-1" class="active" data-toggle="tab">Overview</a></li>
													<li><a href="#tab-3" data-toggle="tab" class="">Features & Option</a></li>
													<li><a href="#tab-4" data-toggle="tab" class="">Vehicle Information</a></li>
													<li><a href="#tab-5" data-toggle="tab" class="">About Video</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="tab-content border-left border-right border-top br-tr-3 border-bottom br-br-3 br-bl-3 p-5 bg-white mb-4">
										<div class="tab-pane active" id="tab-1">
											<h3 class="card-title mb-3 font-weight-semibold">Overview</h3>
											<div class="mb-4">
												<p>Killington odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atcorrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
												<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoraliz the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble thena bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
											</div>
											<h4 class="mb-4">Specifications</h4>
											<div class="row">
												<div class="col-xl-12 col-md-12">
													<div class="table-responsive">
														<table class="table table-bordered w-100 m-0 text-nowrap ">
															<tbody>
																<tr>
																	<td><span class="font-weight-bold">Fuel Type :</span> Diesel</td>
																	<td><span class="font-weight-bold">Breaks :</span> Front , Rear</td>
																</tr>
																<tr>
																	<td><span class="font-weight-bold">Seating :</span> 5 members</td>
																	<td><span class="font-weight-bold">Colors :</span> Red , pink, Gray</td>
																</tr>
																<tr>
																	<td><span class="font-weight-bold">Air Bags :</span> Available</td>
																	<td><span class="font-weight-bold">Colors :</span> Red , pink, Gray</td>
																</tr>
																<tr>
																	<td><span class="font-weight-bold">Engine :</span> F8D </td>
																	<td><span class="font-weight-bold">Power Windows :</span> Available </td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab-3">
											<div class="row">
												<div class="col-md-6">
													<div class="table-responsive">
														<table class="table table-bordered border-top mb-0">
															<tbody>
																<tr>
																	<td>Power Steering</td>
																	<td><i class="icon icon-check text-success"></i></td>
																</tr>
																<tr>
																	<td>Power Windows Front</td>
																	<td><i class="icon icon-check text-success"></i></td>
																</tr>
																<tr>
																	<td>Air Conditioner</td>
																	<td><i class="icon icon-check text-success"></i></td>
																</tr>
																<tr>
																	<td>Passenger Airbag</td>
																	<td><i class="icon icon-close text-danger"></i></td>
																</tr>
																<tr>
																	<td>Fog Lights - Front</td>
																	<td><i class="icon icon-close text-danger"></i></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="col-md-6">
													<div class="table-responsive">
														<table class="table table-bordered border-top mb-0">
															<tbody>

																<tr>
																	<td>Anti Lock Braking System</td>
																	<td><i class="icon icon-check text-success"></i></td>
																</tr>
																<tr>
																	<td>Driver Airbag</td>
																	<td><i class="icon icon-check text-success"></i></td>
																</tr>
																<tr>
																	<td>Wheel Covers</td>
																	<td><i class="icon icon-check text-success"></i></td>
																</tr>
																<tr>
																	<td>Automatic Climate Control</td>
																	<td><i class="icon icon-close text-danger"></i></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab-4">
											<div class="row">
												<div class="col-lg-6">
													<div class="table-responsive">
														<table class="table table-bordered border-top mb-0">
															<tbody>
																<tr>
																	<td>ARAI Mileage</td>
																	<td>24.7 km/kg</td>
																</tr>
																<tr>
																	<td>Engine Displacement (cc)</td>
																	<td>796</td>
																</tr>
																<tr>
																	<td>Max Torque (nm@rpm)</td>
																	<td>69Nm@3500rpm</td>
																</tr>
																<tr>
																	<td>Seating Capacity</td>
																	<td>5</td>
																</tr>
																<tr>
																	<td>Boot Space (Litres)</td>
																	<td>177</td>
																</tr>

															</tbody>
														</table>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="table-responsive">
														<table class="table table-bordered border-top mb-0">
															<tbody>
																<tr>
																	<td>Fuel Type</td>
																	<td>CNG</td>
																</tr>
																<tr>
																	<td>Max Power (bhp@rpm)</td>
																	<td>47.3bhp@6000rpm</td>
																</tr>
																<tr>
																	<td>TransmissionType</td>
																	<td>Manual</td>
																</tr>
																<tr>
																	<td>Fuel Tank Capacity</td>
																	<td>35</td>
																</tr>
																<tr>
																	<td>Body Type</td>
																	<td>Hatchback</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab-5">
											<ul class="list-unstyled video-list-thumbs row ">
												<li class="mb-0">
													<a data-toggle="modal" data-target="#homeVideo">
														<img src="../assets/images/media/others/v1.jpg" alt="Barca" class="img-responsive">
														<span class="mdi mdi-arrow-right-drop-circle-outline text-white"></span>
													</a>
												</li>
											</ul>

										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/Classified Description-->

						<h3 class="mb-5 mt-6">Related Posts</h3>

						<!--Related Posts-->
						<div id="myCarousel5" class="owl-carousel owl-carousel-icons3">
							<!-- Wrapper for carousel items -->

							<!-- Wrapper for carousel items -->
							<div class="item">
								<div class="card mb-0">
									<div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
									<div class="item-card2-img">
										<a class="link" href="cars.html"></a>
										<img src="../assets/images/media/others/v5.jpg" alt="img" class="cover-image">
									</div>
									<div class="item-card2-icons">
										<a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-share-alt"></i></a>
										<a href="#" class="item-card2-icons-r wishlist active"><i class="fa fa fa-heart"></i></a>
									</div>
									<div class="card-body pb-0">
										<div class="item-card2">
											<div class="item-card2-desc">
												<div class="item-card2-text">
													<a href="cars.html" class="text-dark"><h4 class="mb-0">CrusaderRecusandae</h4></a>
												</div>
												<div class="d-flex">
													<a href="">
														<p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i>Florida, USA</p>
													</a>
													<span class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">$200.00</span>
												</div>
												<p class="">Lorem Ipsum available, quis int nostrum exercitationem </p>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<a href="#" class="mr-4" data-toggle="tooltip" data-placement="bottom" data-original-title="Automatic"><i class="fa fa-car text-muted"></i> <span class="text-default">Auto</span></a>
										<a href="#" class="mr-4" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default">2300</span></a>
										<a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i> <span class="text-default">Petrol</span></a>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="card mb-0">
									<div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
									<div class="item-card2-img">
										<a class="link" href="cars.html"></a>
										<img src="../assets/images/media/others/dummy.jpg" alt="img" class="cover-image">
									</div>
									<div class="item-card2-icons">
										<a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-share-alt"></i></a>
										<a href="#" class="item-card2-icons-r wishlist active"><i class="fa fa fa-heart"></i></a>
									</div>
									<div class="card-body pb-0">
										<div class="item-card2">
											<div class="item-card2-desc">
												<div class="item-card2-text">
													<a href="cars.html" class="text-dark"><h4 class="mb-0">Voluptates Scorpio</h4></a>
												</div>
												<div class="d-flex pb-0 pt-0">
													<a href="">
														<p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i>Florida, Uk</p>
													</a>
													<span class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">$200.00</span>
												</div>
												<p class="">Lorem Ipsum available, quis int nostrum exercitationem </p>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<a href="#" class="mr-4" data-toggle="tooltip" data-placement="bottom" data-original-title="Manual"><i class="fa fa-car text-muted"></i> <span class="text-default">Manual</span></a>
										<a href="#" class="mr-4" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default">3000</span></a>
										<a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i> <span class="text-default">Petrol</span></a>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="card">
									<div class="item-card2-img">
										<a class="link" href="cars.html"></a>
										<img src="../assets/images/media/others/b1.jpg" alt="img" class="cover-image">
									</div>
									<div class="item-card2-icons">
										<a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-share-alt"></i></a>
										<a href="#" class="item-card2-icons-r wishlist"><i class="fa fa fa-heart-o"></i></a>
									</div>
									<div class="card-body pb-0">
										<div class="item-card2">
											<div class="item-card2-desc">
												<div class="item-card2-text">
													<a href="cars.html" class="text-dark"><h4 class="mb-0">Marquette Polo</h4></a>
												</div>
												<div class="d-flex pb-0 pt-0">
													<a href="">
														<p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i>Florida, Uk</p>
													</a>
													<span class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">$200.00</span>
												</div>
												<p class="">Lorem Ipsum available, quis int nostrum exercitationem </p>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<a href="#" class="mr-4" data-toggle="tooltip" data-placement="bottom" data-original-title="Automatic"><i class="fa fa-car text-muted"></i> <span class="text-default">Auto</span></a>
										<a href="#" class="mr-4" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default">4000</span></a>
										<a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i> <span class="text-default">Petrol</span></a>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="card">
									<div class="item-card2-img">
										<a class="link" href="cars.html"></a>
										<img src="../assets/images/media/others/v1.jpg" alt="img" class="cover-image">
									</div>
									<div class="item-card2-icons">
										<a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-share-alt"></i></a>
										<a href="#" class="item-card2-icons-r wishlist"><i class="fa fa fa-heart-o"></i></a>
									</div>
									<div class="card-body pb-0">
										<div class="item-card2">
											<div class="item-card2-desc">
												<div class="item-card2-text">
													<a href="cars.html" class="text-dark"><h4 class="mb-0">Caledonia f12</h4></a>
												</div>
												<div class="d-flex pb-0 pt-0">
													<a href="">
														<p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i>Florida, Uk</p>
													</a>
													<span class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">$200.00</span>
												</div>
												<p class="">Lorem Ipsum available, quis int nostrum exercitationem </p>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<a href="#" class="mr-4" data-toggle="tooltip" data-placement="bottom" data-original-title="Manual"><i class="fa fa-car text-muted"></i> <span class="text-default">Manual</span></a>
										<a href="#" class="mr-4" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default">2000</span></a>
										<a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i> <span class="text-default">Petrol</span></a>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="card">
									<div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
									<div class="item-card2-img">
										<a class="link" href="cars.html"></a>
										<img src="../assets/images/media/others/f3.jpg" alt="img" class="cover-image">
									</div>
									<div class="item-card2-icons">
										<a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-share-alt"></i></a>
										<a href="#" class="item-card2-icons-r wishlist active"><i class="fa fa fa-heart"></i></a>
									</div>
									<div class="card-body pb-0">
										<div class="item-card2">
											<div class="item-card2-desc">
												<div class="item-card2-text">
													<a href="cars.html" class="text-dark"><h4 class="mb-0">Herkime</h4></a>
												</div>
												<div class="d-flex pb-0 pt-0">
													<a href="">
														<p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i>Florida, Uk</p>
													</a>
													<span class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">$200.00</span>
												</div>
												<p class="">Lorem Ipsum available, quis int nostrum exercitationem </p>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<a href="#" class="mr-4" data-toggle="tooltip" data-placement="bottom" data-original-title="Manual"><i class="fa fa-car text-muted"></i> <span class="text-default">Manual</span></a>
										<a href="#" class="mr-4" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default">2000</span></a>
										<a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i> <span class="text-default">Petrol</span></a>
									</div>
								</div>
							</div>
						</div>
						<!--/Related Posts-->

						<!--Comments-->
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Rating And Reviews</h3>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-md-12">
										<div class="mb-4">
											<p class="mb-2">
												<span class="fs-14 ml-2"><i class="fa fa-star text-yellow mr-2"></i>5</span>
											</p>
											<div class="progress progress-md mb-4 h-4">
												<div class="progress-bar bg-success w-100">9,232</div>
											</div>
										</div>
										<div class="mb-4">
											<p class="mb-2">
												<span class="fs-14 ml-2"><i class="fa fa-star text-yellow mr-2"></i>4</span>
											</p>
											<div class="progress progress-md mb-4 h-4">
												<div class="progress-bar bg-info w-80">8,125</div>
											</div>
										</div>
										<div class="mb-4">
											<p class="mb-2">
												<span class="fs-14 ml-2"><i class="fa fa-star text-yellow mr-2"></i>  3</span>
											</p>
											<div class="progress progress-md mb-4 h-4">
												<div class="progress-bar bg-primary w-60">6,263</div>
											</div>
										</div>
										<div class="mb-4">
											<p class="mb-2">
												<span class="fs-14 ml-2"><i class="fa fa-star text-yellow mr-2"></i>  2</span>
											</p>
											<div class="progress progress-md mb-4 h-4">
												<div class="progress-bar bg-secondary w-30">3,463</div>
											</div>
										</div>
										<div class="mb-5">
											<p class="mb-2">
												<span class="fs-14 ml-2"><i class="fa fa-star text-yellow mr-2"></i>  1</span>
											</p>
											<div class="progress progress-md mb-4 h-4">
												<div class="progress-bar bg-orange w-20">1,456</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body p-0">
								<div class="media mt-0 p-5">
                                    <div class="d-flex mr-3">
                                        <a href="#"><img class="media-object brround" alt="64x64" src="../assets/images/users/male/1.jpg"> </a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-1 font-weight-semibold">Joanne Scott
											<span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
											<span class="fs-14 ml-2"> 4.5 <i class="fa fa-star text-yellow"></i></span>
										</h5>
										<small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st  <i class=" ml-3 fa fa-clock-o"></i> 13.00  <i class=" ml-3 fa fa-map-marker"></i> Brezil</small>
                                        <p class="font-13  mb-2 mt-2">
											Lorem Ipsum available, quis Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et  nostrud exercitation ullamco laboris   commodo consequat.
                                        </p>
										<a href="#" class="mr-2"><span class="badge badge-primary">Helpful</span></a>
										<a href="" class="mr-2" data-toggle="modal" data-target="#Comment"><span >Comment</span></a>
										<a href="" class="mr-2" data-toggle="modal" data-target="#report"><span >Report</span></a>
                                        <div class="media mt-5">
                                            <div class="d-flex mr-3">
                                                <a href="#"> <img class="media-object brround" alt="64x64" src="../assets/images/users/female/2.jpg"> </a>
                                            </div>
											<div class="media-body">
												<h5 class="mt-0 mb-1 font-weight-semibold">Rose Slater <span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title="verified"><i class="fa fa-check-circle-o text-success"></i></span></h5>
												<small class="text-muted"><i class="fa fa-calendar"></i> Dec 22st  <i class=" ml-3 fa fa-clock-o"></i> 6.00  <i class=" ml-3 fa fa-map-marker"></i> Brezil</small>
												<p class="font-13  mb-2 mt-2">
													Lorem Ipsum available, quis nostrud exercitation ullamco laboris   commodo Lorem Ipsum available, but the majority have suffered alteration in some form laboriosam, nisi ut aliquid ex ea commodi consequatur consequat.
												</p>
												<a href="" data-toggle="modal" data-target="#Comment"><span class="badge badge-default">Comment</span></a>
											</div>
										</div>
									</div>
								</div>
								<div class="media p-5 border-top mt-0">
									<div class="d-flex mr-3">
										<a href="#"> <img class="media-object brround" alt="64x64" src="../assets/images/users/male/3.jpg"> </a>
									</div>
									<div class="media-body">
										<h5 class="mt-0 mb-1 font-weight-semibold">Edward
										<span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
										<span class="fs-14 ml-2"> 4 <i class="fa fa-star text-yellow"></i></span>
										</h5>
										<small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st  <i class=" ml-3 fa fa-clock-o"></i> 16.35  <i class=" ml-3 fa fa-map-marker"></i> UK</small>
                                        <p class="font-13  mb-2 mt-2">
                                           Lorem Ipsum available, quis Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et  nostrud exercitation ullamco laboris   commodo consequat.
                                        </p>
										<a href="#" class="mr-2"><span class="badge badge-primary">Helpful</span></a>
										<a href="" class="mr-2" data-toggle="modal" data-target="#Comment"><span >Comment</span></a>
										<a href="" class="mr-2" data-toggle="modal" data-target="#report"><span >Report</span></a>
									</div>
								</div>
							</div>
						</div>
						<!--/Comments-->
						<div class="card mb-lg-0">
							<div class="card-header">
								<h3 class="card-title">Leave a reply</h3>
							</div>
							<div class="card-body">
								<div>
									<div class="form-group">
										<input type="text" class="form-control" id="name1" placeholder="Your Name">
									</div>
									<div class="form-group">
										<input type="email" class="form-control" id="email" placeholder="Email Address">
									</div>
									<div class="form-group">
										<textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Comment"></textarea>
									</div>
									<a href="#" class="btn btn-primary">Send Reply</a>
								</div>
							</div>
						</div>
					</div>

					<!--Right Side Content-->
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Posted By</h3>
							</div>
							<div class="card-body  item-user">
								<div class="profile-pic mb-0">
									<img src="../assets/images/users/male/25.jpg" class="brround avatar-xxl" alt="user">
									<div >
										<a href="userprofile.html" class="text-dark"><h4 class="mt-3 mb-1 font-weight-semibold">Robert McLean</h4></a>
										<h6 class="text-muted font-weight-normal">Web designer</h6>
										<span class="text-muted">Member Since November 2008</span>
										<h6 class="mt-2 mb-0"><a href="personal-blog.html" class="btn btn-primary btn-sm">See All Ads</a></h6>
									</div>
								</div>
							</div>
							<div class="card-body item-user">
								<h4 class="mb-4">Contact Info</h4>
								<div>
									<h6><span class="font-weight-semibold"><i class="fa fa-envelope mr-3 mb-2"></i></span><a href="#" class="text-body"> robert123@gmail.com</a></h6>
									<h6><span class="font-weight-semibold"><i class="fa fa-phone mr-3  mb-2"></i></span><a href="#" class="text-body"> 0-235-657-24587</a></h6>
									<h6><span class="font-weight-semibold"><i class="fa fa-link mr-3 mb-2"></i></span><a href="#" class="text-body">http://spruko.com/</a></h6>
									<h6><span class="font-weight-semibold"><i class="fa fa-map-marker mr-3 "></i></span><a class="text-body"> New York, NY 10012, US-589635</a></h6>
								</div>
								<div class=" item-user-icons mt-4">
									<a href="#" class="facebook-bg mt-0"><i class="fa fa-facebook"></i></a>
									<a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
									<a href="#" class="google-bg"><i class="fa fa-google"></i></a>
									<a href="#" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
								</div>
							</div>
							<div class="card-footer">
								<div class="text-left">
									<a href="#" class="btn  btn-info"><i class="fa fa-envelope"></i> Chat</a>
									<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#contact"><i class="fa fa-user"></i> Contact Me</a>
									<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#contact"><i class="fa fa-share-alt"></i> Share</a>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Keywords</h3>
							</div>
							<div class="card-body product-filter-desc">
								<div class="product-tags clearfix">
									<ul class="list-unstyled mb-0">
										<li><a href="#">Caledonia</a></li>
										<li><a href="#">ModelKillington</a></li>
										<li><a href="#">Vehicles</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card">
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
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Map location</h3>
							</div>
							<div class="card-body">
								<div class="map-header">
									<div class="map-header-layer" id="map2"></div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Search Ads</h3>
							</div>
							<div class="card-body">
								<div class="form-group">
									<input type="text" class="form-control" id="search-text" placeholder="What are you looking for?">
								</div>
								<div class="form-group search-cars1">
									<select name="country" id="select-countries" class="form-control custom-select select2-show-search">
										<option value="1" selected>All Categories</option>
										<option value="2">Vehicle</option>
										<option value="3">Vehicles</option>
										<option value="4">Vroomting</option>
										<option value="5">Vehicles</option>
										<option value="6">CrusaderRecusandae</option>
										<option value="7">Caledonia</option>
										<option value="8">Chittenden</option>
										<option value="9">CrusaderRecusandae</option>
										<option value="10">Vehicle</option>
										<option value="11">Vehicles</option>
										<option value="12">Duplex Vehicles</option>
										<option value="13">Shrinking  Moco</option>
										<option value="14">Eternity Killington</option>
										<option value="15">Modren Vehicles</option>
									</select>
								</div>
								<div>
									<a href="#" class="btn btn-block btn-primary"><i class="fa fa-search"></i> Search</a>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<div class="card-title">Latest Models</div>
							</div>
							<div class="card-body ">
								<ul class="vertical-scroll">
									<li class="news-item">
										<table>
											<tr>
												<td><img src="../assets/images/media/1.png" alt="image" class="w-8 border"/></td>
												<td class="pl-3"><h5 class="mb-1 ">Monastery Cars</h5><a href="#" class="btn-link">View Details</a><span class="float-right font-weight-bold">$17</span></td>
											</tr>
										</table>
									</li>
									<li class="news-item">
										<table>
											<tr>
												<td><img src="../assets/images/media/2.png" alt="image" class="w-8 border"/></td>
												<td class="pl-3"><h5 class="mb-1 ">Caledonia Cars</h5><a href="#" class="btn-link">View Details</a><span class="float-right font-weight-bold">$17</span></td>
											</tr>
										</table>
									</li>
									<li class="news-item">
										<table>
											<tr>
												<td><img src="../assets/images/media/3.png" alt="image" class="w-8 border" /></td>
												<td class="pl-3"><h5 class="mb-1 ">Monastery Cars</h5><a href="#" class="btn-link">View Details</a><span class="float-right font-weight-bold">$17</span></td>
											</tr>
										</table>
									</li>
									<li class="news-item">
										<table>
											<tr>
												<td><img src="../assets/images/media/4.png" alt="image" class="w-8 border" /></td>
												<td class="pl-3"><h5 class="mb-1 ">Caledonia Cars</h5><a href="#" class="btn-link">View Details</a><span class="float-right font-weight-bold">$17</span></td>
											</tr>
										</table>
									</li>
									<li class="news-item">
										<table>
											<tr>
												<td><img src="../assets/images/media/5.png" alt="image" class="w-8 border" /></td>
												<td class="pl-3"><h5 class="mb-1 ">Monastery Cars</h5><a href="#" class="btn-link">View Details</a><span class="float-right font-weight-bold">$17</span></td>
											</tr>
										</table>
									</li>
									<li class="news-item">
										<table>
											<tr>
												<td><img src="../assets/images/media/6.png" alt="image" class="w-8 border" /></td>
												<td class="pl-3"><h5 class="mb-1 ">Chittenden</h5><a href="#" class="btn-link">View Details</a><span class="float-right font-weight-bold">$17</span></td>
											</tr>
										</table>
									</li>
									<li class="news-item">
										<table>
											<tr>
												<td><img src="../assets/images/media/7.png" alt="image" class="w-8 border" /></td>
												<td class="pl-3"><h5 class="mb-1 ">Modren Killington</h5><a href="#" class="btn-link">View Details</a><span class="float-right font-weight-bold">$17</span></td>
											</tr>
										</table>
									</li>
								</ul>
							</div>
						</div>

						<div class="card mb-0">
							<div class="card-header">
								<h3 class="card-title">Latest Seller Ads</h3>
							</div>
							<div class="card-body">
								<div class="rated-products">
									<ul class="vertical-scroll">
										<li class="item">
											<div class="media m-0 mt-0 p-5">
												<img class="mr-4" src="../assets/images/media/toys.png" alt="img">
												<div class="media-body">
													<h4 class="mt-2 mb-1">Vehicle</h4>
													<span class="rated-products-ratings">
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
													</span>
													<div class="h5 mb-0 font-weight-semibold mt-1">$17 - $29</div>
												</div>
											</div>
										</li>
										<li class="item">
											<div class="media p-5 mt-0">
												<img class="mr-4" src="../assets/images/media/1.png" alt="img">
												<div class="media-body">
													<h4 class="mt-2 mb-1">Shelburne Cars</h4>
													<span class="rated-products-ratings">
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star-o text-warning"> </i>
													</span>
													<div class="h5 mb-0 font-weight-semibold mt-1">$22 - $45</div>
												</div>
											</div>
										</li>
										<li class="item">
											<div class="media p-5 mt-0">
												<img class=" mr-4" src="../assets/images/media/4.png" alt="img">
												<div class="media-body">
													<h4 class="mt-2 mb-1">Vroomting</h4>
													<span class="rated-products-ratings">
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star-half-o text-warning"> </i>
													</span>
													<div class="h5 mb-0 font-weight-semibold mt-1">$35 - $72</div>
												</div>
											</div>
										</li>
										<li class="item">
											<div class="media p-5 mt-0">
												<img class=" mr-4" src="../assets/images/media/6.png" alt="img">
												<div class="media-body">
													<h4 class="mt-2 mb-1">Mastery</h4>
													<span class="rated-products-ratings">
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star-half-o text-warning"> </i>
														<i class="fa fa-star-o text-warning"> </i>
													</span>
													<div class="h5 mb-0 font-weight-semibold mt-1">$12 - $21</div>
												</div>
											</div>
										</li>
										<li class="item">
											<div class="media  mb-0 p-5 mt-0">
												<img class=" mr-4" src="../assets/images/media/8.png" alt="img">
												<div class="media-body">
													<h4 class="mt-2 mb-1">Brattleboro Cars</h4>
													<span class="rated-products-ratings">
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star-o text-warning"> </i>
														<i class="fa fa-star-o text-warning"> </i>
													</span>
													<div class="h5 mb-0 font-weight-semibold mt-1">$89 - $97</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!--/Right Side Content-->
				</div>
			</div>
		</section>
		<!--/listing-->

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

		<!--Section-->
		<section class="sptb border-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="bg-white p-0 border">
							<div class="card-body">
								<h6 class="fs-18 mb-4">Do You Want to sell A Car?</h6>
								<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
								<p>it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
								<a href="#" class="btn btn-primary text-white">Sell a Car</a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="bg-white p-0 mt-5 mt-md-0 border">
							<div class="card-body">
								<h6 class="fs-18 mb-4">Are You Looking For A Car?</h6>
								<hr class="deep-purple  accent-2 border-success mb-4 mt-0 d-inline-block mx-auto">
								<p>it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
								<a href="#" class="btn btn-success text-white">Buy a Car</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Section-->

		<!--latest Posts-->
		<section class="sptb2 bg-white border-top">
			<div class="container">
				<h6 class="fs-18 mb-4">Latest Posts</h6>
				<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
				<div class="row">
					<div class="col-md-12 col-lg-4">
						<div class="d-flex mt-0 mb-5 mb-lg-0 border bg-light p-4">
							<img class="w-8 h-8 mr-4" src="../assets/images/media/6.png" alt="img">
							<div class="media-body">
								<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Buy a CrusaderRecusandae</a></h4>
								<span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 13th May 2019</span>
								<div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $128 <del>$218</del></div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="d-flex mt-0 mb-5 mb-lg-0 border bg-light p-4">
							<img class="w-8 h-8 mr-4" src="../assets/images/media/4.png" alt="img">
							<div class="media-body">
								<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Best New Car</a></h4>
								<span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 20th Jun 2019</span>
								<div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $245 <del>$354</del></div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="d-flex mt-0 mb-0 border bg-light p-4 box-shadow2">
							<img class="w-8 h-8 mr-4" src="../assets/images/media/2.png" alt="img">
							<div class="media-body">
								<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Fuel Effeciency Car</a></h4>
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