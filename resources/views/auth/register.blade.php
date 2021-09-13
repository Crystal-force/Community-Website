@extends('layout.index')
@section('content')
    <!--Loader-->
    <div id="global-loader">
        <img src="../assets/preloader/Fidget-spinner.gif" class="loader-img " alt="">
    </div>

    @include('common.top-header')

    <!--Section-->
    <section class="sptb">
        <div class="container customerpage">
            <div class="row">
                <div class="single-page">
                    <div class="col-lg-5 col-xl-5 col-md-6 d-block mx-auto">
                        <div class="wrapper wrapper2 login-area">
                            <form id="Register" class="card-body" tabindex="500">
                                <h3>Register</h3>
                                <div class="name">
                                    <input type="text" name="name">
                                    <label>Name</label>
                                </div>
                                <div class="mail">
                                    <input type="email" name="mail">
                                    <label>Mail or Username</label>
                                </div>
                                <div class="passwd">
                                    <input type="password" name="password">
                                    <label>Password</label>
                                </div>
                                <div class="submit">
                                    <a class="btn btn-primary btn-block" href="index.html">Register</a>
                                </div>
                                <p class="text-dark mb-0 register-route-text">Already have an account?<a
                                        href="{{ route('login') }}" class="text-primary ml-1">Sign In</a></p>
                            </form>
                            <hr class="divider">
                            <div class="card-body social-images">
                                <p class="text-body text-left">Sign In to Social Accounts</p>
                                <div class="row">
                                    <div class="col-6">
                                        <a href="https://www.facebook.com/"
                                            class="btn btn-white mr-2 border px-2 btn-lg btn-block mb-0 text-left">
                                            <img src="../assets/images/svgs/facebook.svg" class="h-5 w-5"
                                                alt=""><span class="ml-3 d-inline-block font-weight-bold"> Facebook</span>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="https://www.google.com/gmail/"
                                            class="btn btn-white mr-2 px-2 border btn-lg btn-block mb-0 text-left">
                                            <img src="../assets/images/svgs/search.svg" class="h-5 w-5" alt=""><span
                                                class="ml-3 d-inline-block font-weight-bold"> Google</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section-->

    <!--Newsletter-->
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
