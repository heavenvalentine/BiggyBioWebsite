@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/fNQ92ZGWpOA">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            In simple terms, tissue can be defined as a group of cells with similar shape  are termed as tissues.
            <br>
            <br>
            - Aakasha Rahmi
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/LOLT_3">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Tissues
            </h1>
            <p class="desc-note mt-2">
                In simple terms, tissue can be defined as a group of cells with similar shape and function are termed as tissues. They form a cellular organizational level, intermediate between the cells and organ system. Organs are then created by combining the functional groups of tissues.
                <br>
                <br>
                The study of tissue is known as histology and study of disease-related to tissue is known as histopathology. The standard tools for studying tissues is by embedding and sectioning using the paraffin block.
            </p>

            <h4 class="subtitle-note mt-3 mb-2">Types of Animal Tissues
            </h4>
            <p class="desc-note mt-2">
                Animal tissues are grouped into four types:
                <br>
                a. Connective Tissue
                <br>
                b. Muscle Tissue
                <br>
                c. Nervous Tissue
                <br>
                d. Epithelial Tissue
                <br>
                <br>
                The collection of tissues are joined in structural units to serve a standard function of organs. The primary purpose of these four types of tissue differs depending on the type of organism.
                <br>
                <br>
                For example, the origin of the cells comprising a particular tissue type also differs.
	        </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/LOLT1C.png" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Connective Tissues
            </h4>
            <p class="desc-note mt-2">
                They are the group of tissues made up of cells separated by non-living material, called as an extracellular matrix. This tissue provides shape to the different organs and maintains their positions. For example, blood, bone, tendon, adipose, ligament and areolar tissues.
	        </p>
            <h4 class="subtitle-note mt-3 mb-2">Functions of Connective Tissue
            </h4>
            <p class="desc-note mt-2">
                The connective tissue functions by providing shape and maintains the position of different organs in the body. It functions as the primary supporting tissue of the body.
	        </p>
            <h4 class="subtitle-note mt-3 mb-2">Muscle Tissue
            </h4>
            <p class="desc-note mt-2">
                They are involved in producing force and generating motion, either for the locomotion or for other body movements within internal organs.
	        </p>
            <h4 class="subtitle-note mt-3 mb-2">Functions of Muscle Tissue
            </h4>
            <p class="desc-note mt-2">
                Muscle tissues are associated with their movements including walking, running, lifting, chewing, picking and dropping objects, etc.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
