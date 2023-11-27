@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/ukX5C6mvsbk">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Additive and addictive substances are substances that can cause physical or psychological dependence. They can be legal or illegal, and they can be found in a variety of forms, including drugs, alcohol, and certain behaviors.
            <br>
            <br>
            - Jimmy Kimmel
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/HDS_1">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Additive and Addictive Substances
            </h1>
            <p class="desc-note mt-2">
                According to the Food Safety Standard Authority of India (FSSAI). Food additive may be defined as any substance not normally consumed as a food by itself or used as a typical ingredient of the food, whether or not it has nutritive value, the intentional addition of which to food for a technological (including organoleptic) purpose in the manufacture, processing, preparation, treatment, packaging, transport or holding of such food results, or may be reasonably expected to result (directly or indirectly), in it or its by-products becoming a component of or otherwise affecting the characteristics of such food but does not include – contaminants or substances added to food for maintaining or improving nutritional qualities.
                <br><br>
                Food additives, in simpler terms, are substances that are added to food by manufacturers to make it easier to process or improve its appearance, texture, and quality. This does not include any potential contaminants that might accidentally enter food or ingredients added to food to maintain or improve nutritional quality. It is only used to describe substances that are intentionally added to food. These substances include flavours, vitamins, propionatesorbate, oxidizing agents, and flavours.
                <br><br>
                Chemical preservatives are food additives that are added to food to prevent its deterioration.
                These deteriorations can be caused by microorganisms or food enzymes.
                Chemical preservatives are used to inhibit the growth and activity microorganisms.
                Preservatives can inhibit microorganisms through interfering their cell membranes, enzyme activity, and genetic mechanisms.
                Others preservatives can be used to inhibit the oxidation and unsaturated fat oxidation, as neutralizers and stabilizers, to prevent physical changes, to protect microorganisms from damage, to prevent water loss, or to stop undesirable micro-bial and enzymatic reactions.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/AAS4.jfif" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">E numbers (international numbering system) of food additives
            </h4>
            <p class="desc-note mt-2">
                Almost all safe-to-use food additives are given ‘E numbers’ by the European Food Safety Authority. In order to get to this status, the food additive must pass all the safety checks. Following are the general categories of food additives and their E numbers. However, when one food additive has more than one function, it is given only one E number. Chemical compounds and other species are constantly added to the list of safe-to-use food additives as the food additives pass the safety checks. An up to date list of food additives and their E numbers could be obtained from official UK food standards agency web site
	        </p>
            <br><br><br>
            <table>
                <tr>
                  <th>Substance</th>
                  <th>Type</th>
                </tr>
                <tr>
                  <td>Alcohol</td>
                  <td>Depressant</td>
                </tr>
                <tr>
                  <td>Nicotine</td>
                  <td>Stimulant</td>
                </tr>
                <tr>
                  <td>Opioids</td>
                  <td>Depressant</td>
                </tr>
                <tr>
                  <td>Amphetamines</td>
                  <td>Stimulant</td>
                </tr>
                <tr>
                  <td>Cocaine</td>
                  <td>Stimulant</td>
                </tr>
              </table>
              <br><br><br>

            <h4 class="subtitle-note mt-3 mb-2">Colors
            </h4>
            <p class="desc-note mt-2">
                According to the US FDA, “A color additive is any dye, pigment, or substance, which when added or applied to a food, drug or cosmetic, or to the human body, is capable (alone or through reactions with other substances) of imparting color” [2]. Food colors are used as food additives mainly to yield better sensory effects, specifically appearance contentment. The reasons for adding colors to food are manifold. First, color may be lost due to the processing and storage conditions of food, and thus food colors are added to compensate such loss of color. Second, food items with natural colors may show a variation of color, and thus food colors are added to correct such variations in color. Third, food colors may be added to further improve the natural color of the food. Fourth, food colors are added to give color to food items with no color
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
