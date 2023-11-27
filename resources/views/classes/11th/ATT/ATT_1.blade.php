@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/P3714_a3l0w">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Epithelium or epithelial tissue is one of the four basic types of animal tissue, along with connective tissue, muscle tissue and nervous tissue.
            <br>
            <br>
            - Cain Cairo
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/ATT_2">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Epithelium or epithelial tissue
            </h1>
            <p class="desc-note mt-2">
                Epithelium or epithelial tissue is one of the four basic types of animal tissue, along with connective tissue, muscle tissue and nervous tissue. It is a thin, continuous, protective layer of compactly packed cells with a little intercellular matrix. Epithelial tissues line the outer surfaces of organs and blood vessels throughout the body, as well as the inner surfaces of cavities in many internal organs. An example is the epidermis, the outermost layer of the skin.
                <br><br>
                There are three principal shapes of epithelial cell: squamous (scaly), columnar, and cuboidal. These can be arranged in a singular layer of cells as simple epithelium, either squamous, columnar, or cuboidal, or in layers of two or more cells deep as stratified (layered), or compound, either squamous, columnar or cuboidal. In some tissues, a layer of columnar cells may appear to be stratified due to the placement of the nuclei. This sort of tissue is called pseudostratified. All glands are made up of epithelial cells. Functions of epithelial cells include diffusion, filtration, secretion, selective absorption, germination, and transcellular transport. Compound epithelium has protective functions.
                <br><br>
                Epithelial layers contain no blood vessels (avascular), so they must receive nourishment via diffusion of substances from the underlying connective tissue, through the basement membrane.[1][2]: 3  Cell junctions are especially abundant in epithelial tissues.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/epit.jpg" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Simple epithelium
            </h4>
            <p class="desc-note mt-2">
                Simple epithelium is a single layer of cells with every cell in direct contact with the basement membrane that separates it from the underlying connective tissue. In general, it is found where absorption and filtration occur. The thinness of the epithelial barrier facilitates these processes.[3]
                <br><br>
                Summary showing different epithelial cells/tissues and their characteristics.
                In general, epithelial tissues are classified by the number of their layers and by the shape and function of the cells.[1][3][4] The basic cell types are squamous, cuboidal, and columnar, classed by their shape.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Stratified epithelium
            </h4>
            <p class="desc-note mt-2">
                Stratified or compound epithelium differs from simple epithelium in that it is multilayered. It is therefore found where body linings have to withstand mechanical or chemical insult such that layers can be abraded and lost without exposing subepithelial layers. Cells flatten as the layers become more apical, though in their most basal layers, the cells can be squamous, cuboidal, or columnar.[11]
                Stratified epithelia (of columnar, cuboidal, or squamous type) can have the following specializations
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
