@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/gSW2ryFmihk">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            The human body is a well-oiled machine that has numerous components and functions.
            <br>
            <br>
            - Albern Cedric
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/PlP_1">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Disorders Of Muscular and Skeletal System In the Human Body
            </h1>
            <p class="desc-note mt-2">
                Disorders of the musculoskeletal system are conditions that can cause problems in the muscles, bones, joints, ligaments, or nerves associated with these systems. Some examples of disorders of the musculoskeletal system that commonly occur are:
                <br><br>
                Osteoarthritis: is a type of arthritis caused by damage to the joint cartilage. Symptoms include pain, stiffness, and weakness in the affected joints.
                <br><br>
                Rheumatoid arthritis: is an autoimmune type that causes inflammation in the joints which can cause pain, stiffness, and weakness.
                <br><br>
                Osteoporosis: is a condition in which bones become brittle and break easily. This is caused by a deficiency of calcium and vitamin D in the body.
                <br><br>
                Tendinitis: is an inflammation of the tendons, which are the connective tissues that connect muscles to bones. Symptoms include pain in the affected joint with movement.
                <br><br>
                Fibromyalgia: is a condition characterized by general musculoskeletal pain that spreads throughout the body. The exact cause of fibromyalgia is still not known for sure.
                <br><br>
                Treatment includes disorders of the musculoskeletal and skeletal systems which can vary depending on the cause and can be physical therapy, medication, or surgical intervention.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/LM5.jpg" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Muscular System Diseases
            </h4>
            <p class="desc-note mt-2">
                Here are some commonly found muscular system disorders -
                <ul>
                <li>Sprain and Strain</li>

                These are among the most common muscular system disorders. Sprain often occurs due to ligament injury or twist of joints; however, in such cases there is no dislocation of the joint. On the other hand, when compared to sprain, a strain is relatively less painful.

                <li>Tetany</li>

                It is mostly recognised as the uncontrollable twitching of muscles and is often caused due to nutritional deficiencies, nervous system disorder or infections.

                <li>Muscular Dystrophy</li>

                Typically, it is a genetic disorder which causes progressive deterioration of muscles and makes them weak. Over the years, it makes one lose the ability to move or make smooth gestures.

                <li>Myasthenia Gravis</li>

                It is an autoimmune disease wherein antibodies affect one’s nerves and hamper the ability to generate muscular contractions. The muscles of the neck and face are said to be affected the most.
                </ul>
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Skeletal Muscle Diseases
            </h4>
            <p class="desc-note mt-2">
                These are some common skeletal muscle disorders -
                <ul>
                <li>Arthritis</li>

                It is most commonly found among the elderly and is mostly classified as a disease of joints. Typically, there are several types of arthritis like rheumatoid, osteoarthritis, gouty arthritis and infectious arthritis. Notably, the cause for each of arthritis tends to differ from the others.

                <li>Osteoporosis</li>

                A low rate of mineral density in bones is often the cause of osteoporosis. It is one of those skeletal diseases and disorders which are more common in women than in men. It also makes them more prone to fractures.

                <li>Dislocation and Fracture</li>

                A break in a bone is termed as a fracture, whereas displacing a bone from its original position is dislocation. Usually, unnatural position and injury are among the major causes of fractures and dislocations.

                <li>Spondylitis</li>

                It is a group of disorders which tend to affect the spine and hamper the smooth functioning of skeletal muscle.

                <li>Osteomalacia and Rickets</li>

                Osteomalacia is caused due to vitamin D deficiency in adults, while rickets occurs because of the same in children. Also, the lack of adequate calcium and phosphorus in bones can lead to these diseases.
                </ul>
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
