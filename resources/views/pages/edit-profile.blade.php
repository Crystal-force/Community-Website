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
										<img src="../assets/img/users/bu_logo_1.png" class="brround" alt="user">
									</div>
									<a href="userprofile.html" class="text-dark"><h4 class="mt-3 mb-0 font-weight-semibold">Robert McLean</h4></a>
								</div>
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
                            <img id="avatar-img" class="img-circle profile_img img-thumbnail" src="../assets/img/users/bu_logo_1.png" width="150" alt="avatar">
                            <div class="upload-button-div hide">
                                <label class="browse-button" data-toggle="tooltip">Browse...
                                    <input type="file" class="sr-only" id="input-avatar-change" name="image"
                                          accept="image/*" style="width: 220px">
                                </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="form-group">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control"  placeholder="name" >
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                          <div class="form-group">
                            <label class="form-label">Phone number</label>
                            <input type="text" class="form-control" placeholder="phone number">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group ml-1">
                            <label class="form-label">Language</label>
                            <select class="form-control select2 lang-select" data-placeholder="Choose Browser" multiple>
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
                            <input type="email" class="form-control" placeholder="Location">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                          <div class="form-group">
                            <label class="form-label">City</label>
                            <input type="text" class="form-control" placeholder="City" >
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                          <div class="form-group">
                            <label class="form-label">Postal Code</label>
                            <input type="number" class="form-control" placeholder="ZIP Code">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <div class="form-group">
                            <label class="form-label">Country</label>
                            <select class="form-control custom-select select2">
                              <option value="0">--Select--</option>
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
                            <textarea rows="5" class="form-control" placeholder="Enter About your description"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <button type="submit" class="btn btn-primary">Update Profile</button>
                    </div>
                  </form>
                </div>
              </div>
						</div>
					</div>
				</div>
			</div>
		</section>

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
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-info" id="crop-button">Set as Avatar</button>
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
                
              }
          
          });
      });
    </script>
		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>
   
@endsection