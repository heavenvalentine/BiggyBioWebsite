@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/waRKYO0cXjA">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            "Kingdom Plantae or better known as plants is a multicellular eukaryotic organism with a cell wall and chlorophyll."
            <br>
            <br>
            - Hera Wati
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/PB_3">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Kingdom Plantea
            </h1>
            <p class="desc-note mt-2">
            Kingdom Plantae or better known as plants is a multicellular eukaryotic organism with a cell wall and chlorophyll. Chlorophyll is a green substance in leaves that functions in the process of photosynthesis, so that plants are able to make their own food (autotrophs). This is the difference between Kingdom Plantae and Kingdom Animalia.

            <br>
            <br>
            Outside the formal context, the word "plant" refers to a product that has certain characteristics such as being able to carry out photosynthesis, produce cellulose, and be multicellular. There has been much criticism regarding fungi, including parts of the kingdom plantae, because fungi obtain food not through the process of photosynthesis, but from the remains of organic matter.
            <br>
            <br>
            In addition, the building blocks of fungal cell walls are not the same as those of plants, they are more similar to those of animals. Therefore, the fungi were removed from the kingdom Plantae and made a separate kingdom called the kingdom fungi. Most types of algae are also excluded from the kingdom plantae because they do not have chlorophyll.
            <br>
            <br>
            With such a variety of cells that make up plants, the tissues in them, make the various types of plants that exist. In the Textbook of Plant Tissue Culture you can learn about plant tissue culture.

        </div>
    </div>
    </div>

<x-footer/>
@endsection
