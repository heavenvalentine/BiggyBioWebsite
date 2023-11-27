@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/SUpihPCQb4c">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
        The process of prokaryotic cell metabolism occurs through an oxidation-reduction process catalyzed by enzymes found in the cytoplasm of bacterial cells.
            <br>
            <br>
            - Selena Indrarto
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/AB_4">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Prokaryote Metabolism
            </h1>
            <p class="desc-note mt-2">
            Because prokaryotic cells do not have membrane organelles, the metabolic processes of prokaryotic cells are carried out in the cytoplasm. The cytoplasm of a bacterial cell contains organic molecules such as fats, proteins, carbohydrates, enzymes, DNA, ribosomes, inclusions and chlorosomes (in photosynthetic bacteria). The process of prokaryotic cell metabolism occurs through an oxidation-reduction process catalyzed by enzymes found in the cytoplasm of bacterial cells.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/1200px-Average_prokaryote_cell-_id.svg.png" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">
            </h4>
            <p class="desc-note mt-2">

	        </p>

        </div>
    </div>
    </div>

<x-footer/>
@endsection
