@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/CkXLvvHyyOU">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            One part of stage of catabolism is the breakdown of food molecules by hydrolysis reactions into the individual monomer units.
            <br>
            <br>
            - Irene Finch
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/C_3">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> What Is Catabolism
            </h1>
            <p class="desc-note mt-2">
                What is Catabolism?
                Catabolism is the break down of complex molecules. Catabolism is the breakdown of complex substances to their constituent parts (glucose, amino acids and fatty acids) which form substrates for metabolic pathways.
                <br><br>
                Metabolism comprises two major parts; one is anabolism and the other catabolism. The Catabolism process is the action of the set of metabolic pathways that breaks down molecules into smaller units that are either oxidized to release energy or used in other anabolic reactions.
                <br><br>
                Catabolism is the part of the metabolic process that breaks down large, complicated molecules into smaller ones in order to produce energy. The energy is released as a result of the destructive branch of metabolism.
                We have said that animals obtain chemical energy from the food—carbohydrates, fats, and proteins—they eat through reactions defined collectively as catabolism. We can think of catabolism as occurring in three stages (Figure  26.5.1 ). In stage I, carbohydrates, fats, and proteins are broken down into their individual monomer units: carbohydrates into simple sugars, fats into fatty acids and glycerol, and proteins into amino acids. One part of stage I of catabolism is the breakdown of food molecules by hydrolysis reactions into the individual monomer units—which occurs in the mouth, stomach, and small intestine—and is referred to as digestion.
                <br><br>
                In stage II, these monomer units (or building blocks) are further broken down through different reaction pathways, one of which produces ATP, to form a common end product that can then be used in stage III to produce even more ATP. In this chapter, we will look at each stage of catabolism—as an overview and in detail.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/cata1.png" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Stages of Catabolism
            </h4>
            <p class="desc-note mt-2">
            Catabolism can be broken down into 3 main stages. The three stages are as explained as follows-
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Stage 1 – Stage of Digestion
            </h4>
            <p class="desc-note mt-2">
                The large organic molecules of organic chemistry like proteins, lipids, and polysaccharides are digested into their smaller components outside cells. This stage acts on starch, cellulose or proteins that cannot be directly absorbed by the cells.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Stage 2 – Release of energy
            </h4>
            <p class="desc-note mt-2">
            Once the molecules are broken down, these molecules are taken up by cells and converted to yet smaller molecules, usually acetyl coenzyme A, which releases some energy.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Stage 3 – Energy Stored
            </h4>
            <p class="desc-note mt-2">
                The released energy is stored by reducing the coenzyme nicotinamide adenine dinucleotide into NADH.
                <br><br>
                This process provides the chemical energy necessary for the maintenance and growth of cells. Some examples of the catabolic processes include glycolysis, the citric acid cycle, the breakdown of muscle protein in order to use the amino acids as substrates for gluconeogenesis, the breakdown of fat in adipose tissue to fatty acids, and oxidative deamination of neurotransmitters by monoamine oxidase.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
