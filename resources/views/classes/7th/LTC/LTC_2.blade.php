@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/F38BmgPcZ_I">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Scientists classify living things based on their shared traits. In addition to identifying each different kind of organism.
            <br>
            <br>
            - Generation Genius
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/LTC_3">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Classification of Living Things
            </h1>
            <p class="desc-note mt-2">
                In the 18th century, Carl Linnaeus published a system for classifying living things, which has been developed into the modern classification system. People have always given names to things that they see, including plants and animals, but Linnaeus was the first scientist to develop a hierarchal naming structure that conveyed information both about what the species was (its name) and also its closest relatives. The ability of the Linnean system to convey complex relationships to scientists throughout the world is why it has been so widely adopted.
                <br>
                <br>
                Despite existing for hundreds of years, the science of classification — taxonomy — is far from dead. Classification of many species, old and new, continues to be hotly disputed as scientists find new information or interpret facts in new ways. Arguments are fierce and species do change names, but only after a wealth of information has been gathered to support such a big step. One of the new reasons why species are being re-evaluated is because of DNA analysis. Basic genetic analysis information can change our ideas of how closely two species are related and so their classification can change, but how does the whole system work?
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/LCT2.png" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Kingdom
            </h4>
            <p class="desc-note mt-2">
                When Linnaeus first described his system, he named only two kingdoms – animals and plants. Today, scientists think there are at least five kingdoms – animals, plants, fungi, protists (very simple organisms) and monera (bacteria). Some scientists now support the idea of a sixth kingdom – viruses – but this is being contested and argued around the world.
            </p>
            <h4 class="subtitle-note mt-3 mb-2">Phylum
            </h4>
            <p class="desc-note mt-2">
                Below the kingdom is the phylum (plural phyla). Within the animal kingdom, major phyla include chordata (animals with a backbone), arthropoda (includes insects) and mollusca (molluscs such as snails). Phyla have also been developed and reorganised since the original work by Linnaeus – as scientists discover more species, more categories and subcategories are put in place.
            </p>
            <h4 class="subtitle-note mt-3 mb-2">Class
            </h4>
            <p class="desc-note mt-2">
                Each phylum is then divided into classes. Classes within the chordata phylum include mammalia (mammals), reptilia (reptiles) and osteichthyes (fish), among others.
            </p>
            <h4 class="subtitle-note mt-3 mb-2">Order
            </h4>
            <p class="desc-note mt-2">
                The class will then be subdivided into an order. Within the class mammalia, examples of an order include cetacea (including whales and dolphins), carnivora (carnivores), primates (monkeys, apes and humans) and chiroptera (bats).
            </p>
            <h4 class="subtitle-note mt-3 mb-2">Family
            </h4>
            <p class="desc-note mt-2">
                From the order, the organism will be classified into a family. Within the order of primates, families include hominidae (great apes and humans), cercopithecidae (old world monkeys such as baboons) and hylobatidae (gibbons and lesser apes).
            </p>
            <h4 class="subtitle-note mt-3 mb-2">Genus and species
            </h4>
            <p class="desc-note mt-2">
                Finally, the classification will come to the genus (plural genera) and species. These are the names that are most commonly used to describe an organism. One outstanding feature of the Linnean classification system is that two names are generally sufficient to differentiate from one organism to the next. An example within the primate family is the genus Homo for all human species (for example, Homo sapiens) or Pongo for the genus of orangutan (for example, Pongo abelii for the Sumatran orangutan or Pongo pygmaeus for the Bornean orangutan).
            </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
