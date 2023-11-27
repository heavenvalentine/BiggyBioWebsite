@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/GK_vRtHJZu4">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            "Our planet’s diverse, thriving ecosystems may seem like permanent fixtures, but they’re actually vulnerable to collapse".
            <br>
            <br>
            - Kim Preshoff.
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/LTC_2">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Diversity In Living Organisms
            </h1>
            <p class="desc-note mt-2">
                Biological diversity is the variety of life on earth. This includes all the different plants, animals, and microorganisms; the genes they contain; and the ecosystems they form on land and in water.
                <br>
                <br>
                Biologists, however, are always alert to levels of organization, and have identified three unique measures of life’s variation:
                The most precise and specific measure of biodiversity is genetic diversity or genetic variation within a species. This measure of diversity looks at differences among individuals within a population, or at difference across different populations of the same species.
                The level just broader is species diversity, which best fits the literal translation of biodiversity: the number of different species in a particular ecosystem or on Earth. This type of diversity simply looks at an area and reports what can be found there.
                <br>
                <br>
                Biodiversity provides us with all of our food. It also provides for many medicines and industrial products, and it has great potential for developing new and improved products for the future. Perhaps most importantly, biological diversity provides and maintains a wide array of ecological “services.” These include provision of clean air and water, soil, food and shelter. The quality—and the continuation— of our life and our economy is dependent on these “services.”
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/diversity.jpg" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">What is Species Diversity?
            </h4>
            <p class="desc-note mt-2">
                The term “Biodiversity” refers to the heterogeneity present in the world or a habitat, ranging from macromolecules within the cells to biomes. Biodiversity comprises:

                Species diversity: Variety of species and abundance of species
                Genetic diversity: Genetic variability present within the species
                Ecological diversity: Ecosystem variety present within a geographical area
                <br>
                <br>
                Diversity is greatest when all the species present are equally abundant in the area. There are two constituents of species diversity:

                Species richness: Number of different species present in an ecosystem. Tropical areas have greater species richness as the environment is conducive for a large number of species
                Species evenness: Relative abundance of individuals of each of those species.

                <br>
                <br>
                If the number of individuals within a species is fairly constant across communities, it is said to have a high evenness and if the number of individuals varies from species to species, it is said to have low evenness. High evenness leads to greater specific diversity
                It is possible in an ecosystem to have high species richness, but low species evenness.
            </p>
        </div>
    </div>
    </div>


<x-footer/>
@endsection
