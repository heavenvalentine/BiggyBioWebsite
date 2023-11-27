@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/ozdO1mLXBQE">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Enzymes are proteins that help speed up metabolism, or the chemical reactions in our bodies.
            <br>
            <br>
            - Collis Corvin
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/E_2">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Enzymes
            </h1>
            <p class="desc-note mt-2">
            Enzymes are proteins that help speed up chemical reactions in our bodies. Enzymes are essential for digestion, liver function and much more. Too much or too little of a certain enzyme can cause health problems. Enzymes in our blood can also help healthcare providers check for injuries and diseases.

            <h1 class="title-note mt-5"> What are enzymes?
            </h1>
            Enzymes are proteins that help speed up metabolism, or the chemical reactions in our bodies. They build some substances and break others down. All living things have enzymes.

            Our bodies naturally produce enzymes. But enzymes are also in manufactured products and food.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/enzy.png" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">What do enzymes do?
            </h4>
            <p class="desc-note mt-2">
                One of the most important roles of enzymes is to aid in digestion. Digestion is the process of turning the food we eat into energy. For example, there are enzymes in our saliva, pancreas, intestines and stomach. They break down fats, proteins and carbohydrates. Enzymes use these nutrients for growth and cell repair.

                Enzymes also help with:
                <ol>
                <li>Breathing.</li>
                <li>Building muscle.</li>
                <li>Nerve function.</li>
                <li>Ridding our bodies of toxins.</li>
                </ol>
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">What are the different types of enzymes?
            </h4>
            <p class="desc-note mt-2">
                There are thousands of individual enzymes in the body. Each type of enzyme only has one job. For example, the enzyme sucrase breaks down a sugar called sucrose. Lactase breaks down lactose, a kind of sugar found in milk products.
                <br><br>
                Some of the most common digestive enzymes are:
                <ul>
                <li>Carbohydrase breaks down carbohydrates into sugars.</li>
                <li>Lipase breaks down fats into fatty acids.</li>
                <li>Protease breaks down protein into amino acids.</li>
                </ul>
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
