@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/-zG74gUQWgk">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
        "Etymologically, ecology comes from the Greek words oikos meaning habitat or place of residence and logos meaning science. "
            <br>
            <br>
            - Eka Nianty
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/E_2">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Ekologi
            </h1>
            <p class="desc-note mt-2">
            Etymologically, ecology comes from the Greek words oikos meaning habitat or place of residence and logos meaning science. So, what is ecology can be interpreted as the study of places to live (habitat).

Scientifically, ecology is included as one of the biological sciences that studies the interaction or mutual relationship between living things and other living things and also with the surrounding environment.

What is ecology? What is its scope, and why is ecology the basis of environmental science?
Therefore, ecology as the basis of environmental science has a broad and complex scope, such as biodiversity, the number of organisms, to the interaction of the environment and its surroundings.

If studied more deeply, ecology reviews various environmental components, starting from biotic (living) components such as humans, animals, plants, microbes and abiotic (non-living) components such as sunlight, water, air, soil, and so on.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/Biologi-Kelas-10-Ekologi-02-1536x863.png" class="w-75" " alt="" srcset="">
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
