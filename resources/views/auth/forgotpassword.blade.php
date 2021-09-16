@extends('layout.index')
@section('content')
    <!--Loader-->
    <div id="global-loader">
        <img src="../assets/preloader/Fidget-spinner.gif" class="loader-img " alt="">
    </div>

    @include('common.top-header')

   <!--Forgot password-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto">
            
						<div class="single-page w-100 p-0" >
              
							<div class="wrapper wrapper2">
								<form id="forgotpsd" class="card-body">
                                    <div class="sign-login">
                                        <a href="{{route('main')}}" >
                                        <img src="../assets/logo/logo_.png" alt="Barca" class="img-responsive">
                                        </a>
                                    </div>
									<h3 class="pb-2">Forgot password</h3>
									<div class="mail">
										<input type="email" name="mail">
										<label>Mail or Username</label>
									</div>
									<div class="submit">
										<a class="btn btn-primary btn-block" href="#">Send</a>
									</div>
									<div class="text-center text-dark mb-0">
										Forget it, <a href="{{route('login')}}">send me back</a> to the sign in.
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Forgot password-->

    <!-- Newsletter-->
    <section class="sptb2 bg-white border-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-6 col-md-12">
                    <div class="sub-newsletter">
                        <h3 class="mb-2"><i class="fa fa-paper-plane-o mr-2"></i> Subscribe To Our Newsletter</h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor</p>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-6 col-md-12">
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

    <!--Footer Section-->
    @include('common.footer')
    <!--Footer Section-->


    <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fa fa-rocket"></i></a>
@endsection
