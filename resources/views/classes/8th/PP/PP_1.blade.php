@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/jtuX7H05tmQ">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Transportation is the process that involves the movement of water and necessary nutrients to all parts of the plant for its survival.
            <br>
            <br>
            - John Cannon
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/PlP_2">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Transport In Plants
            </h1>
            <p class="desc-note mt-2">
                Transportation is a vital process in plants. Trees transport all the nutrients and water it needs for survival from its roots to the tips of the leaves.
                <br><br>
                In the case of transportation in plants, the biggest constraint is water as it ends up being a limiting factor in growth. To overcome this problem, trees and other plants have the perfect system for the absorption and translocation of water.
                <br><br>
                Plants contain a vast network of conduits which consist of xylem and phloem. This is more like the circulatory system that transports blood throughout the human body. Similar to the circulatory system in humans, the xylem and phloem tissues extend throughout the plant. These conducting tissues originate from the roots and move up through the trunks of trees. Later they branch off into the branches and then branching even further into every leaf, like spider webs.
                <br><br>
                Transportation occurs in three levels in the case of plants:
                <br><br>
                Transportation of substance from one cell to another.
                Long-Distance transport of sap within phloem and xylem.
                The release and uptake of solute and water by individual cells.
                Let us have a detailed look at the process of absorption and transportation in plants.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/PP11.jpg" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Water Absorption In Plants
            </h4>
            <p class="desc-note mt-2">
                The water is absorbed in two ways by the plants:
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Active Absorption
            </h4>
            <p class="desc-note mt-2">
            In the case of active absorption, water moves through symplast and it is absorbed according to the Diffusion Pressure Deficit changes. The rate of absorption is slow. It comprises osmotic and non-osmotic forces.
                <br><br>
            Humidity and temperature can have an impact. The force required for the absorption of water is mainly generated in the root cells itself. There would be a decrease in the rate of water absorption if the metabolic inhibitors are applied.

	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Passive Absorption
            </h4>
            <p class="desc-note mt-2">
                The rate of absorption is fast. It occurs in rapidly transpiring plants. The movement of plants is through apoplast and it is absorbed due to transpiration pull and it is created due to the stress created in xylem sap. The rate of absorption significantly depends upon the rate of transpiration. The force required for the absorption of water is mainly generated in the mesophyll cells.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
