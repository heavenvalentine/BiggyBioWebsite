@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/Qqe4thU-os8">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            DNA synthesis is the natural or artificial creation of deoxyribonucleic acid (DNA) molecules.
            <br>
            <br>
            - Galvin Gamon
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/A_5">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> DNA synthesis
            </h1>
            <p class="desc-note mt-2">
                DNA synthesis is the process of synthesizing new DNA molecules. DNA synthesis occurs during DNA replication, which is the process by which cells copy their DNA in preparation for cell division. DNA synthesis is also important in the process of gene expression, which is the process by which the information contained in DNA is used to synthesize proteins and other biomolecules.
                <br><br>
                During DNA synthesis, the DNA molecule is replicated in a semi-conservative manner, meaning that each new DNA molecule consists of one original strand of DNA and one newly synthesized strand. The synthesis of the new strand is directed by the original strand, using the base pairing rules of A with T and C with G.
                <br><br>
                DNA synthesis occurs in several steps:
                <ul>
                <li>Initiation: In this step, an enzyme called helicase unwinds the double helix of the DNA molecule, separating the two strands.</li>

                <li>Primer synthesis: In this step, an enzyme called primase synthesizes short RNA primers, which serve as starting points for DNA synthesis.</li>

                <li>Synthesis of the new strand: In this step, an enzyme called DNA polymerase synthesizes the new DNA strand by adding nucleotides to the growing chain, using the original strand as a template. DNA polymerase adds nucleotides to the 3' end of the growing chain and reads the template strand from the 5' end to the 3' end.</li>

                <li>Elongation: In this step, DNA polymerase continues to add nucleotides to the growing chain, synthesizing the new DNA strand.</li>

                <li>Termination: In this final step, the synthesis of the new DNA strand is terminated when the polymerase reaches the end of the template strand.</li>
                </ul>
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/dna.jpg" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">DNA Structure
            </h4>
            <p class="desc-note mt-2">
                DNA or deoxyribonucleic acid is a type of molecule known as a nucleic acid. It consists of a 5-carbon deoxyribose sugar, a phosphate, and a nitrogenous base. Double-stranded DNA consists of two spiral nucleic acid chains that are twisted into a double helix shape. This twisting allows DNA to be more compact. In order to fit within the nucleus, DNA is packed into tightly coiled structures called chromatin. Chromatin condenses to form chromosomes during cell division. Prior to DNA replication, the chromatin loosens giving cell replication machinery access to the DNA strands.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Preparation for Replication
            </h4>

            <h4 class="subtitle-note mt-3 mb-2"> Replication Fork Formation
            </h4>
            <p class="desc-note mt-2">

                Before DNA can be replicated, the double stranded molecule must be “unzipped” into two single strands. DNA has four bases called adenine (A), thymine (T), cytosine (C) and guanine (G) that form pairs between the two strands. Adenine only pairs with thymine and cytosine only binds with guanine. In order to unwind DNA, these interactions between base pairs must be broken. This is performed by an enzyme known as DNA helicase. DNA helicase disrupts the hydrogen bonding between base pairs to separate the strands into a Y shape known as the replication fork. This area will be the template for replication to begin.
                <br><br>
                DNA is directional in both strands, signified by a 5' and 3' end. This notation signifies which side group is attached the DNA backbone. The 5' end has a phosphate (P) group attached, while the 3' end has a hydroxyl (OH) group attached. This directionality is important for replication as it only progresses in the 5' to 3' direction. However, the replication fork is bi-directional; one strand is oriented in the 3' to 5' direction (leading strand) while the other is oriented 5' to 3' (lagging strand). The two sides are therefore replicated with two different processes to accommodate the directional difference.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2"> Step 2: Primer Binding
            </h4>
            <p class="desc-note mt-2">

                The leading strand is the simplest to replicate. Once the DNA strands have been separated, a short piece of RNA called a primer binds to the 3' end of the strand. The primer always binds as the starting point for replication. Primers are generated by the enzyme DNA primase.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Step 3: Elongation
            </h4>
            <p class="desc-note mt-2">

                Enzymes known as DNA polymerases are responsible creating the new strand by a process called elongation. There are five different known types of DNA polymerases in bacteria and human cells. In bacteria such as E. coli, polymerase III is the main replication enzyme, while polymerase I, II, IV and V are responsible for error checking and repair. DNA polymerase III binds to the strand at the site of the primer and begins adding new base pairs complementary to the strand during replication. In eukaryotic cells, polymerases alpha, delta, and epsilon are the primary polymerases involved in DNA replication. Because replication proceeds in the 5' to 3' direction on the leading strand, the newly formed strand is continuous.
                <br><br>
                The lagging strand begins replication by binding with multiple primers. Each primer is only several bases apart. DNA polymerase then adds pieces of DNA, called Okazaki fragments, to the strand between primers. This process of replication is discontinuous as the newly created fragments are disjointed.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Step 4: Termination
            </h4>
            <p class="desc-note mt-2">

                Once both the continuous and discontinuous strands are formed, an enzyme called exonuclease removes all RNA primers from the original strands. These primers are then replaced with appropriate bases. Another exonuclease “proofreads” the newly formed DNA to check, remove and replace any errors. Another enzyme called DNA ligase joins Okazaki fragments together forming a single unified strand. The ends of the linear DNA present a problem as DNA polymerase can only add nucleotides in the 5′ to 3′ direction. The ends of the parent strands consist of repeated DNA sequences called telomeres. Telomeres act as protective caps at the end of chromosomes to prevent nearby chromosomes from fusing. A special type of DNA polymerase enzyme called telomerase catalyzes the synthesis of telomere sequences at the ends of the DNA. Once completed, the parent strand and its complementary DNA strand coils into the familiar double helix shape. In the end, replication produces two DNA molecules, each with one strand from the parent molecule and one new strand.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
