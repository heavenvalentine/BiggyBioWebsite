@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/7bLMl6whc9E">
        </iframe>
        {{-- <video controls style="width: 500px" poster="asset/img/thumbnail.png" class="vid mt-5">
            <source src="https://drive.google.com/uc?export=download&id=1llst4BwWwbYwuIr12pdCGO46VZl7Hl7v" type='video/mp4'>
        </video> --}}
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            While we need energy to help us move our bodies and do everyday work, our cells also need energy to move their little bodies.

            -Angelos Chaloulis
            <br>
            <br>
            HERE
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/ELS_4">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Energy Sources in Foods
            </h1>
            <p class="desc-note mt-2">
                Carbohydrates (starches and sugars), fat, and protein within food can all function as sources of energy when they are metabolized to carbon dioxide and water in respiration processes in all of our body's cells. This energy fuels everything from the production of neurotransmitters in our brains to the muscle contractions required to shoot a basketball or weave a basket. The energy content of food is expressed as "calories" ("calories" are in reality kcal or kilocalories as defined in chemistry; 1 kcal will heat one liter of water one degree C). Energy-dense foods with high caloric content are generally those with high carbohydrate, protein, or fat content - for example, pasta, bread, oatmeal, grits, and other cooked whole grains and porridges consumed around the world as staples; plant oils or animal lard present in cooked foods, or meat and cheese. It is interesting to note that gram for gram, fats contain over twice the energy density of carbohydrates or protein: about 9 kcal per gram for fats versus only about 4 kcal per gram for carbohydrates and protein. We'll address the further role of high-quality fats as a nutrient, rather than just an energy source in a page further on.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/ELS3.jpg" class="w-75"  alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Energy Sources: Diet and Food System Aspects
            </h4>
            <p class="desc-note mt-2">
                Current U.S. Department of Agriculture (USDA) and other major nutritional guidelines promote the idea of accessing calories via a predominance of whole grains (e.g.. whole wheat and oats and flours made from these, brown rice) as these whole grains contain a mixture of carbohydrates, proteins, and indigestible fiber, as well as vitamins. These non-caloric contributions to nutrition are also important as discussed in the pages below, and combine well with the caloric content of food to produce better health outcomes. Calories are a fundamental consideration within nutrition because a negative calorie balance (calories consumed minus those expended in human sedentary activities and exercise) along with shortages of other associated food components described below leads to weight loss and faltering growth in children, including childhood stunting and permanent harm to a person's developmental potential. By contrast, large excesses in a calorie balance over time leads to weight gain that is linked at a population level to increased rates of heart disease and diabetes. These diet-related diseases increasingly afflict populations in industrialized economies and urban populations worldwide with access to abundant, though often less healthy, food choices. Diet-related diseases as part of food systems will be taken up again in module 3.2.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
