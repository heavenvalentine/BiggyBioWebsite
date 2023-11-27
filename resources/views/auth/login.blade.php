@extends('layout.akun-layout')
@section('title', 'Login')


@section('content')
<section class="vh-100">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 text-black left column">

        <a href="/">
            <img  draggable="false"  src="asset/img/icon.png" alt="Stugy Space" class="ss-icon logoBB" width="120" height="120"
            style="margin-left: 90px; margin-top:10px"
            >
        </a>
        <p class="welcome-sq">Welcome back! Please login to your account.</p>

          <div class="px-5 ms-xl-4">
            <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          </div>

          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

<div class="form-login">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

            <div class="mb-3">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="mb-3 password-div">
            <label for="password" class="form-label ">{{ __('Password') }}</label>

            <div class="mb-3">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="remember-div">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

    <div class="forgot-div">
        <div class="">
            @if (Route::has('password.request'))
            <a class="btn btn-link forgot-div" href="{{ route('password.request') }}" style="    margin-top: 23px;
            ">
                {{ __('Forgot password?') }}
            </a>
        @endif
    </div>
</div>

    <div class="login">
        <button type="submit" class="btn-register">
            {{ __('Login') }}
        </button>
    </div>


    </form>
</div>

          </div>

        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block right-column">
        <div class="img-carousel">
            <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" style="padding-bottom:85px;">
                  <div class="carousel-item active" style="height: 500px">
                    <img  draggable="false" src="asset/img/welcome.svg" height="455px" style="margin-top:40px;" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="bottom:-75px;">
                    <h5 class="h5-1">Welcome to Biggy Bio</h5>
                    <p class="p-1">Grow your potential with us</p>
                    </div>
                  </div>
                  <div class="carousel-item" style="height: 500px">
                    <img  draggable="false" src="asset/img/homestudy.svg" class="d-block w-100" alt="..."height="465px" style="margin-top:25px;" >
                    <div class="carousel-caption d-none d-md-block" style="bottom:-75px;">
                      <h5 class="h5-1">Enjoy Fun and Free Learning Experience</h5>
                      <p class="p-1">Easy and fun way to learn Biology. </p>
                    </div>
                  </div>
                  <div class="carousel-item" style="height:500px;">
                    <img src="asset/img/teacher.svg"  draggable="false" class="d-block w-100" alt="..." height="455px" style="margin-top:25px;">
                    <div class="carousel-caption d-none d-md-block" style="bottom:-75px;">
                      <h5 class="h5-1">Find Your Best Online Tutor</h5>
                      <p class="p-1">We hire the best tutors around the globe only for you</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
        </div>
        <div class="no-acc">
            <p  class="already-div" style="margin-top:-140px;margin-left:226px; font-size:13px;"> New member? <a class="span-login" style="text-decoration: none; " href="/register" class="link-info">Register</a></p>
        </div>

      </div>
    </div>
  </section>
  </section>

  @endsection
