@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/fHztd6k5ZXY">
        </iframe>
        {{-- <video controls style="width: 500px" poster="asset/img/thumbnail.png" class="vid mt-5">
            <source src="https://drive.google.com/uc?export=download&id=1llst4BwWwbYwuIr12pdCGO46VZl7Hl7v" type='video/mp4'>
        </video> --}}
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Energy is neither created nor destroyed — and yet the global demand for it continues to increase. But where does energy come from, and where does it go?
            <br>
            <br>

            - Joshua M. Sneideman
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/ELS_3">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> ENERGY SOURCE
            </h1>
            <p class="desc-note mt-2">
                Energy from the sun is captured by green plants, algae, cyanobacteria, and photosynthetic protists. These organisms convert solar energy into the chemical energy needed by all living things. Light availability can be an important force directly affecting the evolution of adaptations in photosynthesizers. For instance, plants in the understory of a temperate forest are shaded when the trees above them in the canopy completely leaf out in the late spring. Not surprisingly, understory plants have adaptations to successfully capture available light. One such adaptation is the rapid growth of spring ephemeral plants such as the spring beauty (Figure 1). These spring flowers achieve much of their growth and finish their life cycle (reproduce) early in the season before the trees in the canopy develop leaves.

                <br>
                <br>

                In aquatic ecosystems, the availability of light may be limited because sunlight is absorbed by water, plants, suspended particles, and resident microorganisms. Toward the bottom of a lake, pond, or ocean, there is a zone that light cannot reach. Photosynthesis cannot take place there and, as a result, a number of adaptations have evolved that enable living things to survive without light. For instance, aquatic plants have photosynthetic tissue near the surface of the water; for example, think of the broad, floating leaves of a water lily—water lilies cannot survive without light. In environments such as hydrothermal vents, some bacteria extract energy from inorganic chemicals because there is no light for photosynthesis.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/ELS2.png" class="w-75" " alt="" srcset="">
            </div>
            <p class="desc-note mt-2">
                In springtime, air temperatures increase and surface ice melts. When the temperature of the surface water begins to approach 4 °C, the water becomes heavier and sinks to the bottom. The water at the bottom of the lake is then displaced by the heavier and denser surface water and, thus, rises to the top. As that water rises to the top, the sediments and nutrients from the lake bottom are brought along with it. This is called the spring turnover. During the summer months, the lake water stratifies, or forms layers, with the warmest water at the lake surface.
                <br>
                <br>
                As air temperatures drop in the fall, the temperature of the lake water cools to 4 °C; therefore, this causes fall turnover as the heavy cold water sinks and displaces the water at the bottom. The oxygen-rich water at the surface of the lake then moves to the bottom of the lake, while the nutrients at the bottom of the lake rise to the surface (Figure 3). During the winter, the oxygen at the bottom of the lake is used by decomposers and other organisms requiring oxygen, such as fish. It is important to note, however, that the relative transparency of ice also allows the penetration of the shorter wavelengths of visible light so that photosynthesis, especially by algae can continue.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
