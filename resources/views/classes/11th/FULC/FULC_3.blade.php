@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/Pxujitlv8wc">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            The cell membrane is made up of phospholipid bilayer and proteins. It is a living semi-permeable membrane.
            <br>
            <br>
            - Bion Soan
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/FULC_4">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Characteristics of cells
            </h1>
            <p class="desc-note mt-2">
                Cells are the basic unit of life in all organisms. They are the smallest unit that can perform all the functions necessary for life, such as growth, metabolism, and reproduction.
                <br><br>
                There are two main types of cells: prokaryotic cells and eukaryotic cells. Prokaryotic cells are smaller and simpler than eukaryotic cells, and they lack a true nucleus and other membrane-bound organelles. Eukaryotic cells are larger and more complex, and they have a true nucleus and membrane-bound organelles.
                <br><br>
                All cells have several characteristics in common, including:
                <br><br>
                Plasma membrane: The plasma membrane is a thin, flexible barrier that surrounds the cell and separates the inside from the outside. It is made up of lipids and proteins and is selectively permeable, allowing certain substances to pass in and out of the cell while keeping others out.
                <br><br>
                Cytoplasm: The cytoplasm is the semi-fluid substance that fills the cell and surrounds the cell organelles. It is composed of water, dissolved ions and molecules, and various enzymes and proteins.
                <br><br>
                Genetic material: All cells contain genetic material, which is the instructions for building and maintaining the cell. In prokaryotic cells, this is typically a single circular chromosome, while in eukaryotic cells, it is typically multiple linear chromosomes contained within the nucleus.
                <br><br>
                Metabolic activities: Cells are capable of carrying out a wide range of chemical reactions, including synthesis, degradation, and exchange of molecules with their environment. These reactions are necessary for the cell to maintain its function and survival.
                <br><br>
                Responsiveness: Cells are able to respond to stimuli in their environment, such as changes in temperature, light, or chemical signals. This allows cells to communicate with each other and coordinate their activities.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/char.jfif" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Cell Organelles
            </h4>
            <p class="desc-note mt-2">
                The cellular components are also known as cell organelles. These cell organelles include both membrane and non-membrane bound organelles that are present within the cells and are distinct in their structures and functions. They can coordinate and function efficiently for the normal functioning of the particular cell. A few of these cells can function by providing the shape and support, whereas some of them are involved in the locomotion and reproduction of a cell. There are various organelles that are present within the cell and these are classified into three categories depending on the presence or absence of the membrane.
                <br><br>
                Organelles without Membrane: Cell wall, Ribosomes, and Cytoskeleton. These are found in both prokaryotic and eukaryotic cells.
                <br><br>
                Single Membrane-bound Organelles: Vacuole, Golgi Apparatus, Lysosome, Endoplasmic Reticulum. These are found in the eukaryotic cells.
                <br><br>
                Double Membrane-bound Organelles: Nucleus, mitochondria, and chloroplast. These are found in the eukaryotic cells.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Endoplasmic Reticulum:
            </h4>
            <p class="desc-note mt-2">
                Endoplasmic Reticulum: The Endoplasmic Reticulum is a cell organelle that consists of a network of membranous canals that are filled with fluid. They are the transport system of the cells that are involved in transporting materials throughout the cell.
                <br><br>
                There are two different types of Endoplasmic Reticulum:
                <br><br>
                Rough Endoplasmic Reticulum: These are composed of cisternae, tubules, and vesicles. These are found throughout the cell and thus these are involved in the manufacture of protein.
                <br><br>
                Smooth Endoplasmic Reticulum: These are the storage organelles that are associated with the production of the lipids and steroids and also these are responsible for detoxifying the cell.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
