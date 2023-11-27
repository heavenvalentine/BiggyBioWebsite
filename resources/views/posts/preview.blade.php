@extends('layout.NavLoggedAdm')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootsebtrap.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="asset/css/pro.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
@section('title', 'Programs')
@section('content')

<div class="container mt-1 mb-2">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="asset/img/poster3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="asset/img/poster2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="asset/img/poster1.png" class="d-block w-100" alt="...">
          </div>
        </div>
    </div>
</div>
</div>

<div class="container">
<div class="row">
    <div class="col-9">
        <h1 class="program-h1 mt-1 me-1">
            Biggy Bio Programs
        </h1>
        <p class="program-p1 mb-3 ms-1"> Find the latest updates, guidance, useful information, and resources about our programs. </p>
    </div>
    <div class="col-3">
        <div class="btn-group mt-2" role="group" aria-label="Basic example">
            <a href="/work_preview" class="btn btn-secondary active" aria-current="page">Program</a>
            <a href="/work_preview2" class="btn btn-secondary">Announcement</a>
        </div>
    </div>
</div>
</div>

<div class="article container">
    <div class="row">

    @foreach ($posts as $post)

        <div class="col-md-4">
            <div class="card article-card gy-5 my-3 " style="padding:4px;" style="width: 8rem;">
            {{-- <div class="card article-card "> --}}

                <img src="{{ Storage::url('public/posts/').$post->image }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title title-post">{{ $post->title }}</h5>
                    <a href="{{url('/detail/' .$post->id)}}" class="btn-article float-right stretched-link">Go</a>
                    {{-- <a href="/detail2/{{ $posts->id }}" class="btn btn-primary">Baca Artikel</a> --}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<x-contact/>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdB
    Ie4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


@endsection
{{-- @endif --}}
