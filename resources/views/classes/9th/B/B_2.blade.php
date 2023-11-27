@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/5ffl-0OYVQU">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Recombinant DNA technology is the joining together of DNA molecules from two different species. The recombined DNA molecule is inserted into a host organism to produce new genetic combinations that are of value to science, medicine, agriculture, and industry.
            <br>
            <br>
            - Crystal Light
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/B_3">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5">Recombinant DNA technology
            </h1>
            <p class="desc-note mt-2">
                Recombinant DNA technology involves using enzymes and various laboratory techniques to manipulate and isolate DNA segments of interest. This method can be used to combine (or splice) DNA from different species or to create genes with new functions. The resulting copies are often referred to as recombinant DNA. Such work typically involves propagating the recombinant DNA in a bacterial or yeast cell, whose cellular machinery copies the engineered DNA along with its own.
                <br><br>
                Recombinant DNA Technology. Recombinant DNA technology is an extremely important research tool in biology. It allows scientists to manipulate DNA fragments in order to study them in the lab. It involves using a variety of laboratory methods to put a piece of DNA into a bacterial or yeast cell. Once in, the bacteria or yeast will copy the DNA along with its own. Recombinant DNA technology has been successfully applied to make important proteins used in the treatment of human diseases, such as insulin and growth hormone.
                <br><br>
                The technology used for producing artificial DNA through the combination of different genetic materials (DNA) from different sources is referred to as Recombinant DNA Technology. Recombinant DNA technology is popularly known as genetic engineering.
                <br><br>
                The recombinant DNA technology emerged with the discovery of restriction enzymes in the year 1968 by Swiss microbiologist Werner Arber,

                Inserting the desired gene into the genome of the host is not as easy as it sounds. It involves the selection of the desired gene for administration into the host followed by a selection of the perfect vector with which the gene has to be integrated and recombinant DNA formed.

                Thus the recombinant DNA has to be introduced into the host. And at last, it has to be maintained in the host and carried forward to the offspring.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/B2.jpg" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Tools Of Recombinant DNA Technology
            </h4>
            <p class="desc-note mt-2">
                The enzymes which include the restriction enzymes help to cut, the polymerases- help to synthesize and the ligases- help to bind. The restriction enzymes used in recombinant DNA technology play a major role in determining the location at which the desired gene is inserted into the vector genome. They are two types, namely Endonucleases and Exonucleases.
                <br><br>
                The Endonucleases cut within the DNA strand whereas the Exonucleases remove the nucleotides from the ends of the strands. The restriction endonucleases are sequence-specific which are usually palindrome sequences and cut the DNA at specific points. They scrutinize the length of DNA and make the cut at the specific site called the restriction site. This gives rise to sticky ends in the sequence. The desired genes and the vectors are cut by the same restriction enzymes to obtain the complementary sticky notes, thus making the work of the ligases easy to bind the desired gene to the vector.
                <br><br>
                The vectors – help in carrying and integrating the desired gene. These form a very important part of the tools of recombinant DNA technology as they are the ultimate vehicles that carry forward the desired gene into the host organism. Plasmids and bacteriophages are the most common vectors in recombinant DNA technology that are used as they have a very high copy number. The vectors are made up of an origin of replication- This is a sequence of nucleotides from where the replication starts, a selectable marker – constitute genes which show resistance to certain antibiotics like ampicillin; and cloning sites – the sites recognized by the restriction enzymes where desired DNAs are inserted.
                <br><br>
                Host organism – into which the recombinant DNA is introduced. The host is the ultimate tool of recombinant DNA technology which takes in the vector engineered with the desired DNA with the help of the enzymes.
                <br><br>
                There are a number of ways in which these recombinant DNAs are inserted into the host, namely – microinjection, biolistics or gene gun, alternate cooling and heating, use of calcium ions, etc.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Process of Recombinant DNA Technology
            </h4>
            <p class="desc-note mt-2">

                The complete process of recombinant DNA technology includes multiple steps, maintained in a specific sequence to generate the desired product.
                <br><br>
                <ul>
                <li>Step-1. Isolation of Genetic Material.
                <br>
                The first and the initial step in Recombinant DNA technology is to isolate the desired DNA in its pure form i.e. free from other macromolecules.</li>
                <br>
                <li>Step-2.Cutting the gene at the recognition sites.

                The restriction enzymes play a major role in determining the location at which the desired gene is inserted into the vector genome. These reactions are called ‘restriction enzyme digestions’.</li>
                <br>
                <li>Step-3. Amplifying the gene copies through Polymerase chain reaction (PCR).

                It is a process to amplify a single copy of DNA into thousands to millions of copies once the proper gene of interest has been cut using restriction enzymes.</li>
                <br>
                <li>Step-4. Ligation of DNA Molecules.

                In this step of Ligation, the joining of the two pieces – a cut fragment of DNA and the vector together with the help of the enzyme DNA ligase.</li>
                <br>
                <li>Step-5. Insertion of Recombinant DNA Into Host.

                In this step, the recombinant DNA is introduced into a recipient host cell. This process is termed as Transformation. Once the recombinant DNA is inserted into the host cell, it gets multiplied and is expressed in the form of the manufactured protein under optimal conditions.</li>
                </ul>
                As mentioned in Tools of recombinant DNA technology, there are various ways in which this can be achieved. The effectively transformed cells/organisms carry forward the recombinant gene to the offspring.
                <br><br>

                <div class="desc-note mt-2 text-center">
                    <img src="asset/img/BB2.png" class="w-75" " alt="" srcset="">
                </div>

	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
