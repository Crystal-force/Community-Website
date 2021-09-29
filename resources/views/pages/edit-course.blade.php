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
										<img src="123" class="brround" alt="user">
									</div>
									<a href="javascript:;" class="text-dark"><h4 class="mt-3 mb-0 font-weight-semibold">123</h4></a>
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
																		<a href="#" class="text-dark"><h4 class="font-weight-semibold">Millenium</h4></a>
																		<a href="#"><i class="fa fa-clock-o mr-1"></i> Feb-21-2019 , 16:54</a><br>
																		<a href="#"><i class="fa fa-tag mr-1"></i>sale</a>
																	</div>
																</div>
															</div>
														</td>
														<td>CrusaderRecusandae</td>
														<td class="font-weight-semibold fs-16">$54</td>
														<td>
															<a href="#" class="badge badge-success">Active</a>
														</td>
														<td>
															<a class="btn btn-success btn-sm text-white" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
															<a class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
															<a class="btn btn-primary btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
														</td>
													</tr>
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
																		<a href="#" class="text-dark"><h4 class="font-weight-semibold">Millenium</h4></a>
																		<a href="#"><i class="fa fa-clock-o mr-1"></i> Feb-21-2019 , 16:54</a><br>
																		<a href="#"><i class="fa fa-tag mr-1"></i>sale</a>
																	</div>
																</div>
															</div>
														</td>
														<td>CrusaderRecusandae</td>
														<td class="font-weight-semibold fs-16">$540</td>
														<td>
															<a href="#" class="badge badge-info">Pending</a>
														</td>
														<td>
															<a class="btn btn-success btn-sm text-white" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
															<a class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
															<a class="btn btn-primary btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
														</td>
													</tr>
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
																		<a href="#" class="text-dark"><h4 class="font-weight-semibold">Millenium</h4></a>
																		<a href="#"><i class="fa fa-clock-o mr-1"></i> Feb-21-2019 , 16:54</a><br>
																		<a href="#"><i class="fa fa-tag mr-1"></i>sale</a>
																	</div>
																</div>
															</div>
														</td>
														<td>CrusaderRecusandae</td>
														<td class="font-weight-semibold fs-16">$540</td>
														<td>
															<a href="#" class="badge badge-danger">Expired</a>
														</td>
														<td>
															<a class="btn btn-success btn-sm text-white" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
															<a class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
															<a class="btn btn-primary btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
														</td>
													</tr>
													
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

    <div class="modal fade" id="AddCourse" tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="example-Modal3">Add New Course</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                  <input type="file" class="dropify" data-height="180" />
              </div>
              <div class="form-group edit-course-select-category">
                <label class="form-label">Category</label>
                <select class="form-control custom-select select2 ">
                  <option value="0">--Select--</option>
                  <option value="1">Vehicles</option>
                  <option value="2">CrusaderRecusandae</option>
                  <option value="3">Caledonia</option>
                  <option value="4">...</option>
                </select>
              </div>
              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Title:</label>
                <input type="text" class="form-control" id="recipient-name">
              </div>
              <div class="form-group">
                <label for="message-text" class="form-control-label">Message:</label>
                <textarea class="form-control" id="message-text"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Save Course</button>
          </div>
        </div>
      </div>
    </div>
    

		<!--Footer Section-->
		@include('common.footer')
		<!--Footer Section-->

    
    <script>

    </script>
		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>
   
@endsection