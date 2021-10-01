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
                                    <span class="bg-success dots" data-toggle="tooltip" data-placement="top"
                                        title="online"></span>
                                    <img src="{{ $avatar }}" class="brround" alt="user">
                                </div>
                                <a href="javascript:;" class="text-dark">
                                    <h4 class="mt-3 mb-0 font-weight-semibold">{{ $name }}</h4>
                                </a>
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
                                    <button type="button" class="btn btn-dark" data-toggle="modal"
                                        data-target="#AddCourse"><i class="fe fe-upload mr-2"></i>Add New Course</button>
                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash-o mr-2"></i>Remove
                                        All</button>
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
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="edit-table-content">
                                                @foreach ($course as $courses)
                                                    <tr>
                                                        <td>
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    name="checkbox" value="checkbox">
                                                                <span class="custom-control-label"></span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <div class="media mt-0 mb-0">
                                                                <div class="card-aside-img">
                                                                    <a href="#"></a>
                                                                    <img src="{{ $courses->image }}" alt="img">
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="card-item-desc ml-4 p-0 mt-2">
                                                                        <a href="#" class="text-dark">
                                                                            <h4 class="font-weight-semibold">
                                                                                {{ $courses->title }}</h4>
                                                                        </a>
                                                                        <a href="#"><i class="fa fa-clock-o mr-1"></i>
                                                                            {{ $courses->updated_at }}</a><br>
                                                                        <a href="#"><i class="fa fa-tag mr-1"></i>sale</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>{{ $courses->category }}</td>
                                                        <td class="font-weight-semibold fs-16">{{ $courses->price }}</td>
                                                        <td>
                                                            @if ($courses->status == '0')
                                                                <a href="#" class="badge badge-success">Pending</a>
                                                            @elseif($courses->status == '1')
                                                                <a href="#" class="badge badge-warning">Active</a>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-success btn-sm text-white" data-toggle="modal"
                                                                data-id="{{ $courses->id }}" onclick="EditCourse(this)"><i
                                                                    class="fa fa-pencil"></i></a>
                                                            <a class="btn btn-danger btn-sm text-white"
                                                                data-toggle="tooltip" data-original-title="Delete"><i
                                                                    class="fa fa-trash-o"></i></a>
                                                            <a class="btn btn-primary btn-sm text-white"
																														data-toggle="modal" data-target="#ViewCourse" data-id="{{ $courses->id }}" onclick="ViewCourse(this)"><i
                                                                    class="fa fa-eye"></i></a>
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

		<!--Add Course Modal-->
    <div class="modal" id="AddCourse" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="example-Modal3">Add New Course</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="row mb-1 mt-1 d-flex justify-content-center">
                    <div>
                        <div class="alert alert-success" role="alert" id="add_course_success"><i
                                class="fa fa-check-circle-o mr-2" aria-hidden="true"></i> Well done! You successfully added
                            new course!</div>
                        <div class="alert alert-warning" role="alert" id="blank_course_success"><i
                                class="fa fa-exclamation mr-2" aria-hidden="true"></i> You must input the correct fields.
                            Please confirm again!</div>
                        <div class="alert alert-secondary" role="alert" id="remove_course_success"><i
                                class="fa fa-check-circle-o mr-2" aria-hidden="true"></i> You successfully removed selected
                            course!</div>
                    </div>
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
                            <input type="text" class="form-control" name="instagram" placeholder=""
                                id="course_instagram">
                        </div>
                        <div class="form-group">
                            <label class="form-label" style="color:#0063dc">Linkedin Link</label>
                            <input type="text" class="form-control" name="linkedin" placeholder="" id="course_linkedin">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary" data-id="{{ $id }}"
                                id="sub_button">Save Course</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

		<!--Change course modal-->
    <div class="modal" id="EditCourse" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document" id="edit_course_modal">
            <div class="row mb-1 mt-1 d-flex justify-content-center">
                <div>
                    <div class="alert alert-success" role="alert" id="cange_course_success"><i
                            class="fa fa-check-circle-o mr-2" aria-hidden="true"></i> Well done! You successfully changed
                        new course!</div>
                </div>
            </div>
        </div>
    </div>

		<!--View Course Modal-->
		<div class="modal" id="ViewCourseModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document" id="view_course_modal">
           
        </div>
    </div>


    <!--Footer Section-->
    @include('common.footer')
    <!--Footer Section-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
				// Add New Course --- File FormData Method
        $(document).ready(function(e) {
            $('#NewCourseUpload').on('submit', function(e) {
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
                title = $("#course_title").val();
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
                    method: 'post',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if (data.data == '1') {
                            $("#add_course_success").delay(5).fadeIn('slow').delay(1500)
                                .fadeOut('slow');
                            window.location.href = '/dashboard/edit-course'

                        } else if (data.data == '0') {
                            $("#blank_course_success").delay(5).fadeIn('slow').delay(1500)
                                .fadeOut('slow');
                        }
                    }
                });
            });
        });
				
				// Edit Course 
        function EditCourse(elem) {
            var course_id = $(elem).attr('data-id');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/dashboard/edit-course',
                method: 'post',
                data: {
                    course_id: course_id
                },
                dataType: false,
                success: function(data) {
                    $("#EditCourse").modal('show');
                    var html_show = '';
                    html_show +=
                        '<div class="modal-content">\n' +
                        '<div class="row mt-1 mb-1  d-flex justify-content-center">\n' +
                        '<div class="alert alert-success" role="alert" id="change_course_success"><i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i> Well done! You successfully changed new course!</div>\n' +
                        '</div>\n' +
                        '<div class="modal-header">\n' +
                        '<h5 class="modal-title" id="example-Modal3">Edit Course</h5>\n' +
                        '<button type="button" class="close" data-dismiss="modal" aria-label="Close">\n' +
                        '<span aria-hidden="true">&times;</span>\n' +
                        '</button>\n' +
                        '</div>\n' +
                        '<div class="modal-body">\n' +
                        '<form id="EditCourseUpload" action="javascript:void(0)" enctype="multipart/form-data">\n' +
                        '@csrf\n' +
                        '<div class="form-group">\n' +
                        '<label for="recipient-name" class="form-control-label">Title:</label>\n' +
                        '<input type="text" class="form-control" name="title" id="edit_course_title" value = "' +data.data.title + '">\n' +
                        '</div>\n' +
                        '<div class="form-group">\n' +
                        '<img src=' + data.data.image + ' style="width:10%">\n' +
                        '<label class="form-label">Image:</label>\n' +
                        '<input type="file" class="dropify fu" id="EditfileUploader" name="file" data-height="180"/>\n' +
                        '</div>\n' +
                        '<div class="form-group edit-course-select-category">\n' +
                        '<label class="form-label">Category: <span style="color:#0ab2e6">Selected: ' + data.data
                        .category + '</span></label>\n' +
                        '<select class="form-control custom-select select2 " id="edit_course_category" name="category">\n' +
                        '<option value="1">Vehicles</option>\n' +
                        '<option value="2">CrusaderRecusandae</option>\n' +
                        '<option value="3">Caledonia</option>\n' +
                        '</select>\n' +
                        '</div>\n' +
                        '<div class="form-group">\n' +
                        '<label for="recipient-name" class="form-control-label" name="sub title">Sub Title:</label>\n' +
                        '<input type="text" class="form-control" id="edit_course_sub_title" value="' +
                        data.data.sub_title + '">\n' +
                        '</div>\n' +
                        '<div class="form-group">\n' +
                        '<label for="message-text" class="form-control-label">Content:</label>\n' +
                        '<textarea class="form-control" id="edit_course_content" rows="10" name="content" value="' +
                        data.data.content + '"></textarea>\n' +
                        '</div>\n' +
                        '<div class="form-group">\n' +
                        '<label for="message-text" class="form-control-label">Price:</label>\n' +
                        '<input type="text" class="form-control" name="price" id="edit_course_price" value="' +
                        data.data.price + '">\n' +
                        '</div>\n' +
                        '<div class="form-group">\n' +
                        '<label class="form-label" style="color:#3c5a99">Facebook Link</label>\n' +
                        '<input type="text" class="form-control" name="facebook" value="' + data.data
                        .facebook + '" id="edit_course_facebook">\n' +
                        '</div>\n' +
                        '<div class="form-group">\n' +
                        '<label class="form-label" style="color:#1da1f2">Twitter Link</label>\n' +
                        '<input type="text" class="form-control" name="twitter" value="' + data.data
                        .twitter + '" id="edit_course_twitter">\n' +
                        '</div>\n' +
                        '<div class="form-group">\n' +
                        '<label class="form-label" style="color:#e4405f">Instagram Link</label>\n' +
                        '<input type="text" class="form-control" name="instagram" value="' + data.data
                        .linkedin + '" id="edit_course_instagram">\n' +
                        '</div>\n' +
                        '<div class="form-group">\n' +
                        '<label class="form-label" style="color:#0063dc">Linkedin Link</label>\n' +
                        '<input type="text" class="form-control" name="linkedin" value="' + data.data
                        .linkedin + '" id="edit_course_linkedin">\n' +
                        '</div>\n' +
                        '<div class="modal-footer">\n' +
                        '<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>\n' +
                        '<button type="button" class="btn btn-primary" data-id="{{ $id }}" id="sub_button" onclick="ChangeCourse(this)" value="' +
                        data.data.id + '">Save Course</button>\n' +
                        '</div>\n' +
                        '</form>\n' +
                        '</div>\n'
                    $("#edit_course_modal").html(html_show);
                }
            });
        }

				//  Change Course
        function ChangeCourse(elem) {
            var course_id = '';
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

            id = $(elem).attr('value');
            user_id = $("#sub_button").attr('data-id');
            title = $("#edit_course_title").val();
            file = $("#EditfileUploader")[0].files[0];
            category = $("#edit_course_category option:selected").text();
            sub_title = $("#edit_course_sub_title").val();
            content = $("#edit_course_content").val();
            price = $("#edit_course_price").val();
            facebook = $("#edit_course_facebook").val();
            twitter = $("#edit_course_twitter").val();
            instagram = $("#edit_course_instagram").val();
            linkedin = $("#edit_course_linkedin").val();

            const data = {
                id,
                user_id,
                title,
								file,
                category,
                sub_title,
                content,
                price,
                facebook,
                twitter,
                instagram,
                linkedin
            };

            var formData = new FormData();

						Object.entries(data).map(([key, value]) => {
							if(!!value) formData.append(key, value);
						})

            formData.append('file', file);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/dashboard/change-course',
                method: 'post',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    if (data.data == '1') {
                        $("#change_course_success").delay(5).fadeIn('slow').delay(1000).fadeOut('slow');
                        setTimeout(function() {
                            window.location.href = '/dashboard/edit-course'
                        }, 2000);

                    } else if (data.data == '0') {
                        // $("#blank_course_success").delay(5).fadeIn('slow').delay(1500).fadeOut('slow');
                    }
                }
            });

        }

				//  View Course
				function ViewCourse(elem) {
					var id = $(elem).attr('data-id');
					
					$.ajaxSetup({
							headers: {
									'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							}
					});
					$.ajax({
						url: '/dashboard/view-course',
						method: 'post',
						data: {
							id: id
						},
						dataType: false,
						success: function(data) {
							console.log(data['1']);
							$("#ViewCourseModal").modal('show');
							var view_html = '';
								view_html += 
								'<div class="modal-content">\n'+
									'<div class="modal-header">\n' +
											'<h5 class="modal-title" id="example-Modal3">Edit Course</h5>\n' +
											'<button type="button" class="close" data-dismiss="modal" aria-label="Close">\n' +
											'<span aria-hidden="true">&times;</span>\n' +
											'</button>\n' +
                  '</div>\n' +

									'<div class="modal-body">\n'+
										'<form action="javascript:void(0)" enctype="multipart/form-data">\n'+
											'<div class="form-group">\n'+
												'<h4>'+data['1'].title+'</h4>\n'+
												'<div class="form-group edit-course-select-category">\n'+
													'<label class="form-label">Category: <span>'+data['1'].category+'</span></label>\n'+
												'</div>\n'+

												'<div class="d-flex">\n'+
													'<ul class="d-flex mb-0">\n'+
														'<li class="mr-5"><a href="#" class="icons"><i class="ti-calendar text-muted mr-1"></i> '+data['1'].updated_at+'</a></li>\n'+
														'<li class="mr-5"><a href="#" class="icons"><i class="fa fa-user-o text-muted mr-1"></i> '+data['1'].customers+' customers</a></li>\n'+
														'<li class="mr-5"><a href="#" class="icons"><i class="ti-eye text-muted mr-1 fs-15"></i> '+data['1'].visitors+'</a></li>\n'+
													'</ul>\n'+
													'<div class="rating-stars d-flex">\n'+
														'<div class="rating-stars-container mr-2">\n'+
															'<div class="rating-star sm">\n'+
																'<i class="fa fa-heart"></i>\n'+
															'</div>\n'+
														'</div>'+data['1'].favorite+'\n'+
													'</div>\n'+
												'</div>\n'+
											'</div>\n'+

											'<div class="form-group course-view-price">\n'+
													'<h2 class="">$ '+data['1'].price+'</h2>\n'+
											'</div>\n'+

											'<div class="form-group">\n'+
													'<img src="'+data['1'].image+'" style="width:100%">\n'+
											'</div>\n'+

											'<div class="form-group">\n'+
													'<h5>'+data['1'].sub_title+'</h5>\n'+
											'</div>\n'+

											'<div class="form-group">\n'+
													'<p>'+data['1'].content+'</p>\n'+
											'</div>\n'+

											'<div class="form-group">\n'+
													'<a href="#" style="color:#3c5a99">Facebook: <span>'+data['1'].facebook+'</span></a>\n'+
											'</div>\n'+

											'<div class="form-group">\n'+
													'<a href="#" style="color:#1da1f2">Twitter: <span>'+data['1'].twitter+'</span></a>\n'+
											'</div>\n'+

											'<div class="form-group">\n'+
													'<a href="#" style="color:#e4405f">Instagram: <span>'+data['1'].instagram+'</span></a>\n'+
											'</div>\n'+

											'<div class="form-group">\n'+
													'<a href="#" style="color:#0063dc">Linkedin: <span>'+data['1'].linkedin+'</span></a>\n'+
											'</div>\n'+

											'<div class="modal-footer">\n'+
													'<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>\n'+
											'</div>\n'+
										'</form>\n'+
									'</div>\n'+
								'</div>\n'
								$("#view_course_modal").html(view_html);
						}
					});

				}
    </script>
    <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fa fa-rocket"></i></a>

@endsection
