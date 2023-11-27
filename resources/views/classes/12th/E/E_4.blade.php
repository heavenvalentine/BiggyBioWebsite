@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/UVeoXYJlBtI">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            An enzyme attracts substrates to its active site, catalyzes the chemical reaction by which products are formed, and then allows the products to dissociate (separate from the enzyme surface).
            <br>
            <br>
            - Daniel Cornelia
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/E_5">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> The mechanism of enzymatic action
            </h1>
            <p class="desc-note mt-2">
                An enzyme attracts substrates to its active site, catalyzes the chemical reaction by which products are formed, and then allows the products to dissociate (separate from the enzyme surface). The combination formed by an enzyme and its substrates is called the enzyme–substrate complex. When two substrates and one enzyme are involved, the complex is called a ternary complex; one substrate and one enzyme are called a binary complex. The substrates are attracted to the active site by electrostatic and hydrophobic forces, which are called noncovalent bonds because they are physical attractions and not chemical bonds.
                <br><br>
                As an example, assume two substrates (S1 and S2) bind to the active site of the enzyme during step 1 and react to form products (P1 and P2) during step 2. The products dissociate from the enzyme surface in step 3, releasing the enzyme. The enzyme, unchanged by the reaction, is able to react with additional substrate molecules in this manner many times per second to form products. The step in which the actual chemical transformation occurs is of great interest, and, although much is known about it, it is not yet fully understood. In general there are two types of enzymatic mechanisms, one in which a so-called covalent intermediate forms and one in which none forms.
                <br><br>
                In the mechanism by which a covalent intermediate—i.e., an intermediate with a chemical bond between substrate and enzyme—forms, one substrate, B―X, for example, reacts with the group N on the enzyme surface to form an enzyme-B intermediate compound. The intermediate compound then reacts with the second substrate, Y, to form the products B―Y and X.
                <br><br>
                In double displacement reactions, the covalent intermediate between enzyme and substrate apparently influences the reaction to proceed more rapidly. Because the enzyme is unaltered at the end of the reaction, it functions as a true catalyst, even though it is temporarily altered during the enzymatic process.
                <br><br>
                Although many enzymes form a covalent intermediate, the mechanism is not essential for catalysis. One substrate (Y) reacts directly with the second substrate (X―B), in a so-called single displacement reaction. The B moiety, which is transformed in the chemical reaction, is involved in only one reaction and does not form a bond with a group on the enzyme surface. The enzyme maltose phosphorylase, for example, directly affects the bonds of the substrates (B―X and X), which, in this case, are maltose (glucosylglucose) and phosphate, to form the products, glucose (X) and glucosylphosphate (B―Y).
                <br><br>
                Covalent intermediates between part of a substrate and an enzyme occur in many enzymatic reactions, and various amino acids—serine, cysteine, lysine, and glutamic acid—are involved.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/mechanis.png" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">The rate of enzymatic reactions
            </h4>
            <p class="desc-note mt-2">
                If the velocity of an enzymatic reaction is represented graphically as a function of the substrate concentration (S), the curve obtained in most cases is a hyperbola. The mathematical expression of this curve, shown in the equation below, was developed in 1912–13 by German biochemists Leonor Michaelis and Maud Leonora Menten. In the equation, VM is the maximal velocity of the reaction, and KM is called the Michaelis constant,
                <div class="desc-note mt-2 text-center">
                     <img src="asset/img/dia.webp" class="w-75" " alt="" srcset="">
                </div>
                <br><br>
                The shape of the curve is a logical consequence of the active-site concept; i.e., the curve flattens at the maximum velocity (VM), which occurs when all the active sites of the enzyme are filled with substrate. The fact that the velocity approaches a maximum at high substrate concentrations provides support for the assumption that an intermediate enzyme–substrate complex forms. At the point of half the maximum velocity, the substrate concentration in moles per litre (M) is equal to the Michaelis constant, which is a rough measure of the affinity of the substrate molecule for the surface of the enzyme. KM values usually vary from about 10−8 to 10−2 M, and VM from 105 to 109 molecules of product formed per molecule of enzyme per second. The value for VM is referred to as the turnover number when expressed as moles of product formed per mole of enzyme per minute. The binding of molecules that inhibit or activate the protein surface usually results in similar types.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Inhibition of enzymes
            </h4>
            <p class="desc-note mt-2">
                Some molecules very similar to the substrate for an enzyme may be bound to the active site but be unable to react. Such molecules cover the active site and thus prevent the binding of the actual substrate to the site. This inhibition of enzyme action is of a competitive nature, because the inhibitor molecule actually competes with the substrate for the active site. The inhibitor sulfanilamide, for example, is similar enough to a substrate (p-aminobenzoic acid) of an enzyme involved in the metabolism of folic acid that it binds to the enzyme but cannot react. It covers the active site and prevents the binding of p-aminobenzoic acid. This enzyme is essential in certain disease-causing bacteria but is not essential to humans; large amounts of sulfanilamide therefore kill the microorganism but do not harm humans. Inhibitors such as sulfanilamide are called antimetabolites. Sulfanilamide and similar compounds that kill a pathogen without harming its host are widely used in chemotherapy.
                <div class="desc-note mt-2 text-center">
                    <img src="asset/img/rumus.webp" class="w-75" " alt="" srcset="">
               </div>

	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
