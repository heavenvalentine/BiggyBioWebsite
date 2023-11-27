@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/Jvtb0a2RXaY">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Connective tissue is made up of cells, fibers, and a gel-like substance.
            <br>
            <br>
            - Cancer.gov
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/ATT_3">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Connective tissue
            </h1>
            <p class="desc-note mt-2">
                Connective tissue is one of the four primary types of animal tissue, along with epithelial tissue, muscle tissue, and nervous tissue.[1] It develops from the mesenchyme derived from the mesoderm the middle embryonic germ layer.[2] Connective tissue is found in between other tissues everywhere in the body, including the nervous system. The three meninges, membranes that envelop the brain and spinal cord are composed of connective tissue. Most types of connective tissue consists of three main components: elastic and collagen fibers, ground substance, and cells.[2] Blood, and lymph are classed as specialized fluid connective tissues that do not contain fiber.[2][3] All are immersed in the body water. The cells of connective tissue include fibroblasts, adipocytes, macrophages, mast cells and leucocytes.
                <br><br>
                The term "connective tissue" (in German, Bindegewebe) was introduced in 1830 by Johannes Peter Müller. The tissue was already recognized as a distinct class in the 18th century.
                <br><br>
                Connective tissue proper consists of loose connective tissue and dense connective tissue (which is further subdivided into dense regular and dense irregular connective tissues.)[8] Loose and dense connective tissue are distinguished by the ratio of ground substance to fibrous tissue. Loose connective tissue has much more ground substance and a relative lack of fibrous tissue, while the reverse is true of dense connective tissue. Dense regular connective tissue, found in structures such as tendons and ligaments, is characterized by collagen fibers arranged in an orderly parallel fashion, giving it tensile strength in one direction. Dense irregular connective tissue provides strength in multiple directions by its dense bundles of fibers arranged in all directions.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/connec.png" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Special connective tissue
            </h4>
            <p class="desc-note mt-2">
                Special connective tissue consists of reticular connective tissue, adipose tissue, cartilage, bone, and blood.[9] Other kinds of connective tissues include fibrous, elastic, and lymphoid connective tissues.[10] Fibroareolar tissue is a mix of fibrous and areolar tissue.[11] Fibromuscular tissue is made up of fibrous tissue and muscular tissue. New vascularised connective tissue that forms in the process of wound healing is termed granulation tissue.[12] All of the special connective tissue types have been included as a subset of fascia in the fascial system.[13][14]
                <br><br>
                Bone and cartilage can further be grouped into supportive connective tissue. Blood and lymph can further be classed as fluid connective tissues.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Membranes
            </h4>
            <p class="desc-note mt-2">
                Membranes can be either of connective tissue or epithelial tissue. Connective tissue membranes include the meninges (the three membranes covering the brain and spinal cord) and synovial membranes that line joint cavities.[17] Mucous membranes and serous membranes are epithelial with an underlying layer of loose connective tissue.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
