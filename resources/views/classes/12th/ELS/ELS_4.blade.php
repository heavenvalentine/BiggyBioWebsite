@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/QImCld9YubE">
        </iframe>
        {{-- <video controls style="width: 500px" poster="asset/img/thumbnail.png" class="vid mt-5">
            <source src="https://drive.google.com/uc?export=download&id=1llst4BwWwbYwuIr12pdCGO46VZl7Hl7v" type='video/mp4'>
        </video> --}}
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Cells manage a wide range of functions in their tiny package.
            <br>
            <br>
            - Scitable
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/ELS_5">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Cell Energy and Cell Functions
            </h1>
            <p class="desc-note mt-2">
                Cells manage a wide range of functions in their tiny package — growing, moving, housekeeping, and so on — and most of those functions require energy. But how do cells get this energy in the first place? And how do they use it in the most efficient manner possible?
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/ELS4.jpg" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Where Do Cells Obtain Their Energy?
            </h4>
            <p class="desc-note mt-2">
                Cells, like humans, cannot generate energy without locating a source in their environment. However, whereas humans search for substances like fossil fuels to power their homes and businesses, cells seek their energy in the form of food molecules or sunlight. In fact, the Sun is the ultimate source of energy for almost all cells, because photosynthetic prokaryotes, algae, and plant cells harness solar energy and use it to make the complex organic food molecules that other cells rely on for the energy required to sustain growth, metabolism, and reproduction (Figure 1).
                <br>
                <br>
                Cellular nutrients come in many forms, including sugars and fats. In order to provide a cell with energy, these molecules have to pass across the cell membrane, which functions as a barrier — but not an impassable one. Like the exterior walls of a house, the plasma membrane is semi-permeable. In much the same way that doors and windows allow necessities to enter the house, various proteins that span the cell membrane permit specific molecules into the cell, although they may require some energy input to accomplish this task (Figure 2).
	        </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/ELS4A.jpg" class="w-75" " alt="" srcset="">
            </div>
            <h4 class="subtitle-note mt-3 mb-2">How Do Cells Turn Nutrients into Usable Energy?
            </h4>
            <p class="desc-note mt-2">
                Complex organic food molecules such as sugars, fats, and proteins are rich sources of energy for cells because much of the energy used to form these molecules is literally stored within the chemical bonds that hold them together. Scientists can measure the amount of energy stored in foods using a device called a bomb calorimeter. With this technique, food is placed inside the calorimeter and heated until it burns. The excess heat released by the reaction is directly proportional to the amount of energy contained in the food.
                <br>
                <br>
                In reality, of course, cells don't work quite like calorimeters. Rather than burning all their energy in one large reaction, cells release the energy stored in their food molecules through a series of oxidation reactions. Oxidation describes a type of chemical reaction in which electrons are transferred from one molecule to another, changing the composition and energy content of both the donor and acceptor molecules. Food molecules act as electron donors. During each oxidation reaction involved in food breakdown, the product of the reaction has a lower energy content than the donor molecule that preceded it in the pathway. At the same time, electron acceptor molecules capture some of the energy lost from the food molecule during each oxidation reaction and store it for later use. Eventually, when the carbon atoms from a complex organic food molecule are fully oxidized at the end of the reaction chain, they are released as waste in the form of carbon dioxide (Figure 3).

                Cells do not use the energy from oxidation reactions as soon as it is released. Instead, they convert it into small, energy-rich molecules such as ATP and nicotinamide adenine dinucleotide (NADH), which can be used throughout the cell to power metabolism and construct new cellular components. In addition, workhorse proteins called enzymes use this chemical energy to catalyze, or accelerate, chemical reactions within the cell that would otherwise proceed very slowly. Enzymes do not force a reaction to proceed if it wouldn't do so without the catalyst; rather, they simply lower the energy barrier required for the reaction to begin (Figure 4).
	        </p>
        </div>
        <div class="desc-note mt-2 text-center">
            <img src="asset/img/ELS4A.jpg" class="w-75" " alt="" srcset="">
        </div>
        <h4 class="subtitle-note mt-3 mb-2">What Specific Pathways Do Cells Use?
        </h4>
        <p class="desc-note mt-2">
            The particular energy pathway that a cell employs depends in large part on whether that cell is a eukaryote or a prokaryote. Eukaryotic cells use three major processes to transform the energy held in the chemical bonds of food molecules into more readily usable forms — often energy-rich carrier molecules. Adenosine 5'-triphosphate, or ATP, is the most abundant energy carrier molecule in cells. This molecule is made of a nitrogen base (adenine), a ribose sugar, and three phosphate groups. The word adenosine refers to the adenine plus the ribose sugar. The bond between the second and third phosphates is a high-energy bond (Figure 5).
            <br>
            <br>
            The first process in the eukaryotic energy pathway is glycolysis, which literally means "sugar splitting." During glycolysis, single molecules of glucose are split and ultimately converted into two molecules of a substance called pyruvate; because each glucose contains six carbon atoms, each resulting pyruvate contains just three carbons. Glycolysis is actually a series of ten chemical reactions that requires the input of two ATP molecules. This input is used to generate four new ATP molecules, which means that glycolysis results in a net gain of two ATPs. Two NADH molecules are also produced; these molecules serve as electron carriers for other biochemical reactions in the cell.
            <br>
            <br>
            Glycolysis is an ancient, major ATP-producing pathway that occurs in almost all cells, eukaryotes and prokaryotes alike. This process, which is also known as fermentation, takes place in the cytoplasm and does not require oxygen. However, the fate of the pyruvate produced during glycolysis depends upon whether oxygen is present. In the absence of oxygen, the pyruvate cannot be completely oxidized to carbon dioxide, so various intermediate products result. For example, when oxygen levels are low, skeletal muscle cells rely on glycolysis to meet their intense energy requirements. This reliance on glycolysis results in the buildup of an intermediate known as lactic acid, which can cause a person's muscles to feel as if they are "on fire." Similarly, yeast, which is a single-celled eukaryote, produces alcohol (instead of carbon dioxide) in oxygen-deficient settings.
            <br>
            <br>
            In contrast, when oxygen is available, the pyruvates produced by glycolysis become the input for the next portion of the eukaryotic energy pathway. During this stage, each pyruvate molecule in the cytoplasm enters the mitochondrion, where it is converted into acetyl CoA, a two-carbon energy carrier, and its third carbon combines with oxygen and is released as carbon dioxide. At the same time, an NADH carrier is also generated. Acetyl CoA then enters a pathway called the citric acid cycle, which is the second major energy process used by cells. The eight-step citric acid cycle generates three more NADH molecules and two other carrier molecules: FADH2 and GTP.
        </p>
        <h4 class="subtitle-note mt-3 mb-2">Conclusion
        </h4>
        <p class="desc-note mt-2">
            Cells need energy to accomplish the tasks of life. Beginning with energy sources obtained from their environment in the form of sunlight and organic food molecules, eukaryotic cells make energy-rich molecules like ATP and NADH via energy pathways including photosynthesis, glycolysis, the citric acid cycle, and oxidative phosphorylation. Any excess energy is then stored in larger, energy-rich molecules such as polysaccharides (starch and glycogen) and lipids.
        </p>
    </div>
    </div>
    </div>

<x-footer/>
@endsection
