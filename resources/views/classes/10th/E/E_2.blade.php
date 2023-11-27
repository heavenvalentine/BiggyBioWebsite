@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/6nI5xxtvXGo">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            "Population ecology is a subfield of ecological knowledge."
            <br>
            <br>
            - Malafincent
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/E_3">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Ecology Population
            </h1>
            <p class="desc-note mt-2">
            Population ecology is a subfield of ecological knowledge. Population ecology studies the interaction of a population with areas related to its habitat. This interaction includes how a population grows, survives, and even carries out reproductive lineages. Population ecology is also able to study the existence of organisms from the individual to the ecosystem level.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/440px-Eudyptes_chrysocome_rookery_1.jpg" class="w-75" " alt="" srcset="">
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
