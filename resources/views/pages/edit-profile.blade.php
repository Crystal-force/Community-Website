@extends('layout.index')
@section('content')
		<!--Loader-->
		{{-- <div id="global-loader">
			<img src="../assets/preloader/index.svg" class="loader-img " alt="">
		</div> --}}

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
        <div class="row d-flex justify-content-center mb-2">
          <div class="alert alert-success" role="alert" id="profile_update_success"><i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i> Well done! You successfully updated account image!</div>
          <div class="alert alert-primary" role="alert" id="profile_remove_success"><i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i> Well done! You successfully removed account image!</div>
        </div>
      </div>
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-lg-12 col-md-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">My Dashboard</h3>
							</div>
							@include('common\user-dashboard-left-menu')
						</div>
					</div>
					<div class="col-xl-9 col-lg-12 col-md-12">
						<div class="card mb-0">
							<div class="card-header">
								<h3 class="card-title">Edit Profile</h3>
							</div>
              <div class="card-body">
                <div class="border-0">
                  <form class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="upload-img-bar content-center text-center mb-5">
                            <img id="avatar-img" class="img-circle profile_img img-thumbnail" src="{{$avatar}}" width="150" alt="avatar">
                            <div class="d-flex justify-content-center">
                              <div class="upload-button-div hide">
                                  <label class="browse-button" data-toggle="tooltip"><i class="fa fa-folder-open mr-1"></i>Browse
                                      <input type="file" class="sr-only" id="input-avatar-change" name="image"
                                            accept="image/*" style="width: 220px">
                                  </label>
                              </div>
                              <div class="">
                                  <Button type="button" class="ml-1 remove-button" data-toggle="modal" data-target="#RemoveAvatarModal" ><i class="fa fa-trash mr-1"></i>Remove</Button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="form-group">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control"  placeholder="{{$name}}" id="company_name">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                          <div class="form-group">
                            <label class="form-label">Phone number</label>
                            <input type="text" class="form-control" placeholder="{{$phone}}" id="company_phone_num">
                          </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                          <div class="form-group ml-1">
                            <label class="form-label">Language<span style="color: #68c9f2">&nbsp;&nbsp;Selected: {{$language}}</span></label>
                            <select class="form-control select2 lang-select" data-placeholder="Choose Browser" multiple id="company_lang">
                              <option value="English selected">
                                English
                              </option>
                              <option value="Spanish">
                                Spanish
                              </option>
                              <option value="Portuguese">
                                Portuguese
                              </option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-12">
                          <div class="form-group">
                            <label class="form-label">Location</label>
                            <input type="text" class="form-control" placeholder="{{$location}}" id="company_location">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                          <div class="form-group">
                            <label class="form-label">City</label>
                            <input type="text" class="form-control" placeholder="{{$city}}" id="company_city">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                          <div class="form-group">
                            <label class="form-label">Postal Code</label>
                            <input type="number" class="form-control" placeholder="{{$zip}}" id="company_code">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <div class="form-group">
                            <label class="form-label">Country</label>
                            <select class="form-control custom-select select2" id="company_country">
                              <option value="1">Chile</option>
                              <option value="2">Canada</option>
                              <option value="3">United State</option>
                              <option value="4">Mexico</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group mb-0">
                            <label class="form-label">About Me</label>
                            <textarea rows="5" class="form-control" placeholder="{{$about}}" id="company_about"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <button type="button" class="btn btn-primary" onclick="EditProfile()">Update Profile</button>
                    </div>
                  </form>
                </div>
              </div>
						</div>
					</div>
				</div>
			</div>
		</section>

    {{-- //Profile Edit Modal --}}
    <div class="modal fade" id="ProfileEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLabel">Select the avatar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="img-container content-center">
                <img id="crop-image" style="width: 400px; height: 360px" src="">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="border-radius: 30px">Cancel</button>
            <button type="button" class="btn btn-info save-button" id="crop-button"><i class="fa fa-save mr-1"></i>Save</button>
        </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="RemoveAvatarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title alert-header-color" id="exampleModalLabel"><i class="mdi mdi-alert-octagon mr-1"></i>Delete</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Do you really remove this image now?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-gray-dark" onclick="RemoveAvatar(this)"  data-id="{{$id}}"><i class="fa fa-trash mr-1" ></i>Remove</button>
          </div>
        </div>
      </div>
    </div>

		<!--Footer Section-->
		@include('common.footer')
		<!--Footer Section-->
    <script>
      let canvas_pic;

      function toDataURL(url, callback) {
          var xhr = new XMLHttpRequest();
          xhr.onload = function() {
              var reader = new FileReader();
              reader.onloadend = function() {
                  callback(reader.result);
              }
              reader.readAsDataURL(xhr.response);
          };
          xhr.open('GET', url);
          xhr.responseType = 'blob';
          xhr.send();
      }

      toDataURL("", function(dataUrl) {
          // canvas_pic = dataUrl;
          // document.getElementById('avatar-img').src = canvas_pic;
      })
      window.addEventListener('DOMContentLoaded', function () {

          let avatar = document.getElementById('avatar-img');
          let image = document.getElementById('crop-image');
          let input = document.getElementById('input-avatar-change');
          let $modal = $('#ProfileEdit');
          let cropper;

          input.addEventListener('change', function (e) {

              let files = e.target.files;
              let done = function (url) {
                  image.src = url;
                  $modal.modal('show');
              };

              if (files && files.length > 0) {
                  let file = files[0];
                  if (URL) {
                      done(URL.createObjectURL(file));
                  } else if (FileReader) {
                      let reader = new FileReader();
                      reader.onload = function (e) {
                          done(reader.result);
                      };
                      reader.readAsDataURL(file);
                  }
              }
          });

          $modal.on('shown.bs.modal', function () {
              cropper = new Cropper(image, {
                  aspectRatio: 1,
                  viewMode: 1,
              });
          }).on('hidden.bs.modal', function () {
              cropper.destroy();
              cropper = null;
          });

          document.getElementById('crop-button').addEventListener('click', function () {
              let avatar_id = $('#avatar-img').attr('data-id');
              $modal.modal('hide');
              if (cropper) {
                  canvas_pic = cropper.getCroppedCanvas({
                      width: 220,
                      height: 220,
                  });
               
                  avatar.src = canvas_pic.toDataURL();
                  canvas_pic = avatar.src;

                  $.ajaxSetup({
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
                  });
                  $.ajax({
                    url: '/dashboard/save-avatar',
                    method: 'post',
                    data: {
                      avatar: canvas_pic,
                    },
                    dataType: false,
                    success:function(data) {
                      if(data.data == '1') {
                        $("#profile_update_success").delay(5).fadeIn('slow').delay(1500).fadeOut('slow');
                      }
                    }
                  });
              }
              
          });
      });

     
      function RemoveAvatar(elem) {
       let remove_id = $(elem).attr('data-id');
       let img_url = $("#avatar-img").attr('src');
       if(img_url == "../assets/img/blank/blank.png") {
          $("#RemoveAvatarModal").modal('hide');
       }
        $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

          $.ajax({
            url:'/dashboard/remove-avatar',
            method: 'post',
            data: {
              id: remove_id,
            },
            dataType: false,
            success:function(data) {
              if(data.data == "1") {
                $("#RemoveAvatarModal").modal('hide');
                $("#avatar-img").attr('src' ,'../assets/img/blank/blank.png');
                $("#profile_remove_success").delay(5).fadeIn('slow').delay(1500).fadeOut('slow');
              }
            }
          });
      }

      function EditProfile() {
        
        let name = "";
        let phone = "";
        let language = "";
        let location = "";
        let city = "";
        let code = "";
        let country = "";
        let about = "";

        name = $("#company_name").val();
        phone = $("#company_phone_num").val();
        language = $("#company_lang option:selected").text();
        location = $("#company_location").val();
        city = $("#company_city").val();
        code = $("#company_code").val();
        country = $("#company_country option:selected").text();
        about = $("#company_about").val();
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
          url: '/dashboard/update-profile',
          method: 'post',
          data: {
            name: name,
            phone_number: phone,
            language: language,
            location: location,
            city: city,
            zip_code: code,
            country: country,
            about: about
          },
          dataType: false,
          success: function(data) {
            if(data.data == "1") {
              $("#profile_update_success").delay(5).fadeIn('slow').delay(1500).fadeOut('slow');
            }
          }
        });
      }
    </script>

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>
   
@endsection