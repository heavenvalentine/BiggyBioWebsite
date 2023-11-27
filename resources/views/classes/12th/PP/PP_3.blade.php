@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/EZ5tU45Ti_g">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Plant Growth and Development involves study of the control and coordination of processes in cells, organs, and/or whole plants.
            <br>
            <br>
            - Oregon State University
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/PIV_1">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Plant Growth and Development
            </h1>
            <p class="desc-note mt-2">
                These are the phases of plant growth:
                <br><br>
                Formative Phase
                During the formative phase of growth, growth is dominated by cell division. Cell division leads to a rise of new daughter cells from pre-existing parent cells. Plant cells divide by the process of mitosis, where identical cells are created. It is carried out in two steps:
                <br><br>
                Division of Nucleus or Karyokinesis
                Division of Cytoplasm or Cytokinesis
                In higher plants, the division of cells begins in the meristematic region.
                <br><br>
                Cell Enlargement and Differentiation
                During this stage, the newly formed cells grow in size, which results in the growth of the tissues and organs. The growth in the size of the cells is due to various factors such as absorption of water, formation and growth of vacuoles and the thickening of the cell wall.”
                <br><br>
                Cell Maturation
                During the maturing process, the cells take a definite shape and structure for a specialised function. This growth leads to the differentiation of the tissues.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/PP3.jpeg" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Factors Affecting Plant Growth
            </h4>
            <p class="desc-note mt-2">
                The important factors affecting the growth of plants include:
                <br>
                <ol>
                <li>Temperature: Growth is accelerated with the increase in temperature.</li>
                <li>Light: Light intensity, duration of light and the quality of light influence many physiological processes occurring in a plant.</li>
                <li>Water: Water is an essential factor for plant growth. They grow well in a sufficient amount of water. They even respond to the scarcity of water.</li>
                <li>Soil Nutrients: Plants require an adequate amount of nutrients for proper growth. The quality and quantity of nutrients affect plant growth.</li>
                <li>Plant Growth Regulators: Various plant growth regulators such as auxin, cytokinin, gibberellins, etc. are added to plants to regulate their growth.</li>
                </ol>
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Development
            </h4>
            <p class="desc-note mt-2">

                The development includes all the changes that take place during the life cycle of a plant. There are different pathways followed by plants in response to the environment and form different structures. The leaves of a young plant have different structures as compared to the mature plant.
                <br><br>
                Development is the sum total of growth and differentiation. It is regulated by extrinsic and intrinsic factors.
                <br><br>
                Growth, differentiation, and development are closely related events. A plant cannot develop if the cells do not grow and differentiate.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
