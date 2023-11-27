@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/3HV55QRPRPE">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            The skeletal system is the body system that provides support and protection for the body, as well as allowing movement.
            <br>
            <br>
            - Jordan Bleu
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/LM_4">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Skeletal System and Fuctions
            </h1>
            <p class="desc-note mt-2">
                The skeletal system is a vital component of the human body that serves several important functions. It provides support and protection for the body, allowing it to stand upright and move around. The bones of the skeletal system protect vital organs, such as the brain, heart, and lungs. They also provide attachment points for muscles, which allow the body to move in various ways. In addition to these functions, the bones of the skeletal system also store minerals, such as calcium and phosphorus, which are important for maintaining healthy bones and teeth. The bone marrow in the bones of the skeletal system is responsible for producing red and white blood cells.
                <br><br>
                The skeletal system is made up of bones, cartilage, and other connective tissues. The bones are connected to each other by joints, which allow for movement. The bones are also covered by a layer of cartilage, which helps to protect the bones and reduce friction at the joints. The connective tissues, such as tendons and ligaments, help to hold the bones together and provide support.
                <br><br>
                The skeletal system is an important component of the musculoskeletal system, which also includes the muscles and connective tissues. Together, these systems work to support and move the body. The muscles are responsible for moving the bones, and they are attached to the bones by tendons. The connective tissues, such as ligaments and tendons, help to hold the bones and muscles together and provide support.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/LM3.png" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">What are the parts of the skeletal system?
            </h4>
            <p class="desc-note mt-2">
                The skeletal system is a network of many different parts that work together to help you move. The main part of your skeletal system consists of your bones, hard structures that create your body’s framework — the skeleton. There are 206 bones in an adult human skeleton. Each bone has three main layers:
                <br>
                <ol>
                    <li>Periosteum: The periosteum is a tough membrane that covers and protects the outside of the bone.</li>
                    <li>Compact bone: Below the periosteum, compact bone is white, hard, and smooth. It provides structural support and protection.</li>
                    <li>Spongy bone: The core, inner layer of the bone is softer than compact bone. It has small holes called pores to store marrow.</li>
                </ol>
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">What are some common conditions that can affect the skeletal system?
            </h4>
            <p class="desc-note mt-2">
                Many conditions can affect the bones, joints, and tissues that make up the skeletal system. Some happen as a result of disease or injury. Others develop due to wear and tear as you get older. Conditions that may affect the skeletal system can include:
                <br>
                <ol>
                    <li>Arthritis: Age, injury, and medical conditions such as Lyme disease can lead to arthritis, a painful wearing down of joints.</li>
                    <li>Fracture: Disease, a tumor, or trauma can put stress on a bone, causing it to break.</li>
                    <li>Osteosarcoma: Cancer that forms in the bones can cause tumors that may weaken and break bones.</li>
                    <li>Osteoporosis: Bone loss caused by not getting enough calcium can lead to fragile and brittle bones, known as osteoporosis.</li>
                    <li>Sprains and tears: Age, disease and trauma can cause connective tissue to overstretch and tear.</li>
                </ol>
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
