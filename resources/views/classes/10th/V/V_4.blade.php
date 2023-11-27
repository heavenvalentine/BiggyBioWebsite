@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/Cg_GW7yhq20">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            "The concept of a healthy life is when everything is done in a balanced way."
            <br>
            <br>
            - Alexandra
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/V_5">Next &#8594;</a>
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
            Viruses are the smallest infectious agents having a diameter of about 20 to 300 nano meters.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/Virus-1.jpeg" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">How To Deal With Viruses
            </h4>
            <p class="desc-note mt-2">
            ways to keep your body healthy: adequate nutrition, moderate exercise, don't stress, drink lots of water, eat healthy food, pray.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
