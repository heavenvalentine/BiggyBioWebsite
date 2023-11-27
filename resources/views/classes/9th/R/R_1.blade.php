@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/CsNWJAuTgl8">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Reproduction is necessary for living things because it enables them to create offspring and continue their population.
            <br>
            <br>
            - Christina Clara
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/R_2">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Why Do Organism Reproduce
            </h1>
            <p class="desc-note mt-2">
                Organisms reproduce to ensure the continuation of their species. Reproduction allows for the passing on of genetic material from one generation to the next, which helps to preserve the traits and characteristics of the species. In this way, reproduction helps to ensure the survival of the species by allowing it to adapt to changing environmental conditions and to compete with other species for resources. Additionally, by reproducing, organisms can also increase their numbers, which can help to increase the chances of the survival of the species as a whole.
                <br><br>
                How reproduction works in organisms depends on the type of organism concerned. In animals, reproduction usually occurs through the process of fertilization, in which the egg cell from the female individual is fertilized by the sperm cell from the male individual. After fertilization, the fertilized egg will grow into an embryo and then develop into a new individual. In plants, reproduction can occur sexually or asexually. Sexual reproduction occurs through the process of fertilization, just like in animals, while asexual reproduction occurs without the process of fertilization, for example through the process of cell division or pollination.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/R1.jpg" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">How do Organisms Reproduce?
            </h4>
            <p class="desc-note mt-2">

                The organisms reproduce in two ways:

                Asexual Reproduction– In this process, only a single parent is involved and no gamete formation takes place.

                Sexual Reproduction– In this process, two parents are involved and gamete formation takes place. Meiosis is an important step in sexual reproduction.
                <br><br>
                Explore more about Reproduction
                <br><br>
                Asexual Reproduction
                Asexual Reproduction is further divided into:
                <br><br>
                Fission
                <br><br>
                Budding
                <br><br>
                Vegetative propagation
                <br><br>
                Regeneration
                <br><br>
                Spore formation
                <br><br>
                Fission
                This process takes place in unicellular organisms. It is of two types:
                <br><br>
                Binary Fission– The organisms reproduce by binary fission only when adequate amounts of food and moisture is available. In this, the mother cell divides into two daughter cells, each containing a nucleus. Amoeba divides by binary fission.
                <br><br>
                Multiple Fission– The unicellular organisms reproduce by multiple fission when the conditions are unfavourable with no proper amounts of food, moisture, and temperature. In this, the organism forms a cyst around itself. The nucleus divides, and each daughter nuclei is surrounded by a membrane. When the conditions are favourable again, the cyst dissolves and the daughter nuclei are released, which later develops into an individual cell. Plasmodium and Entamoeba undergo this process.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Budding
            </h4>
            <p class="desc-note mt-2">
                In this process, an outgrowth is produced from the cell from which a new organism is developed. The developed organism remains attached to the parent organism and detaches only when it matures, leaving behind scar tissue. The process is prominent in yeast and hydra.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Vegetative propagation
            </h4>
            <p class="desc-note mt-2">
                In this, a new plant grows from the fragments of the parent plant or a specialized reproductive structure. The offspring are the exact clones of the original plant and there is no mixing of DNA. The common forms of vegetative propagations are grafting, layering, cutting, tuber, tissue culture, etc.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Regeneration
            </h4>
            <p class="desc-note mt-2">
                In organisms like Hydra and Planaria we had observed that if they are cut into several pieces, each part grows into a new organism. This is known as regeneration. The specialized cells proliferate and produce a large number of cells. These proliferated cells undergo changes and form different cells and tissues. The sequential process of these changes is known as development.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">HERE
            </h4>
            <p class="desc-note mt-2">
                Spore Formation
                During spore formation, the organisms form knob-like structures called a sporangium. This happens during unfavourable conditions in an inadequate supply of moisture and nutrients. When the conditions are favourable, they begin to grow.

                The sporangia contain spores that develop into new individuals. The spores are covered by thick walls that protect the spores until they come in contact with moisture and begin to grow.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Sexual Reproduction
            </h4>
            <p class="desc-note mt-2">
                Sexual reproduction is a natural way of reproduction and takes place in all multicellular organisms. This process involves two individuals to produce offspring. In this, the male and the female gametes fuse together and give rise to a new cell.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Sexual reproduction in Plants
            </h4>
            <p class="desc-note mt-2">
                The angiosperms have both the male and female reproductive organs. The pollen grains produce male gametes which fuse with the egg cell of the female. The formation of gametes is known as gametogenesis. The pollen grains are transferred from the anther to the stigma of the flower. These pollens travel through the style and reach the female gametes present in the ovule. The two gametes fuse together and this process is known as fertilization. A zygote is formed which gets converted into an embryo. These give rise to a new seed which gradually turns into a fruit.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Sexual Reproduction in Humans
            </h4>
            <p class="desc-note mt-2">
                The testes in males and the ovaries in females are responsible for the production of sperm in males and eggs in females. The sperm fuses with the egg during fertilization, which results in the formation of a zygote and gets implanted in the wall of the uterus. It further divides and forms an embryo. The embryo starts developing week by week seeking nutrition from the mother with the help of the placenta. A new individual finally forms after a period of nine months.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
