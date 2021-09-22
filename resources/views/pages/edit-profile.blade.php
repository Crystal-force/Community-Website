@extends('layout.index')
@section('content')
		<!--Loader-->
		<div id="global-loader">
			<img src="../assets/preloader/index.svg" class="loader-img " alt="">
		</div>

		<div class="header-main">
      <div class="top-bar">
          <div class="container">
              <div class="row">
                  @include('common.logged-top-header')

                  <div class="col-xl-4 col-lg-4 col-sm-8 col-5">
                      <div class="top-bar-right">
                          <ul class="custom">
                              <li>
                                  <a href="{{route('edit-profile')}}" class="text-dark top-header-text"><i class="fa fa-user mr-1"></i>
                                      <span>{{$logged_user->name}}</span></a>
                              </li>
                              <li>
                                  <a href="#" class="text-dark top-header-text"><i class="fa fa-envelope-open-o mr-1"></i>
                                      <span>{{$logged_user->email}}</span></a>
                              </li>
                              <li>
                                  <a href="/logout" class="text-dark top-header-text"><i class="icon icon-power mr-1"></i>
                                      <span>Logout</span></a>
                              </li>
                          </ul>
                      </div>
                  </div>
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
    
      @include('common.navbar')
    </div>

		<!--Breadcrumb-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-image-src="../assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white ">
							<h1 class="">Edit Profile</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Edit Profile</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Breadcrumb-->

		<!--User Profile-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body pattern-1">
								<div class="wideget-user">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<div class="wideget-user-desc text-center">
												<div class="team-img d-flex justify-content-center">
                          <img src="../assets/img/users/bu_logo_1.png" class="img-thumbnail rounded-circle w-15" alt="">
                        </div>
												<div class="user-wrap wideget-user-info">
													<a href="#" class="text-white"><h4 class="font-weight-semibold">UMA Universidad de Málaga</h4></a>
													<div class="wideget-user-rating d-flex justify-content-center">
														<p class="mr-1 ml-1"><i class="fa fa-map  mr-1 text-muted text-warning mr-1 text-white"></i><span class="text-white">Moscow, Russian Federation</span></p>
														<p class="mr-1 ml-1"><i class="fa fa-user  mr-1 text-muted text-warning mr-1 text-white"></i><span class="text-white">18 students</span></p>
														<p class="mr-1 ml-1"><i class="fa fa-leanpub  mr-1 text-muted text-warning mr-1 text-white"></i><span class="text-white">180 products published</span></p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-12 col-md-12 text-center">
											<div class="wideget-user-info ">
												<div class="wideget-user-icons mt-2">
													<a href="#" class="facebook-bg mt-0"><i class="fa fa-facebook"></i></a>
													<a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
													<a href="#" class="google-bg"><i class="fa fa-google"></i></a>
													<a href="#" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <div class="border-0">
                  <div class="upload-img-bar content-center text-center">
                    <img id="avatar-img" class="img-circle profile_img" src="../assets/img/users/bu_logo_1.png" width="150" alt="avatar" >
                    <div class="upload-button-div hide">
                        <label class="browse-button" data-toggle="tooltip">Browse...
                            <input type="file" class="sr-only" id="input-avatar-change" name="image"
                                  accept="image/*" style="width: 220px">
                        </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" placeholder="test@test.com">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="text" class="form-control" placeholder="123456">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-pill btn-secondary">Change Information</button>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <div class="col-lg-8">
            <div class="card">
              <div class="card-body">
                <div class="border-0">
                  <form class="card">
                    <div class="card-header">
                      <h3 class="card-title">Edit Profile</h3>
                    </div>
                    <div class="card-body">
                      <div class="row">
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
		<!--/User Profile-->

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

      // function toDataURL(url, callback) {
      //     var xhr = new XMLHttpRequest();
      //     xhr.onload = function() {
      //         var reader = new FileReader();
      //         reader.onloadend = function() {
      //             callback(reader.result);
      //         }
      //         reader.readAsDataURL(xhr.response);
      //     };
      //     xhr.open('GET', url);
      //     xhr.responseType = 'blob';
      //     xhr.send();
      // }

      // toDataURL("", function(dataUrl) {
      //     // canvas_pic = dataUrl;
      //     // document.getElementById('avatar-img').src = canvas_pic;
      // })
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
              console.log(cropper);
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