@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/VGcT1-XaWgk">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            "Archaea are microorganisms that define the limits of life on Earth. They were originally discovered and described in extreme environments."
            <br>
            <br>
            - Viandra San
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/AB_3">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Archaea Structures
            </h1>
            <p class="desc-note mt-2">
            a. Chromosome
            <br>
            Chromosomes in archaebacteria are circular. Its function is to store genetic material, namely DNA that can be used for reproduction and for cell life.
            <br>
            <br>
            b. Ribosomes
            <br>
            Ribosomes are small organelles that are responsible for protein synthesis.
            <br>
            <br>
            c. Plasmid
            <br>
            Plasmids are almost the same as chromosomes that contain genetic material, but the plasmid chromosomes are separate from the main chromosome. This plasmid is located in the cytoplasm. Plasmids function in genetic engineering.
            <br>
            <br>
            d. Cytoplasm
            <br>
            Cytoplasm is a colorless liquid present in the cell, composed of air. proteins, carbohydrates, fats, mineral salts, ribosomes, nucleic acids and mineral salts. Its function is as a place for protein synthesis, food digestion, and other reactions regarding cell metabolism.
            <br>
            <br>
            e. Inclusion
            <br>
            Inclusion serves to store metabolic results.
            <br>
            <br>
            f. Cell wall
            <br>
            Archaebacteria cell walls are composed of polysaccharides and proteins, but do not have peptidoglycan. The difference between archaebacteria and eubacteria lies in the composition of their cell walls.
            <br>
            <br>
            g. Cell Membrane or Plasma Membrane
            <br>
            The function of the cell membrane is to protect as well as material transfer (regulate the entry and exit of substances). This cell membrane or plasma membrane is selectively semipermeable, that is, it can only transfer certain molecules or substances. The cell membrane is composed of phospholipids and proteins.
            <br>
            <br>
            h. Capsule
            <br>
            Maybe you are wondering, how come some bacteria have capsules and some don't. Do they include bacteria? Yep, not all bacteria have capsules. Bacteria that have capsules are pathogenic or disease-causing bacteria. It serves to prevent phagocytosis as a form of self-defense. This capsule is made of polysaccharides and water which can help archaebacteria to attach to surfaces or other bacteria.
            <br>
            <br>
            i. Flagella
            <br>
            Flagella are the same as capsules, not all have flagella. Usually, this flagellum is also referred to as vibrating hair which functions as a means of locomotion. Besides flagella, there are also bacteria that have pili. Its function is to transfer DNA from one bacterium to another during conjugation.
            <br>
            <br>
        </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/bacteria_cell_drawing.jpg" class="w-75" " alt="" srcset="">
                <br>
                <br>
            </div>

            <h4 class="subtitle-note mt-3 mb-2"> Bacteria
            </h4>
            <p class="desc-note mt-2">
            Bacteria are living things that belong to the kingdom Monera. Its general characteristics are having 1 cell (unicellular), not having a membrane on the cell nucleus (prokaryotes), and can be observed with a light microscope. This time, we will study true bacteria, namely eubacteria.
            <br>
            <br>
            In contrast to archaebacteria, which also belong to the kingdom Monera, eubacteria have peptidoglycan in their cell walls. In eubacteria there are also cyanobacteria, namely blue-green algae that can photosynthesize. But what do bacteria actually look like? And how did bacteria survive as unicellular organisms? Well, in this article, we will discuss the structure and functions of the body parts of bacteria.
            <br>
            <br>
            If we look at the picture above, we can divide the structure of bacteria into two, namely the outer structure and the inner structure. The outer structure consists of a cell wall, capsule, cell membrane, flagella, and pili. Meanwhile, the inner structure consists of cytoplasm, nucleoid, ribosome, and plasmid.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
