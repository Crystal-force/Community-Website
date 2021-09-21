@extends('layout.index')
@section('content')
    <!--Loader-->
    <div id="global-loader">
        <img src="../assets/preloader/Fidget-spinner.gif" class="loader-img " alt="">
    </div>

    @include('common.top-header')

    <!--Login-Section-->
    <section class="sptb">
        <div class="container customerpage">
            <div class="row">
                <div class="single-page">
                    <div class="col-lg-5 col-xl-5 col-md-6 d-block mx-auto">
                        <div class="wrapper wrapper2 login-area">
                            <form id="login" class="card-body" tabindex="500">
                                <div class="sign-login">
                                    <a href="{{route('main')}}" >
                                      <img src="../assets/logo/logo_.png" alt="Barca" class="img-responsive">
                                    </a>
                                </div>
                                <h3>Login</h3>
                                <div class="mail">
                                    <input type="email" name="mail" id="login_email">
                                    <label>Mail or Username</label>
                                    <p class="null-input" id="email_error">Incorrect email</p>
                                </div>
                                <div class="passwd">
                                    <input type="password" name="password" id="login_pwd">
                                    <label>Password</label>
                                    <p class="null-input" id="pwd_error">Incorrect password</p>
                                </div>
                                <div class="submit">
                                    <a class="btn btn-primary btn-block" href="javascript:;" onclick="UserLogin()">Login</a>
                                </div>
                                <p class="mb-2"><a href="{{route('forgot-password')}}">Forgot Password</a></p>
                                <p class="text-dark register-route-text mb-0">Don't have account?<a
                                        href="{{ 'register' }}" class="text-primary ml-1">Sign UP</a></p>
                            </form>
                            <hr class="divider">
                            <div class="card-body social-images">
                                <p class="text-body text-left">Sign In to Social Accounts</p>
                                <div class="row">
                                    <div class="col-6">
                                        <a href="https://www.facebook.com/"
                                            class="btn btn-white mr-2 border px-2 btn-lg btn-block text-left">
                                            <img src="../assets/images/svgs/facebook.svg" class="h-5 w-5"
                                                alt=""><span class="ml-3 d-inline-block font-weight-bold"> Facebook</span>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="https://www.google.com/gmail/"
                                            class="btn btn-white mr-2 px-2 border btn-lg btn-block text-left">
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
    <!--/Login-Section-->

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
    <script>
        function UserLogin() {
            let lg_email = '';
            let lg_password = '';

            lg_email = $("#login_email").val();
            lg_password = $('#login_pwd').val();
            
            if(lg_email == "" && lg_password != "") {
                $('#email_error').show();
            }
            else if(lg_email != "" && lg_password == "") {
                $('#pwd_error').show();
            }
            else if(lg_email == "" && lg_password == "") {
                $("#email_error").show();
                $("#pwd_error").show();
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: '/login',
                method: 'post',
                data: {
                    email: lg_email,
                    password: lg_password
                },
                dataType: false,
                success:function(data) {
                    if(data.data == "1") {
                        window.location.href = "/dashboard"
                    }
                    else if(data.data == "0") {
                        window.location.href = "/login"
                    }
                }
            });
        }
    </script>

    <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fa fa-rocket"></i></a>
@endsection
