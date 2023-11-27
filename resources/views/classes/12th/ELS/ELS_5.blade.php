@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/1gECf2UlexA">
        </iframe>
        {{-- <video controls style="width: 500px" poster="asset/img/thumbnail.png" class="vid mt-5">
            <source src="https://drive.google.com/uc?export=download&id=1llst4BwWwbYwuIr12pdCGO46VZl7Hl7v" type='video/mp4'>
        </video> --}}
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            An amphibolic pathway can be described as the biochemical pathway where both the processes.
            <br>
            <br>
            - Vedantu
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/ELS_6">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Amphibolic Pathway
            </h1>
            <p class="desc-note mt-2">
                An amphibolic pathway can be described as the biochemical pathway where both the processes- anabolic and catabolic are involved. In order to produce the energy molecule ATP, in the process of respiration, the complex compounds break down into simple ones. The pathway is known as the catabolic pathway and this whole process is known as the catabolic process.
                <br>
                <br>
                Proteins or fatty acids break down into acetyl-CoA when in the process of respiration energy is required and this process is known as catabolism. Whenever in the process of respiration, fatty acids or proteins are required, the respiratory pathway is blocked and the same acetyl CoA is utilized in order to manufacture fatty acids and this synthesis process is known as anabolism. Therefore, both the processes, catabolism & anabolism, in respiration are required.
                <br>
                <br>
                The classic example of the amphibolic pathway is Kreb’s cycle. Let us have a look at what actually is Kreb’s cycle.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/ELS5.png" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Discuss how a Respiratory Pathway is an Amphibolic Pathway
            </h4>
            <p class="desc-note mt-2">
                In the respiration process, all the complex compounds like protein and fat break down into simpler forms and produce ATP, the fundamental energy molecule of the body. Both these compounds break down into acetyl-CoA, and the respiration process continues. This part of the respiration is termed as catabolism, and the pathway is a catabolic pathway.
                <br>
                <br>
                However, respiration not only includes breaking but also forms compounds. When an organism needs protein or fatty acid, the respiratory pathway holds the process, and the produced acetyl-CoA is used to create fatty acids. Hence, this synthesis of fatty acids is an example of anabolism.
                <br>
                <br>
                So, from the above discussion, it can be derived that respiration is a sum of both anabolism and catabolism. That concludes that the respiratory pathway is an anabolic pathway.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Kreb’s Cycle
            </h4>
            <p class="desc-note mt-2">
                The central driver of cellular respiration is the citric acid cycle or the tricarboxylic acid or Kreb’s cycle. This cycle is considered the main source of energy for cells and it is also a necessary part of aerobic respiration. Acetyl-CoA which is derived from glucose and production by the oxidation of pyruvate is taken as the starting material and when it is there in the series of redox reactions most of its bond energy is harvested in the form of NADH and FADH₂ and ATP molecules. NADH and FADH₂ are generated in the TCA cycle and are the reduced electrons carriers, pass their electrons through oxidative phosphorylation into the electron transport chain and most of the ATP which is produced in the cellular respiration will be generated.
	        </p>
            <h4 class="subtitle-note mt-3 mb-2">Process of Kreb’s Cycle
            </h4>
            <p class="desc-note mt-2">
                Kreb’s cycle in the case of eukaryotes takes place in the matrix of the mitochondria which is similar to the conversion of pyruvate into acetyl-CoA while in the case of prokaryotes all these processes take place in the cytoplasm. Kreb’s cycle as the name suggests is a closed-loop in which the molecule used in the first step is again reformed by the last part of the pathway.
                <br>
                <br>
                Acetyl-CoA is combined with oxaloacetate which is a 4-carbon acceptor molecule in the first step in order to form citrate which is a 6-carbon molecule.
                <br>
                <br>
                Then, two carbons are released from citrate, a 6-carbon molecule, as carbon dioxide molecules, producing an NADH molecule each time in a similar pair of reactions.
                <br>
                <br>
                The key regulators of Kreb’s cycle are the enzymes that catalyze these reactions. These enzymes speed up or low down the reactions on the basis of the energy needs of the cell.
                <br>
                <br>
                Then, the remaining 4 molecules of citrate undergo a series of additional reactions. An ATP molecule is made first or a similar molecule GTP in some cells. Then the electron carrier FAD is reduced to FADH₂. Then, finally, another NADH is generated.
                <br>
                <br>
                In this set of reactions the starting molecule oxaloacetate is regenerated in order for the repetition of the cycle.
                <br>
                <br>
                In a single turn of the Kreb’s Cycle molecules of carbon dioxide are released producing 3 NADH, one FADH₂, and one ATP or GTP.
                <br>
                <br>
                Since there are two pyruvates the Kreb’s cycle goes around twice for each molecule of glucose that has entered the cellular respiration and hence two acetyl CoAs are made per glucose.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
