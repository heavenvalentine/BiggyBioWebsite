@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/2Ox3yvU-790">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Overall, bioprocess engineering is a specialized version of chemical engineering dealing with the design and development of equipment and processes for large scale commercial manufacture of a variety of biological products.
            <br>
            <br>
            - Kimberly Keyna
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/B_4">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5">Bioprocess engineering
            </h1>
            <p class="desc-note mt-2">
                Bioprocess engineering, also biochemical engineering, is a specialization of chemical engineering or biological engineering. It deals with the design and development of equipment and processes for the manufacturing of products such as agriculture, food, feed, pharmaceuticals, nutraceuticals, chemicals, and polymers and paper from biological materials & treatment of waste water. Bioprocess engineering is a conglomerate of mathematics, biology and industrial design, and consists of various spectrums like the design and study of bioreactors (operational mode, instrumentation, and physical layout) to the creation of kinetic models. It also deals with studying various biotechnological processes used in industries for large scale production of biological product for optimization of yield in the end product and the quality of end product. Bioprocess engineering may include the work of mechanical, electrical, and industrial engineers to apply principles of their disciplines to processes based on using living cells or sub component of such cells.
                <br><br>
                Overall, bioprocess engineering is a specialized version of chemical engineering dealing with the design and development of equipment and processes for large scale commercial manufacture of a variety of biological products, such as biopharmaceuticals, industrial enzymes, biofuels, biopolymers, and other materials.
                <br><br>
                To that end, bioprocess engineering is the planning, construction, execution, and revision of the biological and mechanical processes required to create new products within the life sciences. Engineering of this type can be expansive, given the complex nature of the intersecting scientific fields.
                <br><br>
                Those interested in a career in bioprocess engineering will require at least a bachelor's degree in biology or chemistry. In addition, most bioprocess engineers go on to pursue a graduate degree. You also need experience in a laboratory setting.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/B3.png" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Bioprocessing:
            </h4>
            <p class="desc-note mt-2">
                <ol>
                <li>Bioprocessing refers to the process which utilizes living organisms, cells, or components to produce the desired product, such as enzymes, organic acids, antibiotics, vaccines, proteins, etc.</li>
                <li>The three key steps of bioprocess are upstream processing, fermentation, and downstream processing.</li>
                </ol>
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Upstream processing:
            </h4>
            <p class="desc-note mt-2">
                <ol>
                <li>The upstream process is the initial phase in the bioprocess, starting with early cell separation and cultivation and continuing via cell banking and culture development until the necessary amount is obtained.</li>
                <li>Upstream processing encompasses all inoculum generation phases, including media preparation, cell culture, and cell separation and harvest.</li>
                <li>The cells are collected and transported to the downstream portion of the bioprocess after they have attained the necessary density.</li>
                <li>Upstream biomanufacturing aims to cultivate cells that will generate the desired protein, which will then be refined further during downstream processing processes.</li>
                </ol>
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Fermentation:
            </h4>
            <p class="desc-note mt-2">
                <ol>
                <li>The majority of prokaryotes and unicellular eukaryotes use anaerobic fermentation as a means of energy production.</li>
                <li>Glucose is partly oxidized in this process, resulting in acids and alcohol.</li>
                <li>The pyruvic acid generated by partial oxidation of glucose is transformed into ethanol and carbon dioxide in organisms like yeast (CO2).</li>
                <li>Fermentation's primary purpose is to convert NADH, a chemical molecule found in all living cells, back into the coenzyme NAD+, which may then be utilized again.</li>
                <li>Glycolysis is a process that releases energy by breaking down glucose from enzymes.</li>
                </ol>
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Downstream processing:
            </h4>
            <p class="desc-note mt-2">
                <ol>
                <li>Downstream processing is the recovery and purification of biosynthetic products, particularly medications, from natural sources such as animal or plant tissue or fermentation broth, as well as the recycling of recoverable components and proper waste handling and disposal.</li>
                <li>Multi-step approaches for recovering and purifying desirable products are used in downstream processing.</li>
                <li>The most important goal in downstream processing in terms of commercial concerns is to enhance product recovery while minimizing production costs.</li>
                    <br><br>
                <div class="desc-note mt-2 text-center">
                    <img src="asset/img/BB3.jpg" class="w-75" " alt="" srcset="">
                </div>
                </ol>
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
