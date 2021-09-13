@extends('layout.index')
@section('content')
		<!--Loader-->
		<div id="global-loader">
			<img src="../assets/preloader/Fidget-spinner.gif" class="loader-img " alt="">
		</div>

		@include('common.top-header')

		<!--Section-->
		<section>
			<div>
        <div class="cover-image sptb-1 bg-background" data-image-src="../assets/images/banners/banner1.jpg">
          <div class="header-text1 mb-0">
            <div class="container">
              <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12">
                  <div class="text-white mt-lg-7 mb-5">
                    <h1 class="mb-3 display-3"><span class="font-weight-bold">Expertos Chile</span><br> is professional<br> scientific community</h1>
                    <p>Design, plan, modify, organize, execute, develop, impart and evaluate training activities, courses, advice, couching and mentoring at a professional, scientific and / or technological level for institutions and companies of all types and sizes, as well as natural persons</p>
                    <a href="#" class="btn btn-primary btn-lg mr-2">Course</a>
                    <a href="#" class="btn btn-success btn-lg">Create your free account</a>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12"></div>
              </div>
            </div>
          </div><!-- /header-text -->
        </div>
      </div>
		</section>
		<!--Section-->

		<!--Section-->
		<section class="sptb bg-white">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>Learning Course</h2>
					<p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
				</div>
				<div id="myCarousel1" class="owl-carousel owl-carousel-icons2">
					<div class="item">
						<div class="card mb-0">
							<div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
							<div class="item-card2-img">
								<a class="link" href="#"></a>
								<img src="../assets/images/media/others/v5.jpg" alt="img" class="cover-image">
								<div class="item-tag-overlaytext">
									<span class="text-white bg-success"> New</span>
									<span class="text-white bg-danger"> Rent</span>
								</div>
								<div class="item-card2-icons">
									<a href="#" class="item-card2-icons-l bg-primary"> <i class="car car-honda"></i></a>
									<a href="#" class="item-card2-icons-r wishlist active"><i class="fa fa fa-heart-o"></i></a>
								</div>
							</div>
							<div class="card-body pb-0">
								<div class="item-card2">
									<div class="item-card2-desc">
										<div class="item-card2-text">
											<a href="#" class="text-dark"><h4 class="mb-0">Union</h4></a>
										</div>
										<div class="d-flex">
											<a href="">
												<p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i>Florida, USA</p>
											</a>
											<span class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">$789.00</span>
										</div>
										<p class="">Lorem Ipsum available, quis int nostrum exercitationem </p>
									</div>
								</div>
								<div class="item-card2-footer mt-4 mb-4">
									<div class="item-card2-footer-u">
										<div class="d-md-flex">
											<span class="review_score mr-2 badge badge-primary">4.0/5</span>
                                            <div class="rating-stars d-inline-flex ml-auto">
												<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
												<div class="rating-stars-container">
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
												</div> (5 Reviews)
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<a href="#" class="mr-3" data-toggle="tooltip" data-placement="bottom" data-original-title="Automatic"><i class="fa fa-circle-o text-muted"></i> <span class="text-default">Auto</span></a>
								<a href="#" class="mr-3" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default">2300</span></a>
								<a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i> <span class="text-default">Petrol</span></a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
							<div class="item-card2-img">
								<a class="link" href="#"></a>
								<img src="../assets/images/media/others/dummy.jpg" alt="img" class="cover-image">
								<div class="item-tag-overlaytext">
									<span class="text-white bg-gray"> Used</span>
								</div>
								<div class="item-card2-icons">
									<a href="#" class="item-card2-icons-l bg-primary"> <i class="car car-toyota"></i></a>
									<a href="#" class="item-card2-icons-r wishlist active"><i class="fa fa fa-heart"></i></a>
								</div>
							</div>
							<div class="card-body pb-0">
								<div class="item-card2">
									<div class="item-card2-desc">
										<div class="item-card2-text">
											<a href="#" class="text-dark"><h4 class="mb-0">Lioness</h4></a>
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
								<div class="item-card2-footer mt-4 mb-4">
									<div class="item-card2-footer-u">
										<div class="d-md-flex">
											<span class="review_score mr-2 badge badge-primary">4.0/5</span>
                                            <div class="rating-stars d-inline-flex ml-auto">
												<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
												<div class="rating-stars-container">
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
												</div> (5 Reviews)
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="Manual"><i class="fa fa-circle-o text-muted"></i> <span class="text-default">Manual</span></a>
								<a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default">3000</span></a>
								<a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i> <span class="text-default">Petrol</span></a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="item-card2-img">
								<a class="link" href="#"></a>
								<img src="../assets/images/media/others/b1.jpg" alt="img" class="cover-image">
								<div class="item-tag-overlaytext">
									<span class="text-white bg-success"> New</span>
								</div>
								<div class="item-card2-icons">
									<a href="#" class="item-card2-icons-l bg-primary"> <i class="car car-volkswagen"></i></a>
									<a href="#" class="item-card2-icons-r wishlist active"><i class="fa fa fa-heart"></i></a>
								</div>
							</div>
							<div class="card-body pb-0">
								<div class="item-card2">
									<div class="item-card2-desc">
										<div class="item-card2-text">
											<a href="#" class="text-dark"><h4 class="mb-0">Millenium</h4></a>
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
								<div class="item-card2-footer mt-4 mb-4">
									<div class="item-card2-footer-u">
										<div class="d-md-flex">
											<span class="review_score mr-2 badge badge-primary">4.0/5</span>
                                            <div class="rating-stars d-inline-flex ml-auto">
												<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
												<div class="rating-stars-container">
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
												</div> (5 Reviews)
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<a href="#" class="mr-3" data-toggle="tooltip" data-placement="bottom" data-original-title="Automatic"><i class="fa fa-circle-o text-muted"></i> <span class="text-default">Auto</span></a>
								<a href="#" class="mr-3" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default">4000</span></a>
								<a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i> <span class="text-default">Petrol</span></a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0 sold-out">
							<div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">sold out</span></div>
							<div class="item-card2-img">
								<a class="link" href="#"></a>
								<img src="../assets/images/media/others/v1.jpg" alt="img" class="cover-image">
								<div class="item-tag-overlaytext">
									<span class="text-white bg-success"> New</span>
								</div>
								<div class="item-card2-icons">
									<a href="#" class="item-card2-icons-l bg-primary"> <i class="car car-ferrari"></i></a>
									<a href="#" class="item-card2-icons-r wishlist"><i class="fa fa fa-heart-o"></i></a>
								</div>
							</div>
							<div class="card-body pb-0">
								<div class="item-card2">
									<div class="item-card2-desc">
										<div class="item-card2-text">
											<a href="#" class="text-dark"><h4 class="mb-0">Roamer</h4></a>
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
								<div class="item-card2-footer mt-4 mb-4">
									<div class="item-card2-footer-u">
										<div class="d-md-flex">
											<span class="review_score mr-2 badge badge-primary">4.0/5</span>
                                            <div class="rating-stars d-inline-flex ml-auto">
												<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
												<div class="rating-stars-container">
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
												</div> (5 Reviews)
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="Manual"><i class="fa fa-circle-o text-muted"></i> <span class="text-default">Manual</span></a>
								<a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default">2000</span></a>
								<a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i> <span class="text-default">Petrol</span></a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
							<div class="item-card2-img">
								<a class="link" href="#"></a>
								<img src="../assets/images/media/others/f3.jpg" alt="img" class="cover-image">
								<div class="item-tag-overlaytext">
									<span class="text-white bg-success"> New</span>
								</div>
								<div class="item-card2-icons">
									<a href="#" class="item-card2-icons-l bg-primary"> <i class="car car-honda"></i></a>
									<a href="#" class="item-card2-icons-r wishlist active"><i class="fa fa fa-heart-o"></i></a>
								</div>
							</div>
							<div class="card-body pb-0">
								<div class="item-card2">
									<div class="item-card2-desc">
										<div class="item-card2-text">
											<a href="#" class="text-dark"><h4 class="mb-0">Union</h4></a>
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
								<div class="item-card2-footer mt-4 mb-4">
									<div class="item-card2-footer-u">
										<div class="d-md-flex">
											<span class="review_score mr-2 badge badge-primary">4.0/5</span>
                                            <div class="rating-stars d-inline-flex ml-auto">
												<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
												<div class="rating-stars-container">
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
												</div> (5 Reviews)
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="Manual"><i class="fa fa-circle-o text-muted"></i> <span class="text-default">Manual</span></a>
								<a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default">2000</span></a>
								<a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i> <span class="text-default">Petrol</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Section-->

    <!--Section-->
    <section>
      <div class="about-1 cover-image sptb bg-background-color" data-image-src="../assets/images/banners/banner2.jpg">
        <div class="content-text mb-0 text-white info">
          <div class="container">
            <div class="row text-center">
              <div class="col-lg-3 col-md-6">
                <div class="counter-status md-mb-0">
                  <div class="counter-icon">
                    <i class="ti-user"></i>
                  </div>
                  <h5>Customers</h5>
                  <h2 class="counter mb-0">1785</h2>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter-status status-1 md-mb-0">
                  <div class="counter-icon text-warning">
                    <i class="fa fa-desktop"></i>
                  </div>
                  <h5>Business</h5>
                  <h2 class="counter mb-0">3568</h2>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter-status status md-mb-0">
                  <div class="counter-icon text-primary">
                    <i class="ti-package"></i>
                  </div>
                  <h5>Companies</h5>
                  <h2 class="counter mb-0">1456</h2>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter-status status">
                  <div class="counter-icon text-success">
                    <i class="ti-face-smile"></i>
                  </div>
                  <h5>Courses</h5>
                  <h2 class="counter mb-0">8459</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Section-->

		<!--Section-->
		<section class="sptb bg-white">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>How It Work</h2>
					<p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="">
							<div class="mb-lg-0 mb-4">
								<div class="service-card text-center">
									<div class="bg-light icon-bg icon-service text-purple about box-shadow2">
										<img src="../assets/images/png/about/badge.png" alt="img">
									</div>
									<div class="servic-data mt-3">
										<h4 class="font-weight-semibold mb-2">Worlds No 1</h4>
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
										<img src="../assets/images/png/about/car.png" alt="img">
									</div>
									<div class="servic-data mt-3">
										<h4 class="font-weight-semibold mb-2">Course Sold</h4>
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
										<img src="../assets/images/png/about/discount.png" alt="img">
									</div>
									<div class="servic-data mt-3">
										<h4 class="font-weight-semibold mb-2">Offers</h4>
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
										<img src="../assets/images/png/about/double-arrow.png" alt="img">
									</div>
									<div class="servic-data mt-3">
										<h4 class="font-weight-semibold mb-2">Compare</h4>
										<p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Section-->

		<!--Section-->
		<section class="sptb position-relative pattern">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2 class="text-white position-relative">Testimonials</h2>
					<p class="text-white-50 position-relative">Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div id="myCarousel" class="owl-carousel testimonial-owl-carousel">
							<div class="item text-center">
								<div class="row">
									<div class="col-xl-8 col-md-12 d-block mx-auto">
										<div class="testimonia">
										    <p class="text-white-80">
												<i class="fa fa-quote-left text-white-80"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore cum accusamus eveniet molestias voluptatum inventore laboriosam labore sit, aspernatur praesentium iste impedit quidem dolor Ipsum.
											</p>
											<h3 class="title">Elizabeth</h3>
											<span class="post"></span>
											<div class="rating-stars">
												<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
												<div class="rating-stars-container">
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
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
											<div class="owl-controls clickable">
												<div class="owl-pagination">
													<div class="owl-page active">
														<span class=""></span>
													</div>
													<div class="owl-page ">
														<span class=""></span>
													</div>
													<div class="owl-page">
														<span class=""></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item text-center">
								<div class="row">
									<div class="col-xl-8 col-md-12 d-block mx-auto">
										<div class="testimonia">
											<p class="text-white-80"><i class="fa fa-quote-left"></i> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore. </p>
											<div class="testimonia-data">
												<h3 class="title">williamson</h3>
												<span class="post"></span>
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
													<div class="owl-controls clickable">
														<div class="owl-pagination">
															<div class="owl-page ">
																<span class=""></span>
															</div>
															<div class="owl-page active">
																<span class=""></span>
															</div>
															<div class="owl-page">
																<span class=""></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item text-center">
								<div class="row">
									<div class="col-xl-8 col-md-12 d-block mx-auto">
										<div class="testimonia">
											<p class="text-white-80"><i class="fa fa-quote-left"></i> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. usantium doloremque laudantium.</p>
											<div class="testimonia-data">
											    <h3 class="title">Sophie Carr</h3>
												<span class="post"></span>
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
													<div class="owl-controls clickable">
														<div class="owl-pagination">
															<div class="owl-page ">
																<span class=""></span>
															</div>
															<div class="owl-page">
																<span class=""></span>
															</div>
															<div class="owl-page active">
																<span class=""></span>
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
					</div>
					<div class="col-md-12">
						<div class="text-center mt-5">
							<a class="btn btn-primary" href="#">View all testimonial</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Section-->

		<!--Section-->
		<section class="sptb">
		    <div class="container">
				<div class="section-title center-block text-center">
					<h2>The Community for Creative People</h2>
					<p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
				</div>
				<div class="col-md-12">
					<div class="items-gallery">
						<div class="items-blog-tab text-center">
							<div class="items-blog-tab-heading row">
								<div class="col-12">
									<ul class="nav items-blog-tab-menu">
										<li class=""><a href="#tab-1" class="active show" data-toggle="tab">All</a></li>
										<li><a href="#tab-2" data-toggle="tab" class="">Moccasin Bistre</a></li>
										<li><a href="#tab-3" data-toggle="tab" class="">Sangria Cerise</a></li>
										<li><a href="#tab-4" data-toggle="tab" class="">Chittenden</a></li>
										<li><a href="#tab-5" data-toggle="tab" class="">Wisteria</a></li>
									</ul>
								</div>
							</div>
							<div class="tab-content">
								<div class="tab-pane active" id="tab-1">
									<div class="row" id="cars-containers">
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card">
											    <span class="ribbon-3">
													<span><i class="car car-suzuki"></i></span>
												</span>
												<div class="item-card8-img  br-tr-7 br-tl-7">
													<img src="../assets/images/media/others/maruthi1.jpg" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-info fs-20 mb-0">$987</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted mb-1 fs-13">16 November 2019.</p>
														<a class="text-dark" href="#"><h4 class="font-weight-semibold">Merrimack</h4></a>
														<p class="mb-2">Lorem Ipsum available, but the majority have suffered alteration in some form laboriosam</p>
														<div class="d-flex align-items-center pt-2 mt-auto">
															<img src="../assets/images/users/male/15.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
															<div>
																<a href="#" class="text-default">Royal Hamblin</a>
																<small class="d-block text-muted">10 days ago</small>
															</div>
															<div class="ml-auto text-muted">
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card">
											    <span class="ribbon-2">
													<span><i class="car car-volvo"></i></span>
												</span>
												<div class="item-card8-img  br-tr-7 br-tl-7">
													<img src="../assets/images/media/others/volvo1.jpg" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-primary fs-20 mb-0">$789</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted mb-1 fs-13">16 November 2019.</p>
														<a class="text-dark" href="#"><h4 class="font-weight-semibold">Ranchette</h4></a>
														<p class="mb-2">Lorem Ipsum available, but the majority have suffered alteration in some form laboriosam</p>
														<div class="d-flex align-items-center pt-2 mt-auto">
															<img src="../assets/images/users/female/5.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
															<div>
																<a href="#" class="text-default">Rosita Chatmon</a>
																<small class="d-block text-muted">10 days ago</small>
															</div>
															<div class="ml-auto text-muted">
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card">
											    <span class="ribbon-1">
													<span><i class="car car-volvo"></i></span>
												</span>
												<div class="item-card8-img">
													<img src="../assets/images/media/others/volvo2.jpg" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-secondary fs-20 mb-0">$675</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted mb-1 fs-13">16 November 2019.</p>
														<a class="text-dark" href="#"><h4 class="font-weight-semibold">Sheridan</h4></a>
														<p class="mb-2">Lorem Ipsum available, but the majority have suffered alteration in some form laboriosam</p>
														<div class="d-flex align-items-center pt-2 mt-auto">
															<img src="../assets/images/users/male/15.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
															<div>
																<a href="#" class="text-default">Royal Hamblin</a>
																<small class="d-block text-muted">10 days ago</small>
															</div>
															<div class="ml-auto text-muted">
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card">
											    <span class="ribbon-1">
													<span><i class="car car-suzuki"></i></span>
												</span>
												<div class="item-card8-img">
													<img src="../assets/images/media/others/maruthi2.jpg" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-secondary fs-20 mb-0">$785</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted mb-1 fs-13">16 November 2019.</p>
														<a class="text-dark" href="#"><h4 class="font-weight-semibold">Byzantine</h4></a>
														<p class="mb-2">Lorem Ipsum available, but the majority have suffered alteration in some form laboriosam</p>
														<div class="d-flex align-items-center pt-2 mt-auto">
															<img src="../assets/images/users/male/6.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
															<div>
																<a href="#" class="text-default">Loyd Nolf</a>
																<small class="d-block text-muted">15 days ago</small>
															</div>
															<div class="ml-auto text-muted">
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card">
											    <span class="ribbon-2">
													<span><i class="car car-suzuki"></i></span>
												</span>
												<div class="item-card8-img">
													<img src="../assets/images/media/others/maruthi3.jpg" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-primary fs-20 mb-0">$432</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted mb-1 fs-13">16 November 2019.</p>
														<a class="text-dark" href="#"><h4 class="font-weight-semibold">Chamoisse</h4></a>
														<p class="mb-2">Lorem Ipsum available, but the majority have suffered alteration in some form laboriosam</p>
														<div class="d-flex align-items-center pt-2 mt-auto">
															<img src="../assets/images/users/female/5.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
															<div>
																<a href="#" class="text-default">Rosita Chatmon</a>
																<small class="d-block text-muted">10 days ago</small>
															</div>
															<div class="ml-auto text-muted">
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card">
											    <span class="ribbon-3">
													<span><i class="car car-volvo"></i></span>
												</span>
												<div class="item-card8-img">
													<img src="../assets/images/media/others/volvo3.jpg" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-info fs-20 mb-0">$235</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted mb-1 fs-13">16 November 2019.</p>
														<a class="text-dark" href="#"><h4 class="font-weight-semibold">Chartreuse</h4></a>
														<p class="mb-2">Lorem Ipsum available, but the majority have suffered alteration in some form laboriosam</p>
														<div class="d-flex align-items-center pt-2 mt-auto">
															<img src="../assets/images/users/male/6.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
															<div>
																<a href="#" class="text-default">Loyd Nolf</a>
																<small class="d-block text-muted">15 days ago</small>
															</div>
															<div class="ml-auto text-muted">
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card">
												 <span class="ribbon-3">
													<span><i class="car car-honda"></i></span>
												</span>
												<div class="item-card8-img  br-tr-7 br-tl-7">
													<img src="../assets/images/media/f2.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-info fs-20 mb-0">$890</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted mb-1 fs-13">16 November 2019.</p>
														<a class="text-dark" href="#"><h4 class="font-weight-semibold">Gainsboro</h4></a>
														<p class="mb-2">Lorem Ipsum available, but the majority have suffered alteration in some form laboriosam</p>
														<div class="d-flex align-items-center pt-2 mt-auto">
															<img src="../assets/images/users/female/5.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
															<div>
																<a href="#" class="text-default">Rosita Chatmon</a>
																<small class="d-block text-muted">10 days ago</small>
															</div>
															<div class="ml-auto text-muted">
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card">
											    <span class="ribbon-2">
													<span><i class="car car-honda"></i></span>
												</span>
												<div class="item-card8-img">
													<img src="../assets/images/media/v1.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-primary fs-20 mb-0">$160</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted mb-1 fs-13">16 November 2019.</p>
														<a class="text-dark" href="#"><h4 class="font-weight-semibold">Glacous Cerise</h4></a>
														<p class="mb-2">Lorem Ipsum available, but the majority have suffered alteration in some form laboriosam</p>
														<div class="d-flex align-items-center pt-2 mt-auto">
															<img src="../assets/images/users/male/15.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
															<div>
																<a href="#" class="text-default">Royal Hamblin</a>
																<small class="d-block text-muted">10 days ago</small>
															</div>
															<div class="ml-auto text-muted">
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card">
											    <span class="ribbon-1">
													<span><i class="car car-honda"></i></span>
												</span>
												<div class="item-card8-img  br-tr-7 br-tl-7">
													<img src="../assets/images/media/v2.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-secondary fs-20 mb-0">$456</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted mb-1 fs-13">16 November 2019.</p>
														<a class="text-dark" href="#"><h4 class="font-weight-semibold">Moccasin istre</h4></a>
														<p class="mb-2">Lorem Ipsum available, but the majority have suffered alteration in some form laboriosam</p>
														<div class="d-flex align-items-center pt-2 mt-auto">
															<img src="../assets/images/users/male/6.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
															<div>
																<a href="#" class="text-default">Loyd Nolf</a>
																<small class="d-block text-muted">15 days ago</small>
															</div>
															<div class="ml-auto text-muted">
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card mb-xl-0">
											    <span class="ribbon-3">
													<span><i class="car car-porsche"></i></span>
												</span>
												<div class="item-card8-img  br-tr-7 br-tl-7">
													<img src="../assets/images/media/others/porshe.jpg" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-info fs-20 mb-0">$987</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted mb-1 fs-13">16 November 2019.</p>
														<a class="text-dark" href="#"><h4 class="font-weight-semibold">Chartreuse</h4></a>
														<p class="mb-2">Lorem Ipsum available, but the majority have suffered alteration in some form laboriosam</p>
														<div class="d-flex align-items-center pt-2 mt-auto">
															<img src="../assets/images/users/male/15.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
															<div>
																<a href="#" class="text-default">Royal Hamblin</a>
																<small class="d-block text-muted">10 days ago</small>
															</div>
															<div class="ml-auto text-muted">
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card mb-xl-0">
											    <span class="ribbon-1">
													<span><i class="car car-porsche"></i></span>
												</span>
												<div class="item-card8-img">
													<img src="../assets/images/media/others/porshe2.jpg" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-secondary fs-20 mb-0">$785</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted mb-1 fs-13">16 November 2019.</p>
														<a class="text-dark" href="#"><h4 class="font-weight-semibold">Fulvous</h4></a>
														<p class="mb-2">Lorem Ipsum available, but the majority have suffered alteration in some form laboriosam</p>
														<div class="d-flex align-items-center pt-2 mt-auto">
															<img src="../assets/images/users/male/6.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
															<div>
																<a href="#" class="text-default">Loyd Nolf</a>
																<small class="d-block text-muted">15 days ago</small>
															</div>
															<div class="ml-auto text-muted">
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card mb-0">
											    <span class="ribbon-2">
													<span><i class="car car-porsche"></i></span>
												</span>
												<div class="item-card8-img">
													<img src="../assets/images/media/others/porshe3.jpg" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-primary fs-20 mb-0">$432</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted mb-1 fs-13">16 November 2019.</p>
														<a class="text-dark" href="#"><h4 class="font-weight-semibold">Harlequin</h4></a>
														<p class="mb-2">Lorem Ipsum available, but the majority have suffered alteration in some form laboriosam</p>
														<div class="d-flex align-items-center pt-2 mt-auto">
															<img src="../assets/images/users/female/5.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
															<div>
																<a href="#" class="text-default">Rosita Chatmon</a>
																<small class="d-block text-muted">10 days ago</small>
															</div>
															<div class="ml-auto text-muted">
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab-2">
									<div class="row">
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card mb-xl-0">
											    <span class="ribbon-3">
													<span><i class="car car-suzuki"></i></span>
												</span>
												<div class="item-card8-img  br-tr-7 br-tl-7">
													<img src="../assets/images/media/others/maruthi1.jpg" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-info fs-20 mb-0">$987</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted mb-1 fs-13">16 November 2019.</p>
														<a class="text-dark" href="#"><h4 class="font-weight-semibold">Merrimack</h4></a>
														<p class="mb-2">Lorem Ipsum available, but the majority have suffered alteration in some form laboriosam</p>
														<div class="d-flex align-items-center pt-2 mt-auto">
															<img src="../assets/images/users/male/15.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
															<div>
																<a href="#" class="text-default">Royal Hamblin</a>
																<small class="d-block text-muted">10 days ago</small>
															</div>
															<div class="ml-auto text-muted">
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card mb-xl-0">
											    <span class="ribbon-1">
													<span><i class="car car-suzuki"></i></span>
												</span>
												<div class="item-card8-img">
													<img src="../assets/images/media/others/maruthi2.jpg" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-secondary fs-20 mb-0">$785</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted mb-1 fs-13">16 November 2019.</p>
														<a class="text-dark" href="#"><h4 class="font-weight-semibold">Byzantine</h4></a>
														<p class="mb-2">Lorem Ipsum available, but the majority have suffered alteration in some form laboriosam</p>
														<div class="d-flex align-items-center pt-2 mt-auto">
															<img src="../assets/images/users/male/6.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
															<div>
																<a href="#" class="text-default">Loyd Nolf</a>
																<small class="d-block text-muted">15 days ago</small>
															</div>
															<div class="ml-auto text-muted">
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card mb-0">
											    <span class="ribbon-2">
													<span><i class="car car-suzuki"></i></span>
												</span>
												<div class="item-card8-img">
													<img src="../assets/images/media/others/maruthi3.jpg" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-primary fs-20 mb-0">$432</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted mb-1 fs-13">16 November 2019.</p>
														<a class="text-dark" href="#"><h4 class="font-weight-semibold">Chamoisse</h4></a>
														<p class="mb-2">Lorem Ipsum available, but the majority have suffered alteration in some form laboriosam</p>
														<div class="d-flex align-items-center pt-2 mt-auto">
															<img src="../assets/images/users/female/5.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
															<div>
																<a href="#" class="text-default">Rosita Chatmon</a>
																<small class="d-block text-muted">10 days ago</small>
															</div>
															<div class="ml-auto text-muted">
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab-3">
									<div class="row">
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card mb-xl-0">
											    <span class="ribbon-2">
													<span><i class="car car-volvo"></i></span>
												</span>
												<div class="item-card8-img  br-tr-7 br-tl-7">
													<img src="../assets/images/media/others/volvo1.jpg" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-primary fs-20 mb-0">$789</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted mb-1 fs-13">16 November 2019.</p>
														<a class="text-dark" href="#"><h4 class="font-weight-semibold">Ranchette</h4></a>
														<p class="mb-2">Lorem Ipsum available, but the majority have suffered alteration in some form laboriosam</p>
														<div class="d-flex align-items-center pt-2 mt-auto">
															<img src="../assets/images/users/female/5.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
															<div>
																<a href="#" class="text-default">Rosita Chatmon</a>
																<small class="d-block text-muted">10 days ago</small>
															</div>
															<div class="ml-auto text-muted">
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card mb-xl-0">
											    <span class="ribbon-1">
													<span><i class="car car-volvo"></i></span>
												</span>
												<div class="item-card8-img">
													<img src="../assets/images/media/others/volvo2.jpg" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-secondary fs-20 mb-0">$675</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted mb-1 fs-13">16 November 2019.</p>
														<a class="text-dark" href="#"><h4 class="font-weight-semibold">Sheridan</h4></a>
														<p class="mb-2">Lorem Ipsum available, but the majority have suffered alteration in some form laboriosam</p>
														<div class="d-flex align-items-center pt-2 mt-auto">
															<img src="../assets/images/users/male/15.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
															<div>
																<a href="#" class="text-default">Royal Hamblin</a>
																<small class="d-block text-muted">10 days ago</small>
															</div>
															<div class="ml-auto text-muted">
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card mb-0">
											    <span class="ribbon-3">
													<span><i class="car car-volvo"></i></span>
												</span>
												<div class="item-card8-img">
													<img src="../assets/images/media/others/volvo3.jpg" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-info fs-20 mb-0">$235</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted mb-1 fs-13">16 November 2019.</p>
														<a class="text-dark" href="#"><h4 class="font-weight-semibold">Chartreuse</h4></a>
														<p class="mb-2">Lorem Ipsum available, but the majority have suffered alteration in some form laboriosam</p>
														<div class="d-flex align-items-center pt-2 mt-auto">
															<img src="../assets/images/users/male/6.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
															<div>
																<a href="#" class="text-default">Loyd Nolf</a>
																<small class="d-block text-muted">15 days ago</small>
															</div>
															<div class="ml-auto text-muted">
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab-4">
									<div class="row">
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card mb-xl-0">
												 <span class="ribbon-3">
													<span><i class="car car-honda"></i></span>
												</span>
												<div class="item-card8-img  br-tr-7 br-tl-7">
													<img src="../assets/images/media/f2.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-info fs-20 mb-0">$890</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted mb-1 fs-13">16 November 2019.</p>
														<a class="text-dark" href="#"><h4 class="font-weight-semibold">Gainsboro</h4></a>
														<p class="mb-2">Lorem Ipsum available, but the majority have suffered alteration in some form laboriosam</p>
														<div class="d-flex align-items-center pt-2 mt-auto">
															<img src="../assets/images/users/female/5.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
															<div>
																<a href="#" class="text-default">Rosita Chatmon</a>
																<small class="d-block text-muted">10 days ago</small>
															</div>
															<div class="ml-auto text-muted">
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card mb-0">
											    <span class="ribbon-2">
													<span><i class="car car-honda"></i></span>
												</span>
												<div class="item-card8-img">
													<img src="../assets/images/media/v1.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-primary fs-20 mb-0">$160</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted mb-1 fs-13">16 November 2019.</p>
														<a class="text-dark" href="#"><h4 class="font-weight-semibold">Glacous Cerise</h4></a>
														<p class="mb-2">Lorem Ipsum available, but the majority have suffered alteration in some form laboriosam</p>
														<div class="d-flex align-items-center pt-2 mt-auto">
															<img src="../assets/images/users/male/15.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
															<div>
																<a href="#" class="text-default">Royal Hamblin</a>
																<small class="d-block text-muted">10 days ago</small>
															</div>
															<div class="ml-auto text-muted">
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card mb-lg-0">
											    <span class="ribbon-1">
													<span><i class="car car-honda"></i></span>
												</span>
												<div class="item-card8-img  br-tr-7 br-tl-7">
													<img src="../assets/images/media/v2.png" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-secondary fs-20 mb-0">$456</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted mb-1 fs-13">16 November 2019.</p>
														<a class="text-dark" href="#"><h4 class="font-weight-semibold">Moccasin istre</h4></a>
														<p class="mb-2">Lorem Ipsum available, but the majority have suffered alteration in some form laboriosam</p>
														<div class="d-flex align-items-center pt-2 mt-auto">
															<img src="../assets/images/users/male/6.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
															<div>
																<a href="#" class="text-default">Loyd Nolf</a>
																<small class="d-block text-muted">15 days ago</small>
															</div>
															<div class="ml-auto text-muted">
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab-5">
									<div class="row">
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card mb-xl-0">
											    <span class="ribbon-3">
													<span><i class="car car-porsche"></i></span>
												</span>
												<div class="item-card8-img  br-tr-7 br-tl-7">
													<img src="../assets/images/media/others/porshe.jpg" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-info fs-20 mb-0">$987</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted mb-1 fs-13">16 November 2019.</p>
														<a class="text-dark" href="#"><h4 class="font-weight-semibold">Chartreuse</h4></a>
														<p class="mb-2">Lorem Ipsum available, but the majority have suffered alteration in some form laboriosam</p>
														<div class="d-flex align-items-center pt-2 mt-auto">
															<img src="../assets/images/users/male/15.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
															<div>
																<a href="#" class="text-default">Royal Hamblin</a>
																<small class="d-block text-muted">10 days ago</small>
															</div>
															<div class="ml-auto text-muted">
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card mb-xl-0">
											    <span class="ribbon-1">
													<span><i class="car car-porsche"></i></span>
												</span>
												<div class="item-card8-img">
													<img src="../assets/images/media/others/porshe2.jpg" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-secondary fs-20 mb-0">$785</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted mb-1 fs-13">16 November 2019.</p>
														<a class="text-dark" href="#"><h4 class="font-weight-semibold">Fulvous</h4></a>
														<p class="mb-2">Lorem Ipsum available, but the majority have suffered alteration in some form laboriosam</p>
														<div class="d-flex align-items-center pt-2 mt-auto">
															<img src="../assets/images/users/male/6.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
															<div>
																<a href="#" class="text-default">Loyd Nolf</a>
																<small class="d-block text-muted">15 days ago</small>
															</div>
															<div class="ml-auto text-muted">
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12">
											<div class="card mb-0">
											    <span class="ribbon-2">
													<span><i class="car car-porsche"></i></span>
												</span>
												<div class="item-card8-img">
													<img src="../assets/images/media/others/porshe3.jpg" alt="img" class="cover-image">
												</div>
												<div class="item-card8-overlaytext">
													<h6 class="bg-primary fs-20 mb-0">$432</h6>
												</div>
												<div class="card-body">
													<div class="item-card8-desc">
														<p class="text-muted mb-1 fs-13">16 November 2019.</p>
														<a class="text-dark" href="#"><h4 class="font-weight-semibold">Harlequin</h4></a>
														<p class="mb-2">Lorem Ipsum available, but the majority have suffered alteration in some form laboriosam</p>
														<div class="d-flex align-items-center pt-2 mt-auto">
															<img src="../assets/images/users/female/5.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
															<div>
																<a href="#" class="text-default">Rosita Chatmon</a>
																<small class="d-block text-muted">10 days ago</small>
															</div>
															<div class="ml-auto text-muted">
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
																<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
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
					</div>
				</div>
			</div>
		</section>
		<!--Section-->

		<!--Section-->
		<section class="sptb  bg-white">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>Popular Course Types</h2>
					<p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
				</div>
				<div class="row">
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="#" class="car-body-shapes card text-center p-4 bg-primary box-shadow2">
							<div class="car-body-img"><img src="../assets/logo/logo_mobile.png" alt="img"></div>
							<div class="servic-data">
								<h4 class="font-weight-semibold mb-0 text-white">SUV</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="#" class="car-body-shapes card text-center p-4 bg-secondary box-shadow2">
							<div class="car-body-img"><img src="../assets/logo/logo_mobile.png" alt="img"></div>
							<div class="servic-data">
								<h4 class="font-weight-semibold mb-0 text-white">MUV</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="#" class="car-body-shapes card text-center p-4 bg-info box-shadow2">
							<div class="car-body-img"><img src="../assets/logo/logo_mobile.png" alt="img"></div>
							<div class="servic-data">
								<h4 class="font-weight-semibold mb-0 text-white">Car Roof</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="#" class="car-body-shapes card text-center p-4 bg-success box-shadow2">
							<div class="car-body-img"><img src="../assets/logo/logo_mobile.png" alt="img"></div>
							<div class="servic-data">
								<h4 class="font-weight-semibold mb-0 text-white">Alto</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="#" class="car-body-shapes card text-center p-4 bg-danger box-shadow2">
							<div class="car-body-img"><img src="../assets/logo/logo_mobile.png" alt="img"></div>
							<div class="servic-data">
								<h4 class="font-weight-semibold mb-0 text-white">Ringer Ace</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="#" class="car-body-shapes card text-center p-4 bg-purple box-shadow2">
							<div class="car-body-img"><img src="../assets/logo/logo_mobile.png" alt="img"></div>
							<div class="servic-data">
								<h4 class="font-weight-semibold mb-0 text-white">Convertible</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="#" class="car-body-shapes card text-center p-4 mb-lg-0 bg-blue box-shadow2">
							<div class="car-body-img"><img src="../assets/logo/logo_mobile.png" alt="img"></div>
							<div class="servic-data">
								<h4 class="font-weight-semibold mb-0 text-white">Pick-up</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="#" class="car-body-shapes card text-center mb-lg-0 p-4 bg-pink box-shadow2">
							<div class="car-body-img"><img src="../assets/logo/logo_mobile.png" alt="img"></div>
							<div class="servic-data">
								<h4 class="font-weight-semibold mb-0 text-white">Luxary</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="#" class="car-body-shapes card mb-5  mb-xl-0  text-center p-4 bg-indigo box-shadow2">
							<div class="car-body-img"><img src="../assets/logo/logo_mobile.png" alt="img"></div>
							<div class="servic-data">
								<h4 class="font-weight-semibold mb-0 text-white">Coupe</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="#" class="car-body-shapes card text-center mb-lg-0 p-4 bg-orange box-shadow2">
							<div class="car-body-img"><img src="../assets/logo/logo_mobile.png" alt="img"></div>
							<div class="servic-data">
								<h4 class="font-weight-semibold mb-0 text-white">Sport Car</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="#" class="car-body-shapes card text-center mb-sm-0 p-4 bg-lime box-shadow2">
							<div class="car-body-img"><img src="../assets/logo/logo_mobile.png" alt="img"></div>
							<div class="servic-data">
								<h4 class="font-weight-semibold mb-0 text-white">Mini Van</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="#" class="car-body-shapes card text-center mb-0 p-4 bg-dark box-shadow2">
							<div class="car-body-img"><img src="../assets/logo/logo_mobile.png" alt="img"></div>
							<div class="servic-data">
								<h4 class="font-weight-semibold mb-0 text-white">Van</h4>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>
		<!--Section-->

		<!--Footer Section-->
		@include('common.footer')
		<!--Footer Section-->

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>
@endsection