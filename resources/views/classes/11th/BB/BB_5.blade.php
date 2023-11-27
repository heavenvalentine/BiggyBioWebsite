@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/FgfknBZaVTI">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Biomolecule, also called biological molecule, any of numerous substances that are produced by cells and living organisms.
            <br>
            <br>
            - Caroll Dive
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/FULC_1">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5">Summary for Biology Biomolecules
            </h1>
            <p class="desc-note mt-2">
                Biomolecules are organic molecules that are essential for the functioning and regulation of living organisms. There are four major classes of biomolecules: carbohydrates, lipids, nucleic acids, and proteins.
                <br><br>
                Carbohydrates are composed of carbon, hydrogen, and oxygen atoms, and they serve as a primary source of energy for living organisms. They can be simple sugars, such as glucose and fructose, or more complex polysaccharides, such as starch and cellulose.
                <br><br>
                Lipids are a diverse group of molecules that are characterized by their solubility in nonpolar solvents, such as fats, oils, and waxes. They play important roles in energy storage, insulation, and cell membrane structure.
                <br><br>
                Nucleic acids are long polymers that store and transmit genetic information. There are two types of nucleic acids: DNA (deoxyribonucleic acid) and RNA (ribonucleic acid). DNA stores the genetic information that is used to direct the synthesis of proteins, while RNA carries out the instructions encoded in DNA and helps to translate that information into protein.
                <br><br>
                Proteins are complex molecules that are composed of amino acids and are essential for the structure, function, and regulation of cells and tissues. They play many diverse roles in the body, including catalyzing chemical reactions, building and repairing tissues, and transporting molecules within cells.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/bb5.webp" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Proteins
            </h4>
            <p class="desc-note mt-2">
                Proteins perform many vital functions in the living organisms. Proteins are present as enzymes (trypsin, lipases, amylase, etc.), hormones (Insulin), tissue fibres are made up of proteins (collagen, elastin, etc.). Some of the protein molecules take part in transportation (GLUT-4) across a membrane and also fight infection (antibodies).
                <br><br>
                RuBisCO (Ribulose bisphosphate carboxylase oxygenase), the enzyme in carbon fixation, is the most abundant protein present in the biosphere. Collagen is the most abundant protein present in animals.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Carbohydrates or Polysaccharides
            </h4>
            <p class="desc-note mt-2">
                Carbohydrates are polymers of monosaccharides or simple sugars. They are the main energy source of plants and animal cells. They have a general formula of [Cx(H2O)y]n.
                <br><br>
                Reducing sugars- All monosaccharides are reducing sugar. Some disaccharides are reducing, e.g. lactose, maltose, etc. They act as a reducing agent and reduce Tollen’s, Fehling or Benedict’s reagents. They have free aldehyde or ketone group (in a cyclic form hemiacetal or hemiketal group)
                <br><br>
                Non-reducing sugars- Sucrose (a disaccharide) is non-reducing as both the carbonyl groups are involved in the glycosidic bond formation. All the polysaccharides (cellulose, starch) are non-reducing
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
