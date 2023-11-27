@extends('layout.NavLogged-layout')
@extends('posts.programs')
<div class="container mt-5 mb-5">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        @foreach ($carousels as $carousel)
          <div class="carousel-item active">
            <img src="{{ Storage::url('public/carousels/').$carousel->image }}" class="d-block w-100" alt="...">
          </div>
        @endforeach
        </div>
    </div>
</div>

@yield('carousels')
