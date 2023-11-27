@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/192M4oDLTdc">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            A cell type is a classification used to identify cells that share morphological or phenotypical features.
            <br>
            <br>
            - Wikipedia
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/FULC_5">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Types Of Cells
            </h1>
            <p class="desc-note mt-2">
                cell, In biology, the basic unit of which all living things are composed; the smallest structural unit of living matter that is able to function independently. A single cell can be a complete organism in itself, as in bacteria and protozoans. Groups of specialized cells are organized into tissues and organs in multicellular organisms such as higher plants and animals. There are two distinct types of cells: prokaryotic cells and eukaryotic cells. Though the structures of prokaryotic and eukaryotic cells differ (see prokaryote, eukaryote), their molecular compositions and activities are very similar. The chief molecules in cells are nucleic acids, proteins, and polysaccharides. A cell is bounded by a membrane that enables it to exchange certain materials with its surroundings. In plant cells, a rigid cell wall encloses this membrane.
                <br><br>
                A cell is a mass of cytoplasm that is bound externally by a cell membrane. Usually microscopic in size, cells are the smallest structural units of living matter and compose all living things. Most cells have one or more nuclei and other organelles that carry out a variety of tasks. Some single cells are complete organisms, such as a bacterium or yeast. Others are specialized building blocks of multicellular organisms, such as plants and animals.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/tipe.png" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">What is cell theory?
            </h4>
            <p class="desc-note mt-2">
                Cell theory states that the cell is the fundamental structural and functional unit of living matter. In 1839 German physiologist Theodor Schwann and German botanist Matthias Schleiden promulgated that cells are the “elementary particles of organisms” in both plants and animals and recognized that some organisms are unicellular and others multicellular. This theory marked a great conceptual advance in biology and resulted in renewed attention to the living processes that go on in cells.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Inside the cell
            </h4>
            <p class="desc-note mt-2">
                Experts estimate that there are around 200Trusted Source cell types in the human body.
                <br><br>
                Cell types can look different, and carry out distinct roles within the body.
                <br><br>
                For instance, a sperm cell resembles a tadpole, a female egg cell is spherical, and nerve cells are essentially thin tubes.
                <br><br>
                Despite their differences, cells often share certain structures. These are known as organelles or mini-organs. Below are some of the most important: <br>
                The nucleus represents the cell’s headquarters. There is typically one nucleus per cell. However, this is not always the case. Skeletal muscle cells, for instance, have two.
                <br><br>
                The nucleus contains the majority of the cell’s DNA, and the mitochondria house a small amount. The nucleus sends out messages to tell the cell to grow, divide, or die.
                <br><br>
                A membrane called the nuclear envelope separates the nucleus from the rest of the cell. Nuclear pores within the membrane allow small molecules and ions to cross back and forth, while larger molecules need to transport proteins to help them through.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
