@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/cj8dDTHGJBY">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Scientific theories are well-substantiated explanations of the natural world acquired.
            <br>
            <br>
            - Sonia Ariqah
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/LOLT_2">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> The Domains of Life
            </h1>
            <p class="desc-note mt-2">
                All cells have have few things in common. Cells are all bounded by a cell membrane, which consists of a phospholipid bilayer and embedded proteins. The cell membrane generates a regulated internal environment that allows the complex biochemistry for life to occur, within a gel-like fluid within the cell, known as a cytoplasm. All cells have DNA, which is a molecule that stores genetic information. The main functions of DNA are 1) to code for the production of proteins and 2) to replicate to allow cellular reproduction. According to the central dogma of molecular biology, DNA is the storage molecule that codes for the production of proteins. However, DNA does not code for proteins directly. Rather, DNA (a nucleic acid) produces a genetic message in RNA (a nucleic acid), which codes for the production of a protein at a ribosome. In other words, DNA synthesizes RNA, and RNA codes for the production of proteins. Therefore, all cells are bound by a cell membrane, which encases DNA which codes for the production of ribosomes (make up of RNA and proteins) and proteins. One fascinating discovery scientists have made is that all organisms on earth follow the same code. What does this mean? If you have an exact copy of a segment of DNA in different organisms, it will produce exactly the same protein. This is how genetic engineering is accomplished, a gene (a segment of DNA that codes for a specific mRNA molecule) from one organism can be inserted into a different organism, and once the gene is activate the genetically modified organism will produce exactly the same protein. The fact that all organism share the same code is a very strong indicator that all organisms on earth share a single, common ancestor. Another piece of evidence that supports this is that DNA replication is virtually identical for all organisms.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/LOLT1.png" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Prokaryotes
            </h4>
            <p class="desc-note mt-2">
                Like all cells prokaryotes (Figure 2) are bounded by a cell membrane (or plasma membrane) containing the gel-like cytoplasm within, and have DNA that codes for the production of ribosomes and proteins. DNA in prokaryotes (Bacteria and Archaea) is not bound within a nucleus, while in eukaryotes DNA is bound within a nuclear envelope. In certain species of prokaryotes, the DNA is constrained within the cell, producing a structure which is visible under a microscope, known as a nucleoid. A nucleoid is not a true nucleus, in which DNA is constrained by a nuclear envelope. While prokaryotes have definitive structures they lack true organelles, defined by the presence of a phospholipid bilayer. Eukaryotes have true organelles. Bacteria do possess compartments of proteins not enclosed within a plasma membrane, thought to act similarly to primitive organelles.
                <br>
                <br>
                Prokaryotes are almost exclusively free-living, single-celled organisms. Some prokaryotes, such as cyanobacteria, can form large colonies. Such colonial bacteria have specialized proteins that allow the individual cells to connect with each. There are rare examples of bacteria that exhibit multicellular behavior during certain times of their life cycle, such as myxobacteria. When food sources are ample, these bacteria exist as unicellular organisms. As food supply decreases, myxobacteria swarm as colonies, as the individual cells attach to each other and move a singular unit. While the myxobacteria is swarming, they represent a colonial species, in which all the cells are similar in structure and function, yet connected. If the swarming colony of myxobacteria is unable to find a suitable food source, something very interesting happens. The swarming colony will halt its search and begin to form fruiting bodies. Within the fruiting bodies, some of the normal (vegetative, rod-shaped) cells change their structure into rounded, reproductive cells with extremely thick cell-walls, known as myxospores, which allows these cells to be more likely to survive until conditions become better. These reproductive cells are held atop the fruiting bodies by the carcasses of many of vegetative myxobacteria. At this point during its life cycle, myxobacteria exhibit very primitive multicellular behavior: the presence of different cell types. Certain eukaryotes, known as slime molds, have developed a very similar life cycle.
                <br>
                <br>
                The shape of DNA differs in prokaryotes and eukaryotes. In prokaryotes, DNA is a single, circular loop. In eukaryotes, DNA is organized into several linear chromosomes. In prokaryotes when proteins are required, a segment of DNA is transcribed into mRNA. As the mRNA is being transcribed, a ribosome attaches to the mRNA and begins the process of translation, converting the message of mRNA into a protein. Transcription and translation happen simultaneously in prokaryotes.
	        </p>

            <div class="desc-note mt-2 text-center">
                <img src="asset/img/LOLT1A.png" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Eukaryotes
            </h4>
            <p class="desc-note mt-2">
                Eukaryotes are organisms made up of one or more cells that possess a membrane-bound nucleus (that houses DNA) as well as membrane-bound organelles. In contrast to prokaryotes, DNA is organized into linear chromosomes. Eukaryotic organisms may be multicellular or single-celled organisms. Unicellular eukaryotes are known as protists (which include amoeba, algae and dinoflagellates). Protists tend to be much larger (10-1000x) than prokaryotes, and like all eukaryotes have a true nucleus and organelles. Within Eukarya, multicellularity arose at least three times giving rise to modern day plants, animals, fungi.
                <br>
                <br>
                Eukaryotes are thought to have emerged from an ancestral archaean, due to their close proximity suggested by Carl Woese's phylogeny (Fig. 1). While all prokaryotes have circular DNA, all eukaryotes have linear DNA. Therefore, the cell that is ancestral to all eukaryotes must have had linear DNA. At sometime in the past, the ancestral archaean, circular DNA was cut and made linear. This actually posed a significant issue in DNA replication, due to issues of chromosome shortening. This was resolved with the emergence of telomerase, of a protein/RNA hybrid, that allowed the ends of the chromosomes to be fully replicated.
                <br>
                <br>
                The predominant nuclear origination hypothesis suggests infoldings of the cellular membrane (also called the plasma membrane) of an ancestral archaean (Fig. 3a).  Imagine a group of brown paper bags. If you began to compress them together, the paper would begin to fold in on itself. This is a good metaphor for the infolding hypothesis. Evidence to supports this comes from the presence of such infoldings in prokaryotic species that multiply in constrained areas (Fig. 3b). Unlike a paper bag, the cellular membrane is composed of phospholipids, which are capable of detaching from the outer membrane. The nuclear origin hypothesis suggests that the detached infoldings condensed and encased the DNA as the phospholipids reattached to each other (Figure 3), forming nuclear membrane and the endoplasmic reticulum, which form a contiguous system, with the these organelles physically connected to each other. The nucleus and the endoplasmic reticulum are a part of the endomembrane system, within eukaryotic cells, which also include the Golgi apparatus, vesicles and lysosomes (Fig. 4). These organelles are thought to have emerged in a similar fashion (possibly synonymously) as the nucleus and endoplasmic reticulum, but are separate from the nucleus and endoplasmic reticulum.
	        </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/LOLT1B.png" class="w-75" " alt="" srcset="">
            </div>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
