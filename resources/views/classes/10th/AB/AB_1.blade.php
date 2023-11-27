@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/73c1RIqi0uw">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            "Archaea and bacteria are generally similar in size and shape."
            <br>
            <br>
            - Selfie Sofya
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/AB_2">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Difference Between Archaea and Bacteria
            </h1>
            <p class="desc-note mt-2">
                In the past, archaea were classified as bacteria and were called archaebacteria. But it was discovered that archaea have a distinct evolutionary history and biochemistry compared with bacteria.
            <br>
                The similarities are that archaea and eubacteria are prokaryotes — single-celled organisms that do not have a nucleus or organelles.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/20211005_114226Perbedaan_Archaebacteria_dan_Eubacteria.jpg" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">History of Phylogenetic Classification
            </h4>
            <p class="desc-note mt-2">
                Until the middle of the 20th century, biologists classified all living things as either a plant or an animal. But this system failed to accommodate fungi, protists and bacteria. So by the 1970s, the classification system evolved to what was known as Five Kingdoms — prokaryotes (bacteria) and eukaryotes (plants, animals, fungi, protists). Eukaryotes are characterized by the presence of nuclei, cytoskeletons, and internal membranes in their cells.
                <br>
                In the late 1970s, Dr. Carl Woese and his colleagues at the University of Illinois identified a group of microorganisms whose genetic makeup was vastly different from other bacteria. So they divided prokaryotic life into what they called archaeabacteria and eubacteria. However, they later concluded that "archaeabacteria" were sufficiently different as to not be bacteria at all. So the groups were renamed to archaea and bacteria.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Size and shape
            </h4>
            <p class="desc-note mt-2">
                Both archaea and eubacteria are similar in shape and size. They are both found occurring as rods, cocci, spirals, plates, or coiled.
	        </p>
            <h4 class="subtitle-note mt-3 mb-2">Difference in Cell structure
            </h4>
            <p class="desc-note mt-2">
                The general cell structure of archaea and bacteria are the same but composition and organization of some structures differ in archaea. Similar to bacteria, archaea do not have interior membranes but both have a cell wall and use flagella to swim.
                <br>
                Archaea differ in the fact that their cell wall does not contain peptidoglycan and cell membrane uses ether linked lipids as opposed to ester linked lipids in bacteria.
	        </p>
            <h4 class="subtitle-note mt-3 mb-2">Flagella
            </h4>
            <p class="desc-note mt-2">
                Archaea flagella evolved from bacterial type IV pili while bacterial flagella evolved from type III secretion system. Bacterial flagellum is like a stalk which is hollow and is assembled by subunits that are free to move up the central pore adding on to tip of flagella while in archaea flagella subunits are added on to the base.
	        </p>
            <h4 class="subtitle-note mt-3 mb-2">Reproduction and growth
            </h4>
            <p class="desc-note mt-2">
                Archaea reproduce asexually by the process of binary fission, budding and fragmentation. Eubacteria reproduce asexually through binary fission, budding, fragmentation, but eubacteria have the unique ability to form spores to remain dormant over years, a trait that is not exhibited by Archaea. Bacteria growth follows in three phases, the lag phase when cells adapt to new environment, log phase marking exponential growth and stationary phase when nutrients get depleted.
	        </p>
            <h4 class="subtitle-note mt-3 mb-2">Habitat
            </h4>
            <p class="desc-note mt-2">
                Archaea can survive in extreme and harsh environments like hot springs, salt lakes, marshlands, oceans, gut of ruminants and humans. Eubacteria are ubiquitous and are found in soil, hot springs, radioactive waste water, Earth's crust, organic matter, bodies of plants and animals etc.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
