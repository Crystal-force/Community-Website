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
							<h1>Service Post</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="{{route('main')}}">Home</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Service Post</li>
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
						<div class="card mb-xl-0">
							<div class="card-header">
								<h3 class="card-title">Add Post</h3>
							</div>
							<div class="card-body">
								<form id="commentForm" method="get" class="form-horizontal mb-0">
									<div id="rootwizard" class="border pt-0">
										<ul class="nav nav-tabs nav-justified">
											<li class="nav-item"><a href="#first" data-toggle="tab" class="nav-link font-bold">Select category</a></li>
											<li class="nav-item"><a href="#second" data-toggle="tab" class="nav-link font-bold">Details</a></li>
											<li class="nav-item"><a href="#third" data-toggle="tab" class="nav-link font-bold">Personal Details</a></li>
											<li class="nav-item"><a href="#fourth" data-toggle="tab" class="nav-link font-bold ">Payment</a></li>
										</ul>
										<div class="tab-content card-body mt-3 mb-0 b-0">
											<div class="tab-pane fade" id="first">
												<div class="control-group form-group">
													<div class="form-group">
														<label class="form-label text-dark">Service Title</label>
														<input type="text" class="form-control required Title" placeholder="Service name">
													</div>
												</div>
												<div class="control-group form-group">
													<div class="form-group">
														<label class="form-label text-dark">Category</label>
														<select class="form-control custom-select required category">
															<option value="0">Select Option</option>
															<option value="1">Vehicle</option>
														</select>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="second">
												<div class="control-group form-group">
													<label class="form-label text-dark">Description</label>
													<textarea class="form-control required" name="example-textarea-input" rows="6" placeholder="text here.."></textarea>
												</div>
												<div class="control-group form-group">
													<div class="custom-file">
														<input type="file" class="custom-file-input required" name="example-file-input-custom">
														<label class="custom-file-label">Upload Images</label>
													</div>
												</div>
												<div class="control-group form-group">
													<div class="form-group">
														<label class="form-label text-dark">Service Price($)</label>
														<input type="text" class="form-control required Title" placeholder="Service price">
													</div>
												</div>
												<div class="control-group form-group">
													<label class="form-label text-dark">Service Deadline</label>
													<div class="d-md-flex ad-post-details">
														<label class="custom-control custom-radio mb-2 mr-4">
															<input type="radio" class="custom-control-input" name="radios1" value="option1" checked="">
															<span class="custom-control-label"><a href="#" class="text-muted">10 Days Free</a></span>
														</label>
														<label class="custom-control custom-radio  mb-2 mr-4">
															<input type="radio" class="custom-control-input" name="radios1" value="option2" >
															<span class="custom-control-label"><a href="#" class="text-muted">30 days / 20$</a></span>
														</label>
														<label class="custom-control custom-radio  mb-2 mr-4">
															<input type="radio" class="custom-control-input" name="radios1" value="option3" >
															<span class="custom-control-label"><a href="#" class="text-muted">3months / 50$</a></span>
														</label>
														<label class="custom-control custom-radio  mb-2">
															<input type="radio" class="custom-control-input" name="radios1" value="option4" >
															<span class="custom-control-label"><a href="#" class="text-muted">6 year / 80$</a></span>
														</label>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="third">
												<div class="control-group form-group">
													<label class="form-label">Name</label>
													<input type="text" class="form-control required" placeholder="Name">
												</div>
												<div class="control-group form-group">
													<label class="form-label">Email</label>
													<input type="email" class="form-control required" placeholder="Email Address">
												</div>
												<div class="control-group form-group">
													<label class="form-label">Phone Number</label>
													<input type="number" class="form-control required" placeholder="Number">
												</div>
												<div class="control-group form-group mb-0">
													<label class="form-label">Address</label>
													<input type="text" class="form-control required" placeholder="Address">
												</div>
											</div>
											<div class="tab-pane fade" id="fourth">
												<div class="panel panel-primary">
													<div class=" tab-menu-heading border-0 pl-0 pr-0 pt-0">
														<div class="tabs-menu1 ">
															<!-- Tabs -->
															<ul class="nav panel-tabs">
																<li><a href="#tab5" class="active" data-toggle="tab">Credit/ Debit Card</a></li>
																<li><a href="#tab6" data-toggle="tab">Pay-pal</a></li>
																<li><a href="#tab7" data-toggle="tab">Net Banking</a></li>
																<li><a href="#tab8" data-toggle="tab">Gift Voucher</a></li>
															</ul>
														</div>
													</div>
													<div class="panel-body tabs-menu-body pl-0 pr-0 border-0">
														<div class="tab-content">
															<div class="tab-pane active " id="tab5">
																<div class="form-group">
																	<label class="form-label" >CardHolder Name</label>
																	<input type="text" class="form-control" id="name1" placeholder="First Name">
																</div>
																<div class="form-group">
																	<label class="form-label">Card number</label>
																	<div class="input-group">
																		<input type="text" class="form-control" placeholder="Search for...">
																		<span class="input-group-append">
																			<button class="btn btn-info" type="button"><i class="fa fa-cc-visa"></i> &nbsp; <i class="fa fa-cc-amex"></i> &nbsp;
																			<i class="fa fa-cc-mastercard"></i></button>
																		</span>
																	</div>
																</div>
																<div class="row">
																	<div class="col-sm-8">
																		<div class="form-group mb-sm-0">
																			<label class="form-label">Expiration</label>
																			<div class="input-group">
																				<input type="number" class="form-control" placeholder="MM" name="expiremonth">
																				<input type="number" class="form-control" placeholder="YY" name="expireyear">
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-4 ">
																		<div class="form-group mb-0">
																			<label class="form-label">CVV <i class="fa fa-question-circle"></i></label>
																			<input type="number" class="form-control" required="">
																		</div>
																	</div>
																</div>
															</div>
															<div class="tab-pane " id="tab6">
																<h6 class="font-weight-semibold">Paypal is easiest way to pay online</h6>
																<p><a href="#" class="btn btn-primary"><i class="fa fa-paypal"></i> Log in my Paypal</a></p>
																<p class="mb-0"><strong>Note:</strong> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
															</div>
															<div class="tab-pane " id="tab7">
																<div class="control-group form-group">
																	<div class="form-group">
																		<label class="form-label text-dark">All Banks</label>
																		<select class="form-control custom-select required category">
																			<option value="0">Select Bank</option>
																			<option value="1">Credit Agricole Group</option>
																			<option value="2">Bank of America</option>
																			<option value="3">Mitsubishi UFJ Financial Group</option>
																			<option value="4">BNP Paribas</option>
																			<option value="5">JPMorgan Chase & Co.</option>
																			<option value="6">HSBC Holdings</option>
																			<option value="7">Bank of China</option>
																			<option value="8">Agricultural Bank of China</option>
																			<option value="9">ChinaQuaerat Bank Corp.</option>
																			<option value="10">Industrial & Commercial Bank of China, or ICBC</option>
																		</select>
																	</div>
																</div>
																<p><a href="#" class="btn btn-primary">Log in Bank</a></p>
															</div>
															<div class="tab-pane " id="tab8">
																<div class="form-group">
																	<label class="form-label">Gift Voucher</label>
																	<div class="input-group">
																		<input type="text" class="form-control" placeholder="Enter Your Gv Number">
																		<span class="input-group-append">
																			<button class="btn btn-info" type="button">
																			Apply</button>
																		</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group row clearfix">
													<div class="col-lg-12">
														<div class="checkbox checkbox-info">
															<label class="custom-control mt-4 custom-checkbox">
																<input type="checkbox" class="custom-control-input" />
																<span class="custom-control-label text-dark pl-2">I agree with the Terms and Conditions.</span>
															</label>
														</div>
													</div>
												</div>
											</div>
											<ul class="list-inline wizard mb-0 mt-4">
												<li class="previous list-inline-item"><a href="#" class="btn btn-secondary mb-0 waves-effect waves-light">Previous</a>
												</li>
												<li class="next list-inline-item float-right"><a href="#" class="btn btn-primary  mb-0 mr-2 waves-effect waves-light">Continue</a></li>
											</ul>
										</div>
									</div>
								</form>
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
										<a href="tips.html"> View more..</a>
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