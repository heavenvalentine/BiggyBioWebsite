@extends('layout.akun-layout')
@section('title', 'Register')


@section('content')
{{-- <x-logo_kiri>
</x-logo_kiri> --}}
<section class="vh-100">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 text-black left column">

        <a href="/">
            <img  draggable="false"  src="asset/img/icon.png" alt="Stugy Space" class="ss-icon logoBB" width="120" height="120"
            style="margin-left: 90px; margin-top:-12px; "
            >
        </a>
        <p class="welcome-sq">Get started with a free account. Sign up for a voyage of lifetime.</p>

          <div class="px-5 ms-xl-4">
            <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          </div>

          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
<div class="form-register">
    <form action="" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                   name="name" placeholder="Your name" value="{{ old('name') }}">
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                   name="email" placeholder="name@example.com" value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="password">
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Password Confirmation</label>
            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation"
                   placeholder="password">
            @error('password_confirmation')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
              Agree to <a href="/terms" class="terms">Terms of Use</a> and <a href="/privacy" class="conditions">Privacy Policy</a>
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        <div class="mb-3">
        <input type="submit" class="btn-register" value="Register" style="            margin-top: 15px;"
        >
        </div>

    </form>
</div>

          </div>

        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block right-column">
        <div class="img-carousel">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
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
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
        </div>

        <div class="have-acc">
            <p  class="already-div" style="margin-top:-27px;margin-left:220px; font-size:13px;">Already have account? <a class="span-login" style="text-decoration: none;" href="/login" class="link-info">Login</a></p>
        </div>

      </div>
    </div>
  </section>
  </section>

  @endsection
