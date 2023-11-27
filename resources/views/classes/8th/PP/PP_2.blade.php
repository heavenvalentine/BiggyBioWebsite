@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/BNiu_tcJzzI">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Mineral Nutrition. Mineral Nutrition is defined as the naturally occurring inorganic nutrient found.
            <br>
            <br>
            - Austin Carlos
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/PlP_3">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Mineral Nutrition
            </h1>
            <p class="desc-note mt-2">
                Mineral Nutrition is defined as the naturally occurring inorganic nutrient found in the soil and food that is essential for the proper functioning of animal and plant body. Minerals are vital elements necessary for the body. Both the plants and animals require minerals essentially. For example, Zinc is necessary for the manufacture of protein and for cell division.
                <br><br>
                Nutrients which are required by plants in very small amounts are termed as Micro Elements or macronutrients. Some of them include boron, copper, manganese, iron, chlorine, and molybdenum.
                <br><br>
                Nutrients which are required by plants in larger amounts are termed as Macronutrients. Some of them include sulfur, nitrogen, carbon, phosphorus, calcium, potassium and magnesium.
                <br><br>
                Let us have a detailed look at the mineral nutrition notes to explore the role of micronutrients and macronutrients in maintaining human health.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/PP2.jfif" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Role of Nutrients
            </h4>
            <p class="desc-note mt-2">
                <ol>
                <li>Balancing function: Some salts or minerals act against the harmful effects of the other nutrients thus balancing each other.</li>
                <li>Maintenance of osmotic pressure: Several minerals cell sap is present in organic or inorganic form to regulate the organic pressure of the cell.</li>
                <li>Influencing the pH of the cell sap: Different anions and cations has an influence on the pH of the cell sap.</li>
                <li>Construction of the plant body: Carbon, Hydrogen, and Oxygen are elements that help to construct the plant body by entering protoplasm and constitution of the wall.</li>
                <li>Catalysis of the biochemical reaction: Certain elements like zinc, magnesium, calcium and copper act as metallic catalysts in biochemical reactions.</li>
                <li>Effects of Toxicity: Certain minerals like arsenic and copper has a toxic effect on the protoplasm under specific conditions.</li>
                </ol>
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Micronutrients
            </h4>
            <p class="desc-note mt-2">
                Functions of some of the Micronutrients are stated below:
                <ul>
                <li>Copper</li>
                It is a component of oxidase, cytochrome oxidase, phenolases and ascorbic acid oxidase that is responsible for activating the enzymes.
                Copper plays a vital role in photophosphorylation.
                It also helps to balance carbohydrate-nitrogen regulation.
                <br><br>
                <li>Manganese</li>
                It is necessary for photosynthesis during the photolysis of water.
                The mineral is required for the synthesis of chlorophyll.
                It acts as an activator of nitrogen metabolism.
                <br><br>
                <li>Zinc</li>
                It is essential for the synthesis of tryptophan, metabolism of carbohydrates and phosphorus.
                It is a constituent of enzymes like alcohol dehydrate-gas, carbonic anhydrase, lactic dehydrogenase, hexokinase, and carboxypeptidase.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
