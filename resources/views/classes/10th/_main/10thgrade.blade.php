@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="container d-grid gap-2 d-md-flex classes grades- btn-sm mt-3 mb-4 justify-content-md-end">
    <a class="btn btn-outline-secondary active" href="/10thgrade" role="button">10th Grade</a>
    <a class="btn btn-outline-secondary" href="/11thgrade" role="button">11th Grade</a>
    <a class="btn btn-outline-secondary" href="/12thgrade" role="button">12th Grade</a>
</div>

<div class="container PART-1">
    <h3 class="title-mats mt-4 mb-3"> Introduction to Biology </h3>
      <div class="carousel" style=""
      data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false, "cellAlign": "left", "imagesLoaded": true }'>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/1.png" alt="Card image cap">
        <div class="card-body">
            <a href="/ITB_1" class="mats-link stretched-link"><h5 class="card-title">What is Biology</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/2.png" alt="Card image cap">
        <div class="card-body">
            <a href="/ITB_2" class="mats-link stretched-link"><h5 class="card-title">Branches of Biology</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/3.png" alt="Card image cap">
        <div class="card-body">
            <a href="/ITB_3" class="mats-link stretched-link"><h5 class="card-title">Divisions of Biology</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/4.png" alt="Card image cap">
        <div class="card-body">
            <a href="/ITB_4" class="mats-link stretched-link"><h5 class="card-title">History of Biology</h5></a>
        </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
</div>

<div class="container PART-2">
    <h3 class="title-mats mt-4 mb-3"> Virus </h3>
      <div class="carousel" style=""
      data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false, "cellAlign": "left", "imagesLoaded": true }'>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/5.png" alt="Card image cap">
        <div class="card-body">
            <a href="/V_1" class="mats-link stretched-link"><h5 class="card-title">Virus Explanation</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/6.png" alt="Card image cap">
        <div class="card-body">
            <a href="/V_2" class="mats-link stretched-link"><h5 class="card-title">Classification of Viruses</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/7.png" alt="Card image cap">
        <div class="card-body">
            <a href="/V_3" class="mats-link stretched-link"><h5 class="card-title">List of Viral Diseases</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/4.png" alt="Card image cap">
        <div class="card-body">
            <a href="/V_4" class="mats-link stretched-link"><h5 class="card-title">Summary</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/5.png" alt="Card image cap">
        <div class="card-body">
            <a href="/V_5" class="mats-link stretched-link"><h5 class="card-title">Evaluation Test</h5></a>
        </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
</div>

<div class="container PART-3">
    <h3 class="title-mats mt-4 mb-3"> Archaea and Bacteria </h3>
      <div class="carousel" style=""
      data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false, "cellAlign": "left", "imagesLoaded": true }'>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/8.png" alt="Card image cap">
        <div class="card-body">
            <a href="/AB_1" class="mats-link stretched-link"><h5 class="card-title">Difference Between Archaea and Bacteria</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/9.png" alt="Card image cap">
        <div class="card-body">
            <a href="/AB_2" class="mats-link stretched-link"><h5 class="card-title">Structure of Archaea and Bacteria</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/10.png" alt="Card image cap">
        <div class="card-body">
            <a href="/AB_3" class="mats-link stretched-link"><h5 class="card-title">Prokaryote Metabolism</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/4.png" alt="Card image cap">
        <div class="card-body">
            <a href="/AB_4" class="mats-link stretched-link"><h5 class="card-title">Summary</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/5.png" alt="Card image cap">
        <div class="card-body">
            <a href="/AB_5" class="mats-link stretched-link"><h5 class="card-title">Evaluation Test</h5></a>
        </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
</div>

<div class="container PART-4">
    <h3 class="title-mats mt-4 mb-3"> Plant Biology </h3>
      <div class="carousel" style=""
      data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false, "cellAlign": "left", "imagesLoaded": true }'>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/11.png" alt="Card image cap">
        <div class="card-body">
            <a href="/PB_1" class="mats-link stretched-link"><h5 class="card-title">Parts of Plants</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/12.png" alt="Card image cap">
        <div class="card-body">
            <a href="/PB_2" class="mats-link stretched-link"><h5 class="card-title">The Plant Kingdom</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/13.png" alt="Card image cap">
        <div class="card-body">
            <a href="/PB_3" class="mats-link stretched-link"><h5 class="card-title">Classification of plants</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/14.png" alt="Card image cap">
        <div class="card-body">
            <a href="/PB_4" class="mats-link stretched-link"><h5 class="card-title">Transportation in plants</h5></a>
        </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
</div>

<div class="container PART-5">
    <h3 class="title-mats mt-4 mb-3"> Ecology </h3>
      <div class="carousel" style=""
      data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false, "cellAlign": "left", "imagesLoaded": true }'>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/15.png" alt="Card image cap">
        <div class="card-body">
            <a href="/Ec_1" class="mats-link stretched-link"><h5 class="card-title">What is Ecology?</h5></a>
        </div>
      </div>
        <div class="carousel-cel card" style="width: 10.4rem;">
            <img class="card-img-top" src="asset/img/icon-bio2/16.png" alt="Card image cap">
            <div class="card-body">
                <a href="/Ec_2" class="mats-link stretched-link"><h5 class="card-title">Population Ecology</h5></a>
            </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/17.png" alt="Card image cap">
        <div class="card-body">
            <a href="/Ec_3" class="mats-link stretched-link"><h5 class="card-title">Population Growth</h5></a>
        </div>
    </div>
    <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/5.png" alt="Card image cap">
        <div class="card-body">
            <a href="/Ec_4" class="mats-link stretched-link"><h5 class="card-title">Evaluation Test</h5></a>
        </div>
    </div>
      </div>
      </div>
      </div>
      </div>
      </div>
</div>



@endsection
