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
								<h3 class="card-title">Account Setting</h3>
							</div>
              <div class="card-body">
                <div class="border-0">
                  <form class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control"  placeholder="test@test.com" >
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <div class="form-group">
                            <label class="form-label">Password</label>
                            <input type="text" class="form-control" placeholder="123456">
                          </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                          <div class="form-group">
                            <label class="form-label">New Password</label>
                            <input type="text" class="form-control" placeholder="">
                          </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                          <div class="form-group">
                            <label class="form-label">Confirm New Password</label>
                            <input type="text" class="form-control" placeholder="">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <button type="submit" class="btn btn-primary">Save</button>
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
   
		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>
   
@endsection