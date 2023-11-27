@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/DLxYDoN634c">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            A joint or articulation (or articular surface) is the connection made between bones, ossicles.
            <br>
            <br>
            - Wikipedia
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/LM_5">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Joints In the Human Body
            </h1>
            <p class="desc-note mt-2">
                Joints are the points at which two or more bones meet in the body. They allow movement between the bones and are an important part of the skeletal system. There are several types of joints, including:
                <br>
                <br>
                <ol>
                <li>Ball and socket joints: These joints allow for a wide range of movement, such as the shoulder and hip joints.</li>
                <br>
                <li>Hinge joints: These joints allow for movement in one direction, such as the elbow and knee joints.</li>
                <br>
                <li>Pivot joints: These joints allow for rotation around a single axis, such as the neck and wrists.</li>
                <br>
                <li>Saddle joints: These joints allow for a combination of movement, such as the thumb.</li>
                <br>
                <li>Gliding joints: These joints allow for sliding movement between the bones, such as the wrist and ankle.</li>
                <br><br>
                Joints are held together by connective tissue, including ligaments and tendons, which provide support and stability. Some joints also have a layer of cartilage, which helps to reduce friction and protect the bones.
                </ol>
                <br><br>
                Proper function of the joints is important for maintaining mobility and overall health. Injuries or conditions that affect the joints, such as arthritis or osteoporosis, can cause pain and limit movement. Maintaining a healthy diet, getting enough exercise, and avoiding injuries can help to keep the joints healthy and functioning properly.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/LM4.png" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Types of Joints
            </h4>
            <p class="desc-note mt-2">
                There are several different types of joints in the body, each with its own range of movement and function. These include ball and socket joints, hinge joints, pivot joints, saddle joints, and gliding joints.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Structure of Joints
            </h4>
            <p class="desc-note mt-2">
                Joints are formed where two or more bones meet, and they are held together by connective tissue such as ligaments and tendons. Some joints also have a layer of cartilage, which helps to reduce friction and protect the bones.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Importance of Joints
            </h4>
            <p class="desc-note mt-2">
                Proper function of the joints is important for maintaining mobility and overall health. Injuries or conditions that affect the joints, such as arthritis or osteoporosis, can cause pain and limit movement. Maintaining a healthy diet, getting enough exercise, and avoiding injuries can help to keep the joints healthy and functioning properly.</p>
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Common Joint Injuries
            </h4>
            <p class="desc-note mt-2">
                Joint injuries can range from sprains and strains to more serious injuries such as fractures or dislocations. Common joint injuries include ankle sprains, knee injuries, and shoulder dislocations. Treatment for joint injuries may include rest, ice, physical therapy, and in some cases, surgery.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Preventing Joint Injuries
            </h4>
            <p class="desc-note mt-2">
                There are several steps that can be taken to reduce the risk of joint injuries. These include warming up before physical activity, using proper form and technique when exercising, wearing appropriate protective gear, and avoiding overexertion. It is also important to maintain a healthy diet and get enough exercise to keep the joints strong and flexible.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
