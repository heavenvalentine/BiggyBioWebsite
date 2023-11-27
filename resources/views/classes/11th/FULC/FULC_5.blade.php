@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/t5DvF5OVr1Y">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            A cell consists of three parts: the cell membrane, the nucleus, and, between the two, the cytoplasm.
            <br>
            <br>
            - Audrina Axton
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/FULC_6">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Cell Structure
            </h1>
            <p class="desc-note mt-2">
                deas about cell structure have changed considerably over the years. Early biologists saw cells as simple membranous sacs containing fluid and a few floating particles. Today's biologists know that cells are infinitely more complex than this.
                <br><br>
                There are many different types, sizes, and shapes of cells in the body. For descriptive purposes, the concept of a "generalized cell" is introduced. It includes features from all cell types. A cell consists of three parts: the cell membrane, the nucleus, and, between the two, the cytoplasm. Within the cytoplasm lie intricate arrangements of fine fibers and hundreds or even thousands of miniscule but distinct structures called organelles.
                <br><br>
                Every cell in the body is enclosed by a cell (Plasma) membrane. The cell membrane separates the material outside the cell, extracellular, from the material inside the cell, intracellular. It maintains the integrity of a cell and controls passage of materials into and out of the cell. All materials within a cell must have access to the cell membrane (the cell's boundary) for the needed exchange.
                <br><br>
                The cell membrane is a double layer of phospholipid molecules. Proteins in the cell membrane provide structural support, form channels for passage of materials, act as receptor sites, function as carrier molecules, and provide identification markers.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/struc.png" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Nucleus and Nucleolus
            </h4>
            <p class="desc-note mt-2">
                The nucleus, formed by a nuclear membrane around a fluid nucleoplasm, is the control center of the cell. Threads of chromatin in the nucleus contain deoxyribonucleic acid (DNA), the genetic material of the cell. The nucleolus is a dense region of ribonucleic acid (RNA) in the nucleus and is the site of ribosome formation. The nucleus determines how the cell will function, as well as the basic structure of that cell.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Cytoplasm
            </h4>
            <p class="desc-note mt-2">

                The cytoplasm is the gel-like fluid inside the cell. It is the medium for chemical reaction. It provides a platform upon which other organelles can operate within the cell. All of the functions for cell expansion, growth and replication are carried out in the cytoplasm of a cell. Within the cytoplasm, materials move by diffusion, a physical process that can work only for short distances.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Cytoplasmic organelles
            </h4>
            <p class="desc-note mt-2">

                Cytoplasmic organelles are "little organs" that are suspended in the cytoplasm of the cell. Each type of organelle has a definite structure and a specific role in the function of the cell. Examples of cytoplasmic organelles are mitochondrion, ribosomes, endoplasmic reticulum, golgi apparatus, and lysosomes.
	        </p>

        </div>
    </div>
    </div>

<x-footer/>
@endsection
