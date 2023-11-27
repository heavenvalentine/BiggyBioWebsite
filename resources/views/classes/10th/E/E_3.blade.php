@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/XrQJdwTCqv4">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
        "Population growth is characterized by changes in the number of population over time."
            <br>
            <br>
            - Benedicta
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/E_4">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Population Growth
            </h1>
            <p class="desc-note mt-2">
            Population growth is characterized by changes in the number of population over time. These changes are usually influenced by the number of births, deaths and migration.These changes are usually influenced by the number of births, deaths and migration.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/images.jfif" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">HERE
            </h4>
            <p class="desc-note mt-2">
            HERE
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">HERE
            </h4>
            <p class="desc-note mt-2">
            HERE
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
