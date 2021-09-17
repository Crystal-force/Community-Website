@extends('layout.index')
@section('content')
		<!--Loader-->
		<div id="global-loader">
			<img src="../assets/preloader/Fidget-spinner.gif" class="loader-img " alt="">
		</div>

		@include('common.top-header')

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
						<li class="breadcrumb-item"><a href="{{route('main')}}">Home</a></li>
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
						<div class="card">
							<div class="card-body">
								<div class="user-tabel table-responsive border-top">
									<table class="table card-table table-bordered table-hover table-vcenter text-nowrap">
										<tbody>
											<tr>
												<th ></th>
												<th>Name</th>
												<th>Membership Status</th>
												<th>Member Since</th>
												<th></th>
											</tr>
											<tr>
												<td class=""><span class="avatar avatar-md  d-block brround cover-image" data-image-src="../assets/images/users/female/25.jpg"></span></td>
												<td><a href="userprofile.html" class="text-dark">Jane Pearson</a></td>
												<td><a href="#" class="badge badge-success">Active</a></td>
												<td>December-05-2019</td>
												<td>
													<a href="userprofile.html" class="btn btn-purple btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
												</td>
											</tr>
											<tr>
												<td><span class="avatar avatar-md  d-block brround cover-image" data-image-src="../assets/images/users/male/9.jpg"></span></td>
												<td><a href="userprofile.html" class="text-dark">Jason Porter</a></td>
												<td><a href="#" class="badge badge-success">Active</a></td>
												<td>December-01-2019</td>
												<td>
													<a href="userprofile.html" class="btn btn-purple btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
												</td>
											</tr>
											<tr>
												<td><span class="avatar avatar-md  d-block brround cover-image" data-image-src="../assets/images/users/female/25.jpg"></span></td>
												<td><a href="userprofile.html" class="text-dark">Teresa Wood</a></td>
												<td><a href="#" class="badge badge-success">Active</a></td>
												<td>November-29-2019</td>
												<td>
													<a href="userprofile.html" class="btn btn-purple btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
												</td>
											</tr>
											<tr>
												<td><span class="avatar avatar-md  d-block brround cover-image" data-image-src="../assets/images/users/female/16.jpg"></span></td>
												<td><a href="userprofile.html" class="text-dark">Mary Butler</a></td>
												<td><a href="#" class="badge badge-info">Paused</a></td>
												<td>November-29-2019</td>
												<td>
													<a href="userprofile.html" class="btn btn-purple btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
												</td>
											</tr>
											<tr>
												<td><span class="avatar avatar-md  d-block brround cover-image" data-image-src="../assets/images/users/female/27.jpg"></span></td>
												<td><a href="userprofile.html" class="text-dark">Janice Lane</a></td>
												<td><a href="#" class="badge badge-success">Active</a></td>
												<td>November-25-2019</td>
												<td>
													<a href="userprofile.html" class="btn btn-purple btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
												</td>
											</tr>
											<tr>
												<td><span class="avatar avatar-md  d-block brround cover-image" data-image-src="../assets/images/users/male/26.jpg"></span></td>
												<td><a href="userprofile.html" class="text-dark">Anthony Miller</a></td>
												<td><a href="#" class="badge badge-info">Pasused</a></td>
												<td>November-24-2019</td>
												<td>
													<a href="userprofile.html" class="btn btn-purple btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
												</td>
											</tr>
											<tr>
												<td><span class="avatar avatar-md  d-block brround cover-image" data-image-src="../assets/images/users/female/9.jpg"></span></td>
												<td><a href="userprofile.html" class="text-dark">Denise Elliott</a></td>
												<td><a href="#" class="badge badge-success">Active</a></td>
												<td>November-21-2019</td>
												<td>
													<a href="userprofile.html" class="btn btn-purple btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
												</td>
											</tr>
											<tr>
												<td><span class="avatar avatar-md  d-block brround cover-image" data-image-src="../assets/images/users/female/16.jpg"></span></td>
												<td><a href="userprofile.html" class="text-dark">Rose Cook</a></td>
												<td><a href="#" class="badge badge-danger">Blocked</a></td>
												<td>November-15-2019</td>
												<td>
													<a href="userprofile.html" class="btn btn-purple btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
												</td>
											</tr>
											<tr>
												<td><span class="avatar avatar-md  d-block brround cover-image" data-image-src="../assets/images/users/male/17.jpg"></span></td>
												<td><a href="userprofile.html" class="text-dark">Terry Tucker</a></td>
												<td><a href="#" class="badge badge-success">Active,paused</a></td>
												<td>November-14-2019</td>
												<td>
													<a href="userprofile.html" class="btn btn-purple btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
												</td>
											</tr>
											<tr>
												<td><span class="avatar avatar-md  d-block brround cover-image" data-image-src="../assets/images/users/female/6.jpg"></span></td>
												<td><a href="userprofile.html" class="text-dark">Grace Knight</a></td>
												<td><a href="#" class="badge badge-success">Active</a></td>
												<td>November-11-2019</td>
												<td>
													<a href="userprofile.html" class="btn btn-purple btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
												</td>
											</tr>
											<tr>
												<td><span class="avatar avatar-md  d-block brround cover-image" data-image-src="../assets/images/users/female/26.jpg" ></span></td>
												<td><a href="userprofile.html" class="text-dark">Elizabeth Martin</a></td>
												<td><a href="#" class="badge badge-success">Active,paused</a></td>
												<td>November-05-2019</td>
												<td>
													<a href="userprofile.html" class="btn btn-purple btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
												</td>
											</tr>
											<tr>
												<td><span class="avatar avatar-md  d-block brround cover-image" data-image-src="../assets/images/users/female/17.jpg"></span></td>
												<td><a href="userprofile.html" class="text-dark">Michelle Schultz</a></td>
												<td><a href="#" class="badge badge-danger">Blocked</a></td>
												<td>November-01-2019</td>
												<td>
													<a href="userprofile.html" class="btn btn-purple btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
												</td>
											</tr>
											<tr>
												<td><span class="avatar avatar-md  d-block brround cover-image" data-image-src="../assets/images/users/female/21.jpg"></span></td>
												<td><a href="userprofile.html" class="text-dark">Crystal Austin</a></td>
												<td><a href="#" class="badge badge-success">Active</a></td>
												<td>October-25-2019</td>
												<td>
													<a href="userprofile.html" class="btn btn-purple btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
												</td>
											</tr>
											<tr>
												<td><span class="avatar avatar-md  d-block brround cover-image" data-image-src="../assets/images/users/male/32.jpg"></span></td>
												<td><a href="userprofile.html" class="text-dark">Douglas Ray</a></td>
												<td><a href="#" class="badge badge-success">Active</a></td>
												<td>October-24-2019</td>
												<td>
													<a href="userprofile.html" class="btn btn-purple btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
												</td>
											</tr>
											<tr>
												<td><span class="avatar avatar-md  d-block brround cover-image" data-image-src="../assets/images/users/female/12.jpg"></span></td>
												<td><a href="userprofile.html" class="text-dark">Teresa Reyes</a></td>
												<td><a href="#" class="badge badge-info">Paused</a></td>
												<td>October-22-2019</td>
												<td>
													<a href="userprofile.html" class="btn btn-purple btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
												</td>
											</tr>
											<tr>
												<td><span class="avatar avatar-md  d-block brround cover-image" data-image-src="../assets/images/users/female/4.jpg"></span></td>
												<td><a href="userprofile.html" class="text-dark">Emma Wade</a></td>
												<td><a href="#" class="badge badge-success">Active</a></td>
												<td>October-21-2019</td>
												<td>
													<a href="userprofile.html" class="btn btn-purple btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
												</td>
											</tr>
											<tr>
												<td><span class="avatar avatar-md  d-block brround cover-image" data-image-src="../assets/images/users/female/27.jpg"></span></td>
												<td><a href="userprofile.html" class="text-dark">Carol Henderson</a></td>
												<td><a href="#" class="badge badge-danger">Blocked</a></td>
												<td>October-19-2019</td>
												<td>
													<a href="userprofile.html" class="btn btn-purple btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
												</td>
											</tr>
											<tr>
												<td><span class="avatar avatar-md  d-block brround cover-image" data-image-src="../assets/images/users/male/20.jpg" ></span></td>
												<td><a href="userprofile.html" class="text-dark">Christopher Harvey</a></td>
												<td><a href="#" class="badge badge-success">Active</a></td>
												<td>October-17-2019</td>
												<td>
													<a href="userprofile.html" class="btn btn-purple btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
												</td>
											</tr>
											<tr>
												<td><span class="avatar avatar-md  d-block brround cover-image" data-image-src="../assets/images/users/female/5.jpg"></span></td>
												<td><a href="userprofile.html" class="text-dark">Deborah Alvarado</a></td>
												<td><a href="#" class="badge badge-success">Active,Paused</a></td>
												<td>October-15-2019</td>
												<td>
													<a href="userprofile.html" class="btn btn-purple btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
												</td>
											</tr>
											<tr>
												<td><span class="avatar avatar-md  d-block brround cover-image" data-image-src="../assets/images/users/male/10.jpg"></span></td>
												<td><a href="userprofile.html" class="text-dark">Gregory Hunt</a></td>
												<td><a href="#" class="badge badge-danger">Blocked</a></td>
												<td>October-12-2019</td>
												<td>
													<a href="userprofile.html" class="btn btn-purple btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<ul class="pagination mb-0">
							<li class="page-item page-prev disabled">
								<a class="page-link" href="#" tabindex="-1">Prev</a>
							</li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">4</a></li>
							<li class="page-item"><a class="page-link" href="#">5</a></li>
							<li class="page-item page-next">
								<a class="page-link" href="#">Next</a>
							</li>
						</ul>
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
								<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Best New Car</a></h4>
								<span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 20th Jun 2019</span>
								<div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $245 <del>$354</del></div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="d-flex mt-0 mb-0 border bg-white p-4 box-shadow2">
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
		<!--/Recent Post-->
    

		<!--Footer Section-->
		@include('common.footer')
		<!--Footer Section-->

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>
   
@endsection