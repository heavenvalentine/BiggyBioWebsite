@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/qgVFkRn8f10">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Enzymes are a linear chain of amino acids, which give rise to a three-dimensional structure.
            <br>
            <br>
            - Corvin Chelsea
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/E_3">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Enzyme Structure
            </h1>
            <p class="desc-note mt-2">
                Enzymes are a linear chain of amino acids, which give rise to a three-dimensional structure. The sequence of amino acids specifies the structure, which in turn identifies the catalytic activity of the enzyme. Upon heating, the enzyme’s structure denatures, resulting in a loss of enzyme activity, which typically is associated with temperature.
                <br><br>
                Compared to its substrates, enzymes are typically large with varying sizes, ranging from 62 amino acid residues to an average of 2500 residues found in fatty acid synthase. Only a small section of the structure is involved in catalysis and is situated next to the binding sites. The catalytic site and binding site together constitute the enzyme’s active site. A small number of ribozymes exist which serve as an RNA-based biological catalyst. It reacts in complex with proteins.
                <br><br>
                Earlier, enzymes were assigned names based on the one who discovered them. With further research, classification became more comprehensive.
                <br><br>
                According to the International Union of Biochemists (I U B), enzymes are divided into six functional classes and are classified based on the type of reaction in which they are used to catalyze. The six kinds of enzymes are hydrolases, oxidoreductases, lyases, transferases, ligases and isomerases.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/enz.jfif" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Oxidoreductases
            </h4>
            <p class="desc-note mt-2">
                These catalyze oxidation and reduction reactions, e.g. pyruvate dehydrogenase, catalysing the oxidation of pyruvate to acetyl coenzyme A.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Transferases
            </h4>
            <p class="desc-note mt-2">
            These catalyze transferring of the chemical group from one to another compound. An example is a transaminase, which transfers an amino group from one molecule to another.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Hydrolases
            </h4>
            <p class="desc-note mt-2">
            They catalyze the hydrolysis of a bond. For example, the enzyme pepsin hydrolyzes peptide bonds in proteins.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Lyases
            </h4>
            <p class="desc-note mt-2">
                These catalyze the breakage of bonds without catalysis, e.g. aldolase (an enzyme in glycolysis) catalyzes the splitting of fructose-1, 6-bisphosphate to glyceraldehyde-3-phosphate and dihydroxyacetone phosphate.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Isomerases
            </h4>
            <p class="desc-note mt-2">
                They catalyze the formation of an isomer of a compound. Example: phosphoglucomutase catalyzes the conversion of glucose-1-phosphate to glucose-6-phosphate (phosphate group is transferred from one to another position in the same compound) in glycogenolysis (glycogen is converted to glucose for energy to be released quickly).


	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Ligases
            </h4>
            <p class="desc-note mt-2">
                Ligases catalyze the association of two molecules. For example, DNA ligase catalyzes the joining of two fragments of DNA by forming a phosphodiester bond.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Cofactors
            </h4>
            <p class="desc-note mt-2">
                Cofactors are non-proteinous substances that associate with enzymes. A cofactor is essential for the functioning of an enzyme. An enzyme without a cofactor is called an apoenzyme. An enzyme and its cofactor together constitute the holoenzyme.
                <br><br>
                There are three kinds of cofactors present in enzymes:
                <ul>
                <li>Prosthetic groups: These are cofactors tightly bound to an enzyme at all times. FAD (flavin adenine dinucleotide) is a prosthetic group present in many enzymes.</li>
                <li>Coenzyme: A coenzyme binds to an enzyme only during catalysis. At all other times, it is detached from the enzyme. NAD+ is a common coenzyme.</li>
                <li>Metal ions: For the catalysis of certain enzymes, a metal ion is required at the active site to form coordinate bonds. Zn2+ is a metal ion cofactor used by a number of enzymes.</li>
                </ul>
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
