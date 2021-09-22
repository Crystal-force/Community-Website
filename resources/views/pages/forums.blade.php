@extends('layout.index')
@section('content')
		<!--Loader-->
		<div id="global-loader">
			<img src="../assets/preloader/index.svg" class="loader-img " alt="">
		</div>

		@include('common.top-header')

		<!--Section-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-image-src="../assets/images/banners/banner3.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1>Forums</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="{{route('main')}}">Home</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Forums</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Section-->

		<!--Testimonial1-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<div class="card-body">
						<div class="text-wrap">
							<div class="">
								<div class="btn-list">
									<button type="button" class="btn btn-dark"><i class="fa fa-eyedropper mr-2"></i>Add a new topic</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<div class="d-sm-flex team-section">
									<div class="team-img d-flex justify-content-center">
										<img src="../assets/img/users/avatar.png" class="img-thumbnail rounded-circle" alt="">
									</div>
									<div class="ml-sm-5 mt-4 mt-sm-0">
										<a href="{{route('forum-comment')}}"><h4 class="font-weight-bold dark-grey-text mt-2">Tips for outline better</h4></a>
										<p class="forums-user-name">by <span>huynhbinh234</span> at Illustration, about 24 hours ago</p>
										<p class="font-weight-normal dark-grey-text mb-0">
										<i class="fa fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur...</p>
										<div class="reivews-area mt-3 forum-comment-area">
											<div class="d-flex">
													<ul class="d-flex mb-0">
															<li class="mr-5"><a class="icons review-rank"><i class="icon icon-heart text-muted mr-1"></i> 56</a></li>
															<li class="mr-5"><a class="icons review-rank"><i class="fa fa-comments-o text-muted mr-1"></i> 32 </a></li>
													</ul>
											</div>
											<div class="comment-btn">
												<div class="btn-list">
													<a href="{{route('forum-comment')}}" class="btn btn-outline-secondary"><i class="fa fa-comment-o mr-2"></i>Comment</a>
												</div>
											</div>
									</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="d-sm-flex team-section">
									<div class="team-img d-flex justify-content-center">
										<img src="../assets/img/users/avatar.png" class="img-thumbnail rounded-circle" alt="">
									</div>
									<div class="ml-sm-5 mt-4 mt-sm-0">
										<a href="{{route('forum-comment')}}"><h4 class="font-weight-bold dark-grey-text mt-2">Tips for outline better</h4></a>
										<p class="forums-user-name">by <span>huynhbinh234</span> at Illustration, about 24 hours ago</p>
										<p class="font-weight-normal dark-grey-text mb-0">
										<i class="fa fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur...</p>
										<div class="reivews-area mt-3 forum-comment-area">
											<div class="d-flex">
													<ul class="d-flex mb-0">
															<li class="mr-5"><a class="icons review-rank"><i class="icon icon-heart text-muted mr-1"></i> 56</a></li>
															<li class="mr-5"><a class="icons review-rank"><i class="fa fa-comments-o text-muted mr-1"></i> 32 </a></li>
													</ul>
											</div>
											<div class="comment-btn">
												<div class="btn-list">
													<a href="{{route('forum-comment')}}" class="btn btn-outline-secondary"><i class="fa fa-comment-o mr-2"></i>Comment</a>
												</div>
											</div>
									</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="d-sm-flex team-section">
									<div class="team-img d-flex justify-content-center">
										<img src="../assets/img/users/avatar.png" class="img-thumbnail rounded-circle" alt="">
									</div>
									<div class="ml-sm-5 mt-4 mt-sm-0">
										<a href="{{route('forum-comment')}}"><h4 class="font-weight-bold dark-grey-text mt-2">Tips for outline better</h4></a>
										<p class="forums-user-name">by <span>huynhbinh234</span> at Illustration, about 24 hours ago</p>
										<p class="font-weight-normal dark-grey-text mb-0">
										<i class="fa fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur...</p>
										<div class="reivews-area mt-3 forum-comment-area">
											<div class="d-flex">
													<ul class="d-flex mb-0">
															<li class="mr-5"><a class="icons review-rank"><i class="icon icon-heart text-muted mr-1"></i> 56</a></li>
															<li class="mr-5"><a class="icons review-rank"><i class="fa fa-comments-o text-muted mr-1"></i> 32 </a></li>
													</ul>
											</div>
											<div class="comment-btn">
												<div class="btn-list">
													<a href="{{route('forum-comment')}}" class="btn btn-outline-secondary"><i class="fa fa-comment-o mr-2"></i>Comment</a>
												</div>
											</div>
									</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="d-sm-flex team-section">
									<div class="team-img d-flex justify-content-center">
										<img src="../assets/img/users/avatar.png" class="img-thumbnail rounded-circle" alt="">
									</div>
									<div class="ml-sm-5 mt-4 mt-sm-0">
										<a href="{{route('forum-comment')}}"><h4 class="font-weight-bold dark-grey-text mt-2">Tips for outline better</h4></a>
										<p class="forums-user-name">by <span>huynhbinh234</span> at Illustration, about 24 hours ago</p>
										<p class="font-weight-normal dark-grey-text mb-0">
										<i class="fa fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur...</p>
										<div class="reivews-area mt-3 forum-comment-area">
											<div class="d-flex">
													<ul class="d-flex mb-0">
															<li class="mr-5"><a class="icons review-rank"><i class="icon icon-heart text-muted mr-1"></i> 56</a></li>
															<li class="mr-5"><a class="icons review-rank"><i class="fa fa-comments-o text-muted mr-1"></i> 32 </a></li>
													</ul>
											</div>
											<div class="comment-btn">
												<div class="btn-list">
													<a href="{{route('forum-comment')}}" class="btn btn-outline-secondary"><i class="fa fa-comment-o mr-2"></i>Comment</a>
												</div>
											</div>
									</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="d-sm-flex team-section">
									<div class="team-img d-flex justify-content-center">
										<img src="../assets/img/users/avatar.png" class="img-thumbnail rounded-circle" alt="">
									</div>
									<div class="ml-sm-5 mt-4 mt-sm-0">
										<a href="{{route('forum-comment')}}"><h4 class="font-weight-bold dark-grey-text mt-2">Tips for outline better</h4></a>
										<p class="forums-user-name">by <span>huynhbinh234</span> at Illustration, about 24 hours ago</p>
										<p class="font-weight-normal dark-grey-text mb-0">
										<i class="fa fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur...</p>
										<div class="reivews-area mt-3 forum-comment-area">
											<div class="d-flex">
													<ul class="d-flex mb-0">
															<li class="mr-5"><a class="icons review-rank"><i class="icon icon-heart text-muted mr-1"></i> 56</a></li>
															<li class="mr-5"><a class="icons review-rank"><i class="fa fa-comments-o text-muted mr-1"></i> 32 </a></li>
													</ul>
											</div>
											<div class="comment-btn">
												<div class="btn-list">
													<a href="{{route('forum-comment')}}" class="btn btn-outline-secondary"><i class="fa fa-comment-o mr-2"></i>Comment</a>
												</div>
											</div>
									</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="d-sm-flex team-section">
									<div class="team-img d-flex justify-content-center">
										<img src="../assets/img/users/avatar.png" class="img-thumbnail rounded-circle" alt="">
									</div>
									<div class="ml-sm-5 mt-4 mt-sm-0">
										<a href="{{route('forum-comment')}}"><h4 class="font-weight-bold dark-grey-text mt-2">Tips for outline better</h4></a>
										<p class="forums-user-name">by <span>huynhbinh234</span> at Illustration, about 24 hours ago</p>
										<p class="font-weight-normal dark-grey-text mb-0">
										<i class="fa fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur...</p>
										<div class="reivews-area mt-3 forum-comment-area">
											<div class="d-flex">
													<ul class="d-flex mb-0">
															<li class="mr-5"><a class="icons review-rank"><i class="icon icon-heart text-muted mr-1"></i> 56</a></li>
															<li class="mr-5"><a class="icons review-rank"><i class="fa fa-comments-o text-muted mr-1"></i> 32 </a></li>
													</ul>
											</div>
											<div class="comment-btn">
												<div class="btn-list">
													<a href="{{route('forum-comment')}}" class="btn btn-outline-secondary"><i class="fa fa-comment-o mr-2"></i>Comment</a>
												</div>
											</div>
									</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="d-sm-flex team-section">
									<div class="team-img d-flex justify-content-center">
										<img src="../assets/img/users/avatar.png" class="img-thumbnail rounded-circle" alt="">
									</div>
									<div class="ml-sm-5 mt-4 mt-sm-0">
										<a href="{{route('forum-comment')}}"><h4 class="font-weight-bold dark-grey-text mt-2">Tips for outline better</h4></a>
										<p class="forums-user-name">by <span>huynhbinh234</span> at Illustration, about 24 hours ago</p>
										<p class="font-weight-normal dark-grey-text mb-0">
										<i class="fa fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur...</p>
										<div class="reivews-area mt-3 forum-comment-area">
											<div class="d-flex">
													<ul class="d-flex mb-0">
															<li class="mr-5"><a class="icons review-rank"><i class="icon icon-heart text-muted mr-1"></i> 56</a></li>
															<li class="mr-5"><a class="icons review-rank"><i class="fa fa-comments-o text-muted mr-1"></i> 32 </a></li>
													</ul>
											</div>
											<div class="comment-btn">
												<div class="btn-list">
													<a href="{{route('forum-comment')}}" class="btn btn-outline-secondary"><i class="fa fa-comment-o mr-2"></i>Comment</a>
												</div>
											</div>
									</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="d-sm-flex team-section">
									<div class="team-img d-flex justify-content-center">
										<img src="../assets/img/users/avatar.png" class="img-thumbnail rounded-circle" alt="">
									</div>
									<div class="ml-sm-5 mt-4 mt-sm-0">
										<a href="{{route('forum-comment')}}"><h4 class="font-weight-bold dark-grey-text mt-2">Tips for outline better</h4></a>
										<p class="forums-user-name">by <span>huynhbinh234</span> at Illustration, about 24 hours ago</p>
										<p class="font-weight-normal dark-grey-text mb-0">
										<i class="fa fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur...</p>
										<div class="reivews-area mt-3 forum-comment-area">
											<div class="d-flex">
													<ul class="d-flex mb-0">
															<li class="mr-5"><a class="icons review-rank"><i class="icon icon-heart text-muted mr-1"></i> 56</a></li>
															<li class="mr-5"><a class="icons review-rank"><i class="fa fa-comments-o text-muted mr-1"></i> 32 </a></li>
													</ul>
											</div>
											<div class="comment-btn">
												<div class="btn-list">
													<a href="{{route('forum-comment')}}" class="btn btn-outline-secondary"><i class="fa fa-comment-o mr-2"></i>Comment</a>
												</div>
											</div>
									</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="d-sm-flex team-section">
									<div class="team-img d-flex justify-content-center">
										<img src="../assets/img/users/avatar.png" class="img-thumbnail rounded-circle" alt="">
									</div>
									<div class="ml-sm-5 mt-4 mt-sm-0">
										<a href="{{route('forum-comment')}}"><h4 class="font-weight-bold dark-grey-text mt-2">Tips for outline better</h4></a>
										<p class="forums-user-name">by <span>huynhbinh234</span> at Illustration, about 24 hours ago</p>
										<p class="font-weight-normal dark-grey-text mb-0">
										<i class="fa fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur...</p>
										<div class="reivews-area mt-3 forum-comment-area">
											<div class="d-flex">
													<ul class="d-flex mb-0">
															<li class="mr-5"><a class="icons review-rank"><i class="icon icon-heart text-muted mr-1"></i> 56</a></li>
															<li class="mr-5"><a class="icons review-rank"><i class="fa fa-comments-o text-muted mr-1"></i> 32 </a></li>
													</ul>
											</div>
											<div class="comment-btn">
												<div class="btn-list">
													<a href="{{route('forum-comment')}}" class="btn btn-outline-secondary"><i class="fa fa-comment-o mr-2"></i>Comment</a>
												</div>
											</div>
									</div>
									</div>
								</div>
							</div>
						</div>

						<ul class="pagination mb-0 d-flex justify-content-center">
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
		</section>
		<!--Testimonial1-->

		<!--Footer Section-->
		@include('common.footer')
		<!--Footer Section-->

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>
    
@endsection