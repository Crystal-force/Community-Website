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

		

    <section class="sptb mt-7">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-lg-12 col-md-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">My Dashboard</h3>
							</div>
							<div class="card-body text-center item-user border-bottom">
								<div class="profile-pic">
									<div class="profile-pic-img">
										<span class="bg-success dots" data-toggle="tooltip" data-placement="top" title="online"></span>
										<img src="{{$avatar}}" class="brround" alt="user">
									</div>
									<a href="javascript:;" class="text-dark"><h4 class="mt-3 mb-0 font-weight-semibold">{{$name}}</h4></a>
								</div>
							</div>
							@include('common\user-dashboard-left-menu')
						</div>
					</div>
					<div class="col-xl-9 col-lg-12 col-md-12">
						<div class="card mb-0">
							<div class="card-header">
								<h3 class="card-title">Edit Course</h3>
							</div>
              
              <div class="card-body">
                <div class="edit-course-btn">
                  <div class="btn-list">
                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#AddCourse"><i class="fe fe-upload mr-2"></i>Add New Course</button>
                    <button type="button" class="btn btn-danger"><i class="fa fa-trash-o mr-2"></i>Remove All</button>
                  </div>
                </div>
								<div class="ads-tabs">
									<div class="tab-content">
										<div class="tab-pane active table-responsive border-top userprof-tab" id="tab1">
											<table class="table table-bordered table-hover mb-0 text-nowrap">
												<thead class="edit-table-title">
													<tr>
														<th></th>
														<th>Course Name</th>
														<th>Category</th>
														<th>Price</th>
														<th>Status</th>
														<th >Action</th>
													</tr>
												</thead>
												<tbody class="edit-table-content">
													@foreach($course as $courses)
													<tr>
														<td>
															<label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td>
															<div class="media mt-0 mb-0">
																<div class="card-aside-img">
																	<a href="#"></a>
																	<img src="../assets/images/media/h1.png" alt="img">
																</div>
																<div class="media-body">
																	<div class="card-item-desc ml-4 p-0 mt-2">
																		<a href="#" class="text-dark"><h4 class="font-weight-semibold">{{$courses->title}}</h4></a>
																		<a href="#"><i class="fa fa-clock-o mr-1"></i> {{$courses->updated_at}}</a><br>
																		<a href="#"><i class="fa fa-tag mr-1"></i>sale</a>
																	</div>
																</div>
															</div>
														</td>
														<td>{{$courses->category}}</td>
														<td class="font-weight-semibold fs-16">{{$courses->price}}</td>
														<td>
															<a href="#" class="badge badge-success">{{$courses->status}}</a>
														</td>
														<td>
															<a class="btn btn-success btn-sm text-white" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
															<a class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
															<a class="btn btn-primary btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
														</td>
													</tr>
													@endforeach
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

    <div class="modal" id="AddCourse" tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="example-Modal3">Add New Course</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="NewCourseUpload" action="javascript:void(0)" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
                <label for="recipient-name" class="form-control-label">Title:</label>
                <input type="text" class="form-control" name="title" id="course_title">
              </div>
              <div class="form-group">
									<label class="form-label">Image:</label>
                  <input type="file" class="dropify fu" id="fileUploader" name="file" data-height="180" />
              </div>
              <div class="form-group edit-course-select-category">
                <label class="form-label">Category: </label>
                <select class="form-control custom-select select2 " id="course_category" name="category">
                  <option value="0">--Select--</option>
                  <option value="1">Vehicles</option>
                  <option value="2">CrusaderRecusandae</option>
                  <option value="3">Caledonia</option>
                  <option value="4">...</option>
                </select>
              </div>
              
              <div class="form-group">
                <label for="recipient-name" class="form-control-label" name="sub title">Sub Title:</label>
                <input type="text" class="form-control" id="course_sub_title">
              </div>
              <div class="form-group">
                <label for="message-text" class="form-control-label">Content:</label>
                <textarea class="form-control" id="course_content" rows="10" name="content"></textarea>
              </div>
              <div class="form-group">
                <label for="message-text" class="form-control-label">Price:</label>
								<input type="text" class="form-control" name="price" id="course_price">
              </div>
							<div class="form-group">
								<label class="form-label" style="color:#3c5a99">Facebook Link</label>
								<input type="text" class="form-control" name="facebook" placeholder="" id="course_facebook">
							</div>
							<div class="form-group">
								<label class="form-label" style="color:#1da1f2">Twitter Link</label>
								<input type="text" class="form-control" name="twitter" placeholder="" id="course_twitter">
							</div>
							<div class="form-group">
								<label class="form-label" style="color:#e4405f">Instagram Link</label>
								<input type="text" class="form-control" name="instagram" placeholder="" id="course_instagram">
							</div>
							<div class="form-group">
								<label class="form-label" style="color:#0063dc">Linkedin Link</label>
								<input type="text" class="form-control" name="linkedin" placeholder="" id="course_linkedin">
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
								{{-- <button type="button" class="btn btn-primary" data-id="{{$id}}" onclick="AddNewCourse(this)">Save Course</button> --}}
								<button type="submit" class="btn btn-primary" data-id="{{$id}}" id="sub_button">Save Course</button>
							</div>
            </form>
          </div>
          
        </div>
      </div>
    </div>
    

		<!--Footer Section-->
		@include('common.footer')
		<!--Footer Section-->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
			$(document).ready(function(e){
					$('#NewCourseUpload').on('submit', function(e){
						e.preventDefault();
						var user_id = '';
						var title = '';
						var file = '';
						var category = '';
						var sub_title = '';
						var content = '';
						var price = '';
						var facebook = '';
						var twitter = '';
						var instagram = '';
						var linkedin = '';

						user_id = $("#sub_button").attr('data-id');
						title =$("#course_title").val();
						file = $("#fileUploader")[0].files[0];
						category = $("#course_category option:selected").text();
						sub_title = $("#course_sub_title").val();
						content = $("#course_content").val();
						price = $("#course_price").val();
						facebook = $("#course_facebook").val();
						twitter = $("#course_twitter").val();
						instagram = $("#course_instagram").val();
						linkedin = $("#course_linkedin").val();
						
						var formData = new FormData();

						formData.append('id', user_id);
						formData.append('title', title);
						formData.append('file', file);
						formData.append('category', category);
						formData.append('sub_title', sub_title);
						formData.append('content', content);
						formData.append('price', price);
						formData.append('facebook', facebook);
						formData.append('twitter', twitter);
						formData.append('instagram', instagram);
						formData.append('linkedin', linkedin);

						$.ajaxSetup({
							headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							}
						});
						$.ajax({
							url: '/dashboard/add-course',
							method:'post',
							data: formData,
							cache: false,
							contentType: false,
							processData: false,
							success: function(data) {
								console.log(data);
							}
						});
					});
			});
			

			// function AddNewCourse(elem) {
			// 	let id = '';
			// 	let title = '';
			// 	let file = '';
			// 	let category = '';
			// 	let sub_title = '';
			// 	let content = '';
			// 	let price = '';
			// 	let facebook = '';
			// 	let twitter = '';
			// 	let instagram = '';
			// 	let linkedin = '';

			// 	id = $(elem).attr('data-id');
			// 	title = $("#course_title").val();
			// 	file = $('#fileUploader').prop('files');
			// 	category = $("#course_category option:selected").text();
			// 	sub_title = $("#course_sub_title").val();
			// 	content = $("#course_content").val();
			// 	price = $("#course_price").val();
			// 	facebook = $("#course_facebook").val();
			// 	twitter = $("#course_twitter").val();
			// 	instagram = $("#course_instagram").val();
			// 	linkedin = $("#course_linkedin").val();

			// 	$("#FrmImgUpload").

			// 	$.ajaxSetup({
			// 		headers: {
			// 		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			// 		}
			// 	});
			// 	$.ajax({
			// 		url: '/add-course',
			// 		method: 'post',
			// 		data: {
			// 			id: id,
			// 			title: title,
			// 			// file: file
			// 		},
			// 		dataType: false,
			// 		success: function(data) {
			// 			console.log(data);
			// 		}
			// 	});
			// }
    </script>
		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>
   
@endsection