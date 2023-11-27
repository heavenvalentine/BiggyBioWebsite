<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/asset/css/dashboard.css">
    <link rel="stylesheet" href="/asset/css/admin_nav.css">
    <title>Biggy Bio | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    {{-- font --}}
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime&family=Nunito+Sans:wght@400;700&family=Nunito:wght@600;700&family=PT+Sans+Caption:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime&family=Nunito+Sans:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css" />
    {{--  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="       {{ asset('js/app.js') }}"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"> </script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/scrollreveal.js/3.3.1/scrollreveal.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
</head>


</style>
<body class="antialiased">
    <nav class="navbar sticky-top navbar-expand-lg container">
        <div class="container-fluid">
          <a class="navbar-brand" href="/"></a>
          <a href="/" class="">
            <img src="/asset/img/icon.png" alt="Stugy Space" class="ss-icon" width="90" height="90">
        </a>
          <button class="navbar-toggler" type="button" \data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li>
                <div class="dropdown">
                    <a
                      class="dropdown-togle d-flex align-items-center hidden-arrow"
                      href="#"
                      id="navbarDropdownMenuAvatar"
                      role="button"
                      data-mdb-toggle="dropdown"
                      aria-expanded="false"
                    >
                    @if(Auth::user()->photo)
                    <img class="image rounded-circle" src="{{asset('/storage/photos/'.Auth::user()->photo)}}" alt="profile_photo" style="width: 30px;height: 30px;  margin: 5px;"
                    @endif
                    </a>
                    <ul
                      class="dropdown-menu dropdown-menu-end"
                      aria-labelledby="navbarDropdownMenuAvatar"
                    >
                    <li>
                        <a class="dropdown-item" href="/admin_dashboard">Admin Workspace</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="/work_preview">Preview</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="/home">User View</a>
                    </li>
                    <hr class="solid mt-1 mb-1 me-4">
                      <li>
                        <a class="dropdown-item" href="{{ route('profile.index') }}">My Profile</a>
                      </li>
                      <li style="
                      height: 30px;">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <input type="submit"  value="Log Out" class="dropdown-item">
                        </form>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      @yield('content')


    <footer>
        <div class="text-center p-3 mt-5" style="background-color: white; color: white;        ; background-color:#19766B; font-family: 'Nunito', sans-serif;
        font-family: 'Nunito Sans', sans-serif;">
        © 2017 Copyright:
        <a class="text-white" href="/">BiggyBio</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>

</body>
</html>
