@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/8IRlK34cnVA">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Anabolism (/əˈnæbəlɪzəm/) is the set of metabolic pathways that construct molecules from smaller units.
            <br>
            <br>
            - Ferdinand Fay
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/A_2">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> What is an example of anabolism?
            </h1>
            <p class="desc-note mt-2">
                Bone development and mineralization, as well as muscle mass gain, are examples of anabolism. Catabolic reactions include the breakdown of proteins into amino acids, glycogen into glucose, and triglycerides into fatty acids.
            </p>

            <h1 class="title-note mt-5"> What is the difference between catabolism and metabolism?
            </h1>
            <p class="desc-note mt-2">
                The key distinction between the two concepts is that metabolism refers to all chemical events involved in keeping our cells alive. Catabolism, on the other hand, is a kind of metabolism in which complex compounds are broken down into smaller molecules.
            </p>

            <h1 class="title-note mt-5"> Does anabolism release energy?
            </h1>
            <p class="desc-note mt-2">
                The production of complex compounds from simpler ones is known as anabolism. These chemical reactions necessitate the use of energy. These reactions result in the release of energy. Typically, anabolic and catabolic processes act in tandem, with catabolism providing energy for anabolism.
            </p>

            <h1 class="title-note mt-5"> Is Exergonic catabolic?
            </h1>
            <p class="desc-note mt-2">
                Energy is released during catabolic reactions. They are exergonic in nature. Large molecules are broken down into smaller ones in a catabolic process. For example, the hydrolysis reactions, which are the inverse of the condensation events discussed above, are catabolic.
            </p>

            <div class="desc-note mt-2 text-center">
                <img src="asset/img/ana.png" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Anabolic hormones
            </h4>
            <p class="desc-note mt-2">
                Hormones are either catabolic or anabolic depending on the stimulated part of metabolism. The most important anabolic hormones are insulin, growth hormone, estrogen, and testosterone. Insulin hormone stimulates the synthesis of skeletal muscles, lipids, and glycogen, while steroids and growth hormones increase the total body mass by accelerating protein anabolism in the body.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Photosynthetic carbohydrate synthesis
            </h4>
            <p class="desc-note mt-2">
                Photosynthetic carbohydrate synthesis is an anabolic process that takes place in certain bacteria and in plants. It produces starch, glucose, cellulose, proteins, and lipids from carbon dioxide using the energy derived from light reactions during photosynthesis. In this process, organic acids are converted into monosaccharides and then they are used to synthesize polysaccharides, such as starch.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
