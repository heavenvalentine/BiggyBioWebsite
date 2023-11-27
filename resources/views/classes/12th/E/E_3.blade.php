@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/0Nr9Pc00qOk">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            The second general principle is that enzymes are principally classified and named according to the reaction they catalyse.
            <br>
            <br>
            - Caleste Daan
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/E_4">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5">Enzyme Definition and Classification
            </h1>
            <p class="desc-note mt-2">
                Definition
                <br><br>
                An enzyme is a protein or RNA produced by living cells, which is highly specific and highly catalytic to its substrates. Enzymes are a very important type of macromolecular biological catalysts. Due to the action of enzymes, chemical reactions in organisms can also be carried out efficiently and specifically under mild conditions.
                <br><br>
                Nomenclature
                <br><br>
                The nomenclature of enzymes is derived from their substrates or the catalyzed chemical reactions, and "ase" is usually added as a suffix. Enzymes can be indexed with letters and numbers according to International Union of Biochemistry and Molecular Biology: the letter EC plus four numbers representing four elements. The first number represents enzymes that are classified according to the mechanism of enzymatic reaction.
                <br><br>
                Classification
                <br><br>
                According to the type of reactions that the enzymes catalyze, enzymes are classified into seven categories, which are oxidoreductases, transferases, hydrolases, lyases, isomerases, ligases, and translocases. Oxidoreductases, transferases and hydrolases are the most abundant forms of enzymes. Individual enzyme classes are further classified systematically based on the chemical name of the substrate and its reaction mechanism.
                <br><br>
                According to the unified classification principle of enzymes published by the International Society of Biochemistry, each group of enzymes in the above seven categories can be further divided into several subgroups according to the characteristics of the functional groups or bonds in the substrates. In order to show the properties of substrates or reactants more accurately, each subclass is further divided into subclasses and directly contains a quantity of enzymes.
                <br><br>
                Moreover, on the basis of the molecular composition, enzymes can be divided into pure enzymes and binding enzymes. Enzymes containing only protein are called pure enzymes. Binding enzymes are composed of proteins and cofactors. Only when the two components are combined, can the enzyme have catalytic activity.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/class.png" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Classification of enzymes
            </h4>
            <p class="desc-note mt-2">
                Enzymes are classified as per their reactive nature. The International Union of Biochemistry and Molecular Biology have established the classification of enzymes by measuring every enzyme’s nomenclature by an EC number. The classification of enzymes has been stated below.
                <br><br>
                EC 1 Oxidoreductases: Oxidoreductases generally consist of a large class of enzymes, which catalyse the electronic transfer from reductant (an electron donor) to oxidant (an electron acceptor) molecule. Oxidoreductase also fulfills an essential role in both anaerobic mechanisms and aerobic metabolism.
                Function: A substance of oxidoreductases, as coenzyme accepts, electrons and hydrogens, are transferred into oxygens, in the metabolic system.
                <br><br>
                EC 2 Transferases: Transferases enzymes catalyze transfer amongst a group of atoms. These atoms are amine, carbonyl, carboxyl, acyl, methyl, phosphoryl and glycol form a donor substrate to the acceptor compound.
                Function: Transferases have more than 450 enzymes that catalyze the transfer of various functional groups. Additionally, Transferases catalyse the ‘transfer’ of H2.
                <br><br>
                EC 3 Hydrolases:  Hydrolase’s enzymes catalyze the hydrolysis among the proteins, starch,fats, nucleic acid, phosphate satire and various macromolecular substances.
                Function: Hydrolases break chemical bonds to produce smaller molecules from large ones. Various hydrolases are lipases, glycosidases, phosphatases, nucleosidases and peptidases.
                <br><br>
                EC 4 Lyases: Lyases enzymes, catalyse the process of addition and removal of several elements of water (hydrogen and oxygen), CO2 (carbon and oxygen) or Ammonia (nitrogen and hydrogen) into double bonds.
                Function: Decarboxylases, a substance of lyases, helps to remove CO2,from the amino acid, while dehydrases remove water.
                <br><br>
                EC 5 Isomerases: Isomerases catalyse the isomerization changes within one singular molecule. Isomerases also involve a catalyzed reaction in a molecules’ structural rearrangement. For instance, isomerases catalyze “L-alanine’s conversion” into an isomeric form that is “D-alanine”.
                Function:  Isomerases have several biological relevance. Isomerases are also present in the genome and metabolism in most living beings, which catalyses up to 4% of the overall biological reaction that is present in central metabolism.
                <br><br>
                EC 6 Ligases: Ligases play important roles in maintaining genomic integrity by joining the breaks in DNA’s phosphodiester backbone.
                Function: These steps occur during recombination and replication of DNA as a result of DNA’s damage and its repair.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Mechanism of enzymes activity
            </h4>
            <p class="desc-note mt-2">
                Initially, enzymes attract substrates in their active state, acting as catalysts in chemical reactions for which the products are formed. Thereafter, it allows the products to get separate from the surface area. One enzyme and its substrates’ ‘ together form an “enzyme-substrate complex”.
                <br><br>
                [E + S ⇔ ES ⇔ EP⇔ E+P]
                <br><br>
                It is the most simplified equation followed in enzyme mechanism and more appropriately described through the Lock and Key model.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
