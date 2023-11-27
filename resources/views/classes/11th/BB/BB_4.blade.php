@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/5BBYBRWzsLA">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Lipids are fatty, waxy, or oily compounds that are soluble in organic solvents and insoluble in polar solvents such as water.
            <br>
            <br>
            - Boby Jeffry
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/BB_5">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5">Lipids
            </h1>
            <p class="desc-note mt-2">
                Lipids are a broad group of naturally-occurring molecules which includes fats, waxes, sterols, fat-soluble vitamins (such as vitamins A, D, E and K), monoglycerides, diglycerides, phospholipids, and others. The functions of lipids include storing energy, signaling, and acting as structural components of cell membranes.[3][4] Lipids have applications in the cosmetic and food industries, and in nanotechnology.[5]
                <br><br>
                Lipids may be broadly defined as hydrophobic or amphiphilic small molecules; the amphiphilic nature of some lipids allows them to form structures such as vesicles, multilamellar/unilamellar liposomes, or membranes in an aqueous environment. Biological lipids originate entirely or in part from two distinct types of biochemical subunits or "building-blocks": ketoacyl and isoprene groups.[3] Using this approach, lipids may be divided into eight categories: fatty acyls, glycerolipids, glycerophospholipids, sphingolipids, saccharolipids, and polyketides (derived from condensation of ketoacyl subunits); and sterol lipids and prenol lipids (derived from condensation of isoprene subunits).[3]
                <br><br>
                Although the term "lipid" is sometimes used as a synonym for fats, fats are a subgroup of lipids called triglycerides. Lipids also encompass molecules such as fatty acids and their derivatives (including tri-, di-, monoglycerides, and phospholipids), as well as other sterol-containing metabolites such as cholesterol.[6] Although humans and other mammals use various biosynthetic pathways both to break down and to synthesize lipids, some essential lipids can't be made this way and must be obtained from the diet.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/bb4.png" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Fatty acyls
            </h4>
            <p class="desc-note mt-2">
                Fatty acyls, a generic term for describing fatty acids, their conjugates and derivatives, are a diverse group of molecules synthesized by chain-elongation of an acetyl-CoA primer with malonyl-CoA or methylmalonyl-CoA groups in a process called fatty acid synthesis.[20][21] They are made of a hydrocarbon chain that terminates with a carboxylic acid group; this arrangement confers the molecule with a polar, hydrophilic end, and a nonpolar, hydrophobic end that is insoluble in water. The fatty acid structure is one of the most fundamental categories of biological lipids and is commonly used as a building-block of more structurally complex lipids. The carbon chain, typically between four and 24 carbons long,[22] may be saturated or unsaturated, and may be attached to functional groups containing oxygen, halogens, nitrogen, and sulfur. If a fatty acid contains a double bond, there is the possibility of either a cis or trans geometric isomerism, which significantly affects the molecule's configuration. Cis-double bonds cause the fatty acid chain to bend, an effect that is compounded with more double bonds in the chain. Three double bonds in 18-carbon linolenic acid, the most abundant fatty-acyl chains of plant thylakoid membranes, render these membranes highly fluid despite environmental low-temperatures,[23] and also makes linolenic acid give dominating sharp peaks in high resolution 13-C NMR spectra of chloroplasts. This in turn plays an important role in the structure and function of cell membranes.[24]: 193–5  Most naturally occurring fatty acids are of the cis configuration, although the trans form does exist in some natural and partially hydrogenated fats and oils.[25]
                <br><br>
                Examples of biologically important fatty acids include the eicosanoids, derived primarily from arachidonic acid and eicosapentaenoic acid, that include prostaglandins, leukotrienes, and thromboxanes. Docosahexaenoic acid is also important in biological systems, particularly with respect to sight.[26][27] Other major lipid classes in the fatty acid category are the fatty esters and fatty amides. Fatty esters include important biochemical intermediates such as wax esters, fatty acid thioester coenzyme A derivatives, fatty acid thioester ACP derivatives and fatty acid carnitines. The fatty amides include N-acyl ethanolamines, such as the cannabinoid neurotransmitter anandamide.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Glycerolipids
            </h4>
            <p class="desc-note mt-2">
                Glycerolipids are composed of mono-, di-, and tri-substituted glycerols,[29] the best-known being the fatty acid triesters of glycerol, called triglycerides. The word "triacylglycerol" is sometimes used synonymously with "triglyceride". In these compounds, the three hydroxyl groups of glycerol are each esterified, typically by different fatty acids. Because they function as an energy store, these lipids comprise the bulk of storage fat in animal tissues. The hydrolysis of the ester bonds of triglycerides and the release of glycerol and fatty acids from adipose tissue are the initial steps in metabolizing fat.
                <br><br>
                Additional subclasses of glycerolipids are represented by glycosylglycerols, which are characterized by the presence of one or more sugar residues attached to glycerol via a glycosidic linkage. Examples of structures in this category are the digalactosyldiacylglycerols found in plant membranes[31] and seminolipid from mammalian sperm cells.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
