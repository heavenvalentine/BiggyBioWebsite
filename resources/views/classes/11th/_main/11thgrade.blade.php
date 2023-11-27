@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="container d-grid gap-2 d-md-flex classes grades- btn-sm mt-3 mb-4 justify-content-md-end">
    <a class="btn btn-outline-secondary" href="/10thgrade" role="button">10th Grade</a>
    <a class="btn btn-outline-secondary active" href="/11thgrade" role="button">11th Grade</a>
    <a class="btn btn-outline-secondary" href="/12thgrade" role="button">12th Grade</a>
</div>

<div class="container PART-1">
    <h3 class="title-mats mt-4 mb-3"> Biology Biomolecules </h3>
      <div class="carousel" style=""
      data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false, "cellAlign": "left", "imagesLoaded": true }'>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/18.png" alt="Card image cap">
        <div class="card-body">
            <a href="/BB_1" class="mats-link stretched-link"><h5 class="card-title">
                Carbohydrates</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/19.png" alt="Card image cap">
        <div class="card-body">
            <a href="/BB_2" class="mats-link stretched-link"><h5 class="card-title">
                Proteins</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/20.png" alt="Card image cap">
        <div class="card-body">
            <a href="/BB_3" class="mats-link stretched-link"><h5 class="card-title">
                Nucleic Acids</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/21.png" alt="Card image cap">
        <div class="card-body">
            <a href="/BB_4" class="mats-link stretched-link"><h5 class="card-title">
                Lipids</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/4.png" alt="Card image cap">
        <div class="card-body">
            <a href="/BB_5" class="mats-link stretched-link"><h5 class="card-title">
                Summary</h5></a>
        </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
</div>

<div class="container PART-2">
    <h3 class="title-mats mt-4 mb-3"> Fundamental Unit of Life - Cell </h3>
      <div class="carousel" style=""
      data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": true, "pageDots": false, "cellAlign": "left", "imagesLoaded": true }'>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/22.png" alt="Card image cap">
        <div class="card-body">
            <a href="/FULC_1" class="mats-link stretched-link"><h5 class="card-title">Cell Definition</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/23.png" alt="Card image cap">
        <div class="card-body">
            <a href="/FULC_2" class="mats-link stretched-link"><h5 class="card-title">Discovery of Cells</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/24.png" alt="Card image cap">
        <div class="card-body">
            <a href="/FULC_3" class="mats-link stretched-link"><h5 class="card-title">Characteristics of Cells</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/25.png" alt="Card image cap">
        <div class="card-body">
            <a href="/FULC_4" class="mats-link stretched-link"><h5 class="card-title">Types of Cells</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/26.png" alt="Card image cap">
        <div class="card-body">
            <a href="/FULC_5" class="mats-link stretched-link"><h5 class="card-title">Cell Structure</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/5.png" alt="Card image cap">
        <div class="card-body">
            <a href="/FULC_6" class="mats-link stretched-link"><h5 class="card-title">Evaluation Test</h5></a>
        </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
</div>

<div class="container PART-3">
    <h3 class="title-mats mt-4 mb-3"> Plants Morphology </h3>
      <div class="carousel" style=""
      data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false, "cellAlign": "left", "imagesLoaded": true }'>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/27.png" alt="Card image cap">
        <div class="card-body">
            <a href="/PM_1" class="mats-link stretched-link"><h5 class="card-title">Root</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/28.png" alt="Card image cap">
        <div class="card-body">
            <a href="/PM_2" class="mats-link stretched-link"><h5 class="card-title">Stem</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/29.png" alt="Card image cap">
        <div class="card-body">
            <a href="/PM_3" class="mats-link stretched-link"><h5 class="card-title">Leaf</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/5.png" alt="Card image cap">
        <div class="card-body">
            <a href="/PM_4" class="mats-link stretched-link"><h5 class="card-title">Evaluation Test</h5></a>
        </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
</div>

<div class="container PART-4">
    <h3 class="title-mats mt-4 mb-3"> Animal Tissue Types </h3>
      <div class="carousel" style=""
      data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false, "cellAlign": "left", "imagesLoaded": true }'>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/30.png" alt="Card image cap">
        <div class="card-body">
            <a href="/ATT_1" class="mats-link stretched-link"><h5 class="card-title">Epithelial Tissue</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/31.png" alt="Card image cap">
        <div class="card-body">
            <a href="/ATT_2" class="mats-link stretched-link"><h5 class="card-title">Connective Tissue</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/32.png" alt="Card image cap">
        <div class="card-body">
            <a href="/ATT_3" class="mats-link stretched-link"><h5 class="card-title">Muscle Tissue</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/33.png" alt="Card image cap">
        <div class="card-body">
            <a href="/ATT_4" class="mats-link stretched-link"><h5 class="card-title">Nervous Tissue</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/5.png" alt="Card image cap">
        <div class="card-body">
            <a href="/ATT_5" class="mats-link stretched-link"><h5 class="card-title">Summary</h5></a>
        </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
</div>

@endsection
