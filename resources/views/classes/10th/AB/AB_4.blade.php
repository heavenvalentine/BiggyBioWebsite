@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/VGcT1-XaWgk">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
        "Archaebacteria are the earliest (ancient) cells that have affinity with eukaryotic organisms (have a cell nucleus membrane)."
            <br>
            <br>
            - Ametha Rinjany
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/AB_5">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Summary
            </h1>
            <p class="desc-note mt-2">
            Archaebacteria are the earliest (ancient) cells that have affinity with eukaryotic organisms (have a cell nucleus membrane). The term Archaebacteria comes from the Greek, namely from the word archaio which means ancient. Therefore, Archaebacteria are the oldest living organisms on earth.
<br>
<br>
Archaebacteria live in extreme environments that are thought to have been that of early Earth life. Archaebacteria or also called ancient bacteria because they are organisms whose typical energy metabolism forms methane gas (CH4) by reducing carbon dioxide (CO2).
<br>
<br>
Archaebacteria are anaerobic and chemosynthetic with cell walls that do not contain peptidoglycan, but their plasma membranes contain lipids. Living in an extreme environment. Archaebacteria consists of bacteria that live in critical or extreme places, for example bacteria that live in hot water, bacteria that live in places with high salt content, and bacteria that can live in hot or acidic places, such as in volcanic craters. , and on peatlands.
<br>
<br>
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/bacteria-g4f4a505d4_1920-768x543.jpg" class="w-75" " alt="" srcset="">
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
