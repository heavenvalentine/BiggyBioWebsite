@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/uBGl2BujkPQ">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            The human organism consists of eleven organ systems.
            <br>
            <br>
            - Mersi Limay
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/LOLT_4">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Organs and Systems of the Human Organism
            </h1>
            <p class="desc-note mt-2">
                An organ is a group of tissues that work together for the overall function of the organ, and an organ system is a group of organs that work together to perform a specific function. The human organism consists of eleven organ systems. They are Integumentary System, Skeletal System, Muscular System, Nervous System, Endocrine System, Cardiovascular System, Lymphatic System, Respiratory System, Digestive System, Urinary System, and Reproductive System (Female and Male).
                <br>
                <br>
                Note that some organs perform activities that directly participate in the functioning of more than one system. For example, the testes and ovaries both have an endocrine function (producing sex hormones) and a reproductive function (producing, cells called gametes that will fuse to make a new organism). Another example is the pancreas, which has an endocrine function (producing hormones) and a digestive function (producing juices that help digestion).
                <br>
                <br>
                All organ systems must work correctly for an organism, such as humans, to maintain homeostasis and health. Since all organ systems are ultimately made of ions and molecules, an understanding of the chemical and cellular organization of the body, as reviewed in this course, is needed in order to successfully master human anatomy and physiology.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/LOLT3.png" class="w-75" " alt="" srcset="">
            </div>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/LOLT3A.png" class="w-75" " alt="" srcset="">
            </div>

        </div>
    </div>
    </div>

<x-footer/>
@endsection
