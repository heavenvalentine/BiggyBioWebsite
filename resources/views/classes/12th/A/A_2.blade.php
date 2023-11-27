@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/SNVSKzPc4Hg">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            There are three basic stages of anabolism. Stage 1 involves production of precursors such as amino acids, monosaccharides, isoprenoids and nucleotides.
            <br>
            <br>
            - Imam Ibrahna
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/A_3">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Stage Of Anabolism
            </h1>
            <p class="desc-note mt-2">
                Anabolism is the metabolic process that involves the synthesis of complex biomolecules from simpler precursors. Anabolism is typically fueled by the energy stored in ATP (adenosine triphosphate) molecules, which are produced through the process of catabolism.
                <br><br>
                There are several stages involved in anabolism:
                <ul>
                <li>Preparatory stage: This is the initial stage of anabolism, in which the necessary precursors and enzymes are assembled and activated.</li>

                <li>Synthesis stage: In this stage, the precursors are combined to form the desired biomolecule. This may involve the addition of functional groups, the condensation of smaller molecules, or the incorporation of cofactors.</li>

                <li>Modification stage: In this stage, the newly synthesized biomolecule is modified to give it the desired properties. This may involve the addition of chemical groups, the removal of certain amino acids, or the rearrangement of the molecule's structure.</li>

                <li>Transport stage: In this stage, the biomolecule is transported to its final destination within the cell or organism.</li>

                <li>Storage stage: In this final stage, the biomolecule is stored until it is needed for a specific function.</li>
                </ul>
                Anabolism is an essential process in all living organisms, as it allows cells to build the molecules they need to function and grow. However, anabolism also requires energy, and cells must balance their energy needs with the energy they have available to ensure they have enough energy to sustain their functions.

            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/stage.jfif" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Stages of anabolism
            </h4>
            <p class="desc-note mt-2">
                There are three basic stages of anabolism.
                <br><br>
                Stage 1 production of precursors such as amino acids, monosaccharides and nucleotides.
                <br><br>
                Stage 2 use energy from ATP to turn the precursors into reactive form.
                <br><br>
                Stage 3 the assembly of these activated precursors into complex molecules such as proteins, polysaccharides, lipids and nucleic acids.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Examples of Biochemical Anabolic Reactions
            </h4>
            <p class="desc-note mt-2">
                1) Polysaccharides: Polysaccharides serve as an example of anabolism because polysacchrides are derived from their subunits of simple monosaccharides. A simple example is the formation of glycogen. Glygocen is a polysaccharide that is composed of subunit glucose monosacchrides connected by glycosidic bonds.
                <br><br>
                2) Polypeptides: Polypeptides serve as an example of anabolism because polypeptides are derived from their subunits of simple peptides. Polypeptides such as hemoglobin are composed of four different proteins (essentially peptides) that come together and form a completely different protein. Peptides them selves are a result of anabolic reactions themselves due to the condensation reactions that simple amino acids go through to combine and thus form peptide chains.
                <br><br>
                3) Carbon Fixation: Carbon fixation is another example of anabolism because in photosynthetic organisms such as plants, cyanobacteria, algae and other photoautotrophic organisms fixate carbon dioxide into glycerate 3-phosphate which is then further converted into glucose. Beginning with photosynthesis, synthesis of carbohydrates from sunlight and carbon dioxide. This process uses ATP and NADPH produced by the photosynthetic reactions to convert CO2 into glycerate 3-phosphate. This shows anabolism because from a smaller simpler subunit of carbon dioxide, glycerate 3-phosphate is produced, a much larger and complex biochemical compound.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
