@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/ST1UWnenOo0">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Catabolism, the sequences of enzyme-catalyzed reactions by which relatively large molecules in living cells are broken down, or degraded.
            <br>
            <br>
            - Ed Earl
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/C_2">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Catabolism in different organism
            </h1>
            <p class="desc-note mt-2">
                Catabolism is the set of metabolic processes that break down large molecules. These include breaking down and oxidizing food molecules. The purpose of catabolic reactions is to provide the energy and components needed by anabolic reactions. The exact nature of these catabolic reactions differ from organism to organism; organisms can be classified based on their sources of energy and carbon, their primary nutritional groups. Organic molecules are used as a source of energy by organotrophs, while lithotrophs use inorganic substrates and phototrophs capture sunlight as chemical energy.
                <br><br>
                All these different forms of metabolism depend on redox reactions that involve the transfer of electrons from reduced donor molecules such as organic molecules, water, ammonia, hydrogen sulfide or ferrous ions to acceptor molecules such as oxygen, nitrate or sulfate. In animals these reactions involve complex organic molecules being broken down to simpler molecules, such as carbon dioxide and water. In photosynthetic organisms such as plants and cyanobacteria, these electron-transfer reactions do not release energy, but are used as a way of storing energy absorbed from sunlight.
                <br><br>
                The most common set of catabolic reactions in animals can be separated into three main stages. In the first, large organic molecules such as proteins, polysaccharides, or lipids are digested into their smaller components outside cells. Next, these smaller molecules are taken up by cells and converted to yet smaller molecules, usually the acetyl coenzyme A (acetyl-CoA), which releases some energy. Finally, the acetyl group on the CoA is oxidized to water and carbon dioxide in the citric acid cycle and electron transport chain, releasing the energy that is stored by reducing the coenzyme nicotinamide adenine dinucleotide (NAD+) into NADH.
                <br><br>
                Macromolecules such as starch, cellulose or proteins cannot be rapidly taken up by cells and must be broken into their smaller units before they can be used in cell metabolism. Several common classes of enzymes digest these polymers. These digestive enzymes include proteases that digest proteins into amino acids, as well as glycoside hydrolases that digest polysaccharides into monosaccharides. Microbes secrete digestive enzymes into their surroundings, while animals only secrete these enzymes from specialized cells in their guts. The amino acids or sugars released by these extracellular enzymes are then pumped into cells by specific active transport proteins. A simplified schematic of the catabolism of carbohydrates, proteins and fats is shown in.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/cata.webp" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Carbohydrate Catabolism
            </h4>
            <p class="desc-note mt-2">
                Carbohydrate catabolism is the breakdown of carbohydrates into smaller units. Carbohydrates are usually taken into cells once they have been digested into monosaccharides. Once inside, the major route of breakdown is glycolysis, where sugars such as glucose and fructose are converted into pyruvate and some ATP is generated. Pyruvate is an intermediate in several metabolic pathways, but the majority is converted to acetyl-CoA and fed into the citric acid cycle. Although some more ATP is generated in the citric acid cycle, the most important product is NADH, which is made from NAD+ as the acetyl-CoA is oxidized. This oxidation releases carbon dioxide as a waste product. In anaerobic conditions, glycolysis produces lactate, through the enzyme lactate dehydrogenase re-oxidizing NADH to NAD+ for re-use in glycolysis.

	        </p>

            <h4 class="subtitle-note mt-3 mb-2">The Pentose Phosphate Pathway
            </h4>
            <p class="desc-note mt-2">
                n alternative route for glucose breakdown is the pentose phosphate pathway, which reduces the coenzyme NADPH and produces pentose sugars such as ribose, the sugar component of nucleic acids. Fats are catabolised by hydrolysis to free fatty acids and glycerol. The glycerol initiates glycolysis and the fatty acids are broken down by beta oxidation to release acetyl-CoA, which then is fed into the citric acid cycle. Fatty acids release more energy upon oxidation than carbohydrates because carbohydrates contain more oxygen in their structures.
                <br><br>
                Amino acids are either used to synthesize proteins and other biomolecules, or oxidized to urea and carbon dioxide as a source of energy. The oxidation pathway starts with the removal of the amino group by a transaminase. The amino group is fed into the urea cycle, leaving a deaminated carbon skeleton in the form of a keto acid. Several of these keto acids are intermediates in the citric acid cycle, for example the deamination of glutamate forms α-ketoglutarate. The glucogenic amino acids can also be converted into glucose, through gluconeogenesis.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
