@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/n6l0J7QH7yA">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            In vascular plants, the roots are the organs of a plant that are modified to provide anchorage for the plant and take in water and nutrients.
            <br>
            <br>
            - Alma Baines
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/PM_2">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Root Of Plants
            </h1>
            <p class="desc-note mt-2">
                The plants that we see today are the result of billions of years of evolution. Today, plants cover almost 30 per cent of the total landmass and account for the 50 per cent of the plant’s productivity (generation of biomass). Plants fulfil many roles in the ecosystem. They are a source of food, nutrition, shelter, maintain the integrity of soil (by preventing erosion) and most importantly, they are the main source for balancing the oxygen level in the atmosphere.
                <br><br>
                Anatomically, plants are very complex organisms and are classified into various types based on certain defining characteristics. Roots are very important structures that provide a variety of functions, but contrary to popular belief, all plants do not have roots. Roots are absent in plants like mosses and liverworts.
                <br><br>
                Roots are the important underground part of all vascular plants. This part of the plant is mainly responsible for anchoring it down into the ground and absorbing the essential mineral elements, nutrients, and water from the soil. It is also used to store food.
                <br><br>
                However, not all plants have their roots underground, some plants have their roots growing above the ground. These are called aerial roots. Alike underground roots, these aerial roots are also responsible for absorbing nutrients, anchoring and affixing the plant by supporting them to the structures such as nearby walls, rocks, trellises, etc.
                <br><br>
                Few examples of plants with the aerial roots are–Bonsai,  Banyan Tree, Mangroves, etc.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/root.webp" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Types of Roots
            </h4>
            <p class="desc-note mt-2">
                Smiliar functions, however, their structure varies. Hence, based on these criteria, the root system is classified into two types
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Tap Root System
            </h4>
            <p class="desc-note mt-2">
                Taproots have a main central root upon which, small, lateral roots called root hairs are attached. Mustard, carrot, beetroot, parsley, china rose and all dicotyledons are examples of taproot systems.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Fibrous Root System
            </h4>
            <p class="desc-note mt-2">

                Fibrous roots, on the other hand, are bushy roots in which thin, moderately branching roots grow from the stem. Rice, wheat, maize, marigold, banana and all monocotyledons are some examples of the fibrous root system.
                <br><br>
                Adventitious roots are a unique category of roots that develop from sources other than the radicle. Primary roots will also be present in plants with this particular sort of root system. The adventitious root system is a characteristic feature of angiosperms and they are modified for various purposes such as respiration, support and food storage.
                <br><br>
                The main difference between tap roots and adventitious roots is that the former penetrates deep into the soil while the latter does not.
            </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
