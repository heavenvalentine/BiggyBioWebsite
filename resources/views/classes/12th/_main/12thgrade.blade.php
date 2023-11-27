@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="container d-grid gap-2 d-md-flex classes grades- btn-sm mt-3 mb-4 justify-content-md-end">
    <a class="btn btn-outline-secondary" href="/10thgrade" role="button">10th Grade</a>
    <a class="btn btn-outline-secondary" href="/11thgrade" role="button">11th Grade</a>
    <a class="btn btn-outline-secondary active" href="/12thgrade" role="button">12th Grade</a>
</div>

<div class="container PART-1">
    <h3 class="title-mats mt-4 mb-3"> Enzymes </h3>
      <div class="carousel" style=""
      data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": true, "pageDots": false, "cellAlign": "left", "imagesLoaded": true }'>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/33.png" alt="Card image cap">
        <div class="card-body">
            <a href="/E_1" class="mats-link stretched-link"><h5 class="card-title">Enzymes Explanation</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/34.png" alt="Card image cap">
        <div class="card-body">
            <a href="/E_2" class="mats-link stretched-link"><h5 class="card-title">Structure</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/35.png" alt="Card image cap">
        <div class="card-body">
            <a href="/E_3" class="mats-link stretched-link"><h5 class="card-title">Classification</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/36.png" alt="Card image cap">
        <div class="card-body">
            <a href="/E_4" class="mats-link stretched-link"><h5 class="card-title">Mechanism</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/37.png" alt="Card image cap">
        <div class="card-body">
            <a href="/E_5" class="mats-link stretched-link"><h5 class="card-title">Function</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/4.png" alt="Card image cap">
        <div class="card-body">
            <a href="/E_6" class="mats-link stretched-link"><h5 class="card-title">Summary</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/5.png" alt="Card image cap">
        <div class="card-body">
            <a href="/E_7" class="mats-link stretched-link"><h5 class="card-title">Evaluation Test</h5></a>
        </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
</div>

<div class="container PART-2">
    <h3 class="title-mats mt-4 mb-3"> Catabolism </h3>
      <div class="carousel" style=""
      data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false, "cellAlign": "left", "imagesLoaded": true }'>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/38.png" alt="Card image cap">
        <div class="card-body">
            <a href="/C_1" class="mats-link stretched-link"><h5 class="card-title">Catabolism in Different Organisms</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/39.png" alt="Card image cap">
        <div class="card-body">
            <a href="/C_2" class="mats-link stretched-link"><h5 class="card-title">Stages of Catabolism</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/5.png" alt="Card image cap">
        <div class="card-body">
            <a href="/C_3" class="mats-link stretched-link"><h5 class="card-title">Evaluation Test</h5></a>
        </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
</div>

<div class="container PART-3">
    <h3 class="title-mats mt-4 mb-3"> Anabolism </h3>
      <div class="carousel" style=""
      data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false, "cellAlign": "left", "imagesLoaded": true }'>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/40.png" alt="Card image cap">
        <div class="card-body">
            <a href="/A_1" class="mats-link stretched-link"><h5 class="card-title">Anabolism Example</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/41.png" alt="Card image cap">
        <div class="card-body">
            <a href="/A_2" class="mats-link stretched-link"><h5 class="card-title">Stages of Anabolism</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/42.png" alt="Card image cap">
        <div class="card-body">
            <a href="/A_3" class="mats-link stretched-link"><h5 class="card-title">Anabolism Functions</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio2/43.png" alt="Card image cap">
        <div class="card-body">
            <a href="/A_4" class="mats-link stretched-link"><h5 class="card-title">DNA synthesis</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/4.png" alt="Card image cap">
        <div class="card-body">
            <a href="/PP_1" class="mats-link stretched-link"><h5 class="card-title">Summary</h5></a>
        </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
</div>

<div class="container PART-2">
    <h3 class="title-mats mt-4 mb-3"> Plant Physiology </h3>
      <div class="carousel" style=""
      data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false, "cellAlign": "left", "imagesLoaded": true }'>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/20.png" alt="Card image cap">
        <div class="card-body">
            <a href="/PP_1" class="mats-link stretched-link"><h5 class="card-title">Transport in Plants</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/21.png" alt="Card image cap">
        <div class="card-body">
            <a href="/PP_2" class="mats-link stretched-link"><h5 class="card-title">Mineral Nutrition</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/22.png" alt="Card image cap">
        <div class="card-body">
            <a href="/PP_3" class="mats-link stretched-link"><h5 class="card-title">Plant Growth and Development
            </h5></a>
        </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
</div>

<div class="container PART-5">
    <h3 class="title-mats mt-4 mb-3">  Principles of Inheritance and Variation </h3>
      <div class="carousel" style=""
      data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false, "cellAlign": "left", "imagesLoaded": true }'>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/35.png" alt="Card image cap">
        <div class="card-body">
            <a href="/PIV_1" class="mats-link stretched-link"><h5 class="card-title"> Search For Genetic Material and DNA as Genetic Material</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/36.png" alt="Card image cap">
        <div class="card-body">
            <a href="/PIV_2" class="mats-link stretched-link"><h5 class="card-title"> Heredity and Variation </h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/37.png" alt="Card image cap">
        <div class="card-body">
            <a href="/PIV_3" class="mats-link stretched-link"><h5 class="card-title"> Mendelian inheritance </h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/38.png" alt="Card image cap">
        <div class="card-body">
            <a href="/PIV_4" class="mats-link stretched-link"><h5 class="card-title"> Elementary idea of polygenic inheritance </h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/4.png" alt="Card image cap">
        <div class="card-body">
            <a class="mats-link" href="/PIV_5"><h5 class="card-title stretched-link">Chapter Summary</h5></a>
        </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
</div>

<div class="container PART-6">
    <h3 class="title-mats mt-4 mb-3"> Energy in Living Systems </h3>
      <div class="carousel" style=""
      data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": true, "pageDots": false, "cellAlign": "left", "imagesLoaded": true }'>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/6.png" alt="Card image cap">
        <div class="card-body">
            <a href="/ELS_1" class="mats-link stretched-link"><h5 class="card-title">Introduction to Energy</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/7.png" alt="Card image cap">
        <div class="card-body">
            <a href="/ELS_2" class="mats-link stretched-link"><h5 class="card-title">Energy Source</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/8.png" alt="Card image cap">
        <div class="card-body">
            <a href="/ELS_3" class="mats-link stretched-link"><h5 class="card-title">Food as Energy Source</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/9.png" alt="Card image cap">
        <div class="card-body">
            <a href="/ELS_4" class="mats-link stretched-link"><h5 class="card-title">Energy Transformation of Cell</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/10.png" alt="Card image cap">
        <div class="card-body">
            <a href="/ELS_5" class="mats-link stretched-link"><h5 class="card-title">Amphibolic Pathways</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/11.png" alt="Card image cap">
        <div class="card-body">
            <a href="/ELS_6" class="mats-link stretched-link"><h5 class="card-title">Respiratory quotient</h5></a>
        </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
</div>

<div class="container PART-7">
    <h3 class="title-mats mt-4 mb-3"> Biotechnology </h3>
      <div class="carousel" style=""
      data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false, "cellAlign": "left", "imagesLoaded": true }'>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/39.png" alt="Card image cap">
        <div class="card-body">
            <a href="/B_1" class="mats-link stretched-link"><h5 class="card-title">Principles of Biotechnology</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/40.png" alt="Card image cap">
        <div class="card-body">
            <a href="/B_2" class="mats-link stretched-link"><h5 class="card-title">Recombinant DNA Technology</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/41.png" alt="Card image cap">
        <div class="card-body">
            <a href="/B_3" class="mats-link stretched-link"><h5 class="card-title">Bioprocess Engineering</h5></a>
        </div>
      </div>
      <div class="carousel-cel card" style="width: 10.4rem;">
        <img class="card-img-top" src="asset/img/icon-bio/4.png" alt="Card image cap">
        <div class="card-body">
            <a class="mats-link stretched-link" href="/B_4"><h5 class="card-title">Evaluation Test</h5></a>
        </div>
      </div>
      </div>
</div>


@endsection
