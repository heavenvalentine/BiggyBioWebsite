@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/aMpzu3xpJYc">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Movement is when the living organism moves a body part or parts to bring without a change in the position of the organisms.
            <br>
            <br>
            - Felix Frank
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/LM_2">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Types Of Body Movements
            </h1>
            <p class="desc-note mt-2">
                "Types of body movements" refers to the different ways in which the body can move. The body is able to move due to the presence of joints, which are points where two bones meet. Different types of body movements are possible depending on the type of joint and the range of motion it allows. Some examples of body movements include flexion, extension, abduction, adduction, rotation, circumduction, dorsiflexion, plantarflexion, inversion, and eversion. These movements can be performed by various parts of the body, such as the limbs, neck, and waist.
                <br>
                <br>
                The muscles in the body produce movement by contracting and relaxing. When a muscle contracts, it shortens in length and pulls on the bone or structure it is attached to, causing it to move. When a muscle relaxes, it returns to its original length and the movement stops.
                <br>
                <br>
                Different types of body movements are made possible by the arrangement and action of muscles, bones, and joints in the body. For example, flexion and extension movements occur at hinge joints, such as the elbow and knee, where the bones can only move in a back and forth motion. Abduction and adduction movements occur at gliding joints, such as the shoulder and hip, where the bones can slide over each other. Rotation movements occur at pivot joints, such as the neck and waist, where the bones can rotate around a central point.
                <br>
                <br>
                The muscles responsible for producing a particular movement are often located on opposite sides of a joint. For example, the biceps and triceps muscles work together to produce flexion and extension at the elbow joint. When the biceps contract, they cause the elbow to flex (bend). When the triceps contract, they cause the elbow to extend (straighten).

            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/LM1.jpe" class="w-75" " alt="" srcset="">
                <br>
                <br>
                <br>
                <img src="asset/img/LM_1.jpe" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Flexion/extension
            </h4>
            <p class="desc-note mt-2">
                The opposing movements of flexion and extension take place in sagittal directions around a frontal/coronal axis. Flexion, or bending, involves decreasing the angle between the two entities taking part in the movement (bones or body parts). In contrast, extension, or straightening, involves increasing the respective angle.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Protrusion/retrusion
            </h4>
            <p class="desc-note mt-2">
                The movements of protrusion and retrusion take place in the sagittal plane. Since they are also related to the frontal/coronal axis, but instead of only moving around it, these movements are also taking place parallel to it. Protrusion involves a movement going straight ahead or forward.
                <br>
                <br>
                Retrusion is the opposite and involves going backwards. Anatomical structures capable of such actions are the tongue, chin (mandible) and lips.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
