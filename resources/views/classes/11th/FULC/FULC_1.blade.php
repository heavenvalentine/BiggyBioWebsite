@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/URUJD5NEXC8">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            The smallest unit that can live on its own and that makes up all living organisms and the tissues of the body.
            <br>
            <br>
            - George Bugs
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/FULC_2">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5">Cells
            </h1>
            <p class="desc-note mt-2">
                Cells are the basic, fundamental unit of life. So, if we were to break apart an organism to the cellular level, the smallest independent component that we would find would be the cell.
                <br><br>
                Explore the cell notes to know what is a cell, cell definition, cell structure, types and functions of cells. These notes have an in-depth description of all the concepts related to cells.
                <br><br>
                Cells are the structural, functional, and biological units of all living beings. A cell can replicate itself independently. Hence, they are known as the building blocks of life.
                <br><br>
                Each cell contains a fluid called the cytoplasm, which is enclosed by a membrane. Also present in the cytoplasm are several biomolecules like proteins, nucleic acids and lipids. Moreover, cellular structures called cell organelles are suspended in the cytoplasm.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/cells.png" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Discovery of Cells
            </h4>
            <p class="desc-note mt-2">
                Discovery of cells is one of the remarkable advancements in the field of science. It helps us know that all the organisms are made up of cells, and these cells help in carrying out various life processes. The structure and functions of cells helped us to understand life in a better way.
                <br><br>
                Who discovered cells?<br>
                Robert Hooke discovered the cell in 1665. Robert Hooke observed a piece of bottle cork under a compound microscope and noticed minuscule structures that reminded him of small rooms. Consequently, he named these “rooms” as cells. However, his compound microscope had limited magnification, and hence, he could not see any details in the structure. Owing to this limitation, Hooke concluded that these were non-living entities.
                <br><br>
                Later Anton Van Leeuwenhoek observed cells under another compound microscope with higher magnification. This time, he had noted that the cells exhibited some form of movement (motility). As a result, Leeuwenhoek concluded that these microscopic entities were “alive.” Eventually, after a host of other observations, these entities were named as animalcules.
                <br><br>
                In 1883, Robert Brown, a Scottish botanist, provided the very first insights into the cell structure. He was able to describe the nucleus present in the cells of orchids.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Characteristics of Cells
            </h4>
            <p class="desc-note mt-2">
                Following are the various essential characteristics of cells:
                <br><br>
                Cells provide structure and support to the body of an organism.
                The cell interior is organised into different individual organelles surrounded by a separate membrane.
                The nucleus (major organelle) holds genetic information necessary for reproduction and cell growth.
                Every cell has one nucleus and membrane-bound organelles in the cytoplasm.
                Mitochondria, a double membrane-bound organelle is mainly responsible for the energy transactions vital for the survival of the cell.
                Lysosomes digest unwanted materials in the cell.
                Endoplasmic reticulum plays a significant role in the internal organisation of the cell by synthesising selective molecules and processing, directing and sorting them to their appropriate locations.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
