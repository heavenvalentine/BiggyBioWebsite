@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/b2PCJ5s-iyk">
        </iframe>
        {{-- <video controls style="width: 500px" poster="asset/img/thumbnail.png" class="vid mt-5">
            <source src="https://drive.google.com/uc?export=download&id=1llst4BwWwbYwuIr12pdCGO46VZl7Hl7v" type='video/mp4'>
        </video> --}}
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Many organisms (bacteria) and parts of organisms (cells) that biologists study are too small to be seen with the human eye.
            <br>
            <br>
            - Lumen
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/LTC_4">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Microscope
            </h1>
            <p class="desc-note mt-2">
                Many organisms (bacteria) and parts of organisms (cells) that biologists study are too small to be seen with the human eye. We use microscopes to enlarge specimens for our investigation. The word microscope means “to see small” and the first primitive microscope was created in 1595.
                <br>
                <br>
                There are several types of microscopes but you will be mostly using a compound light microscope. This type of microscope uses visible light focused through two lenses, the ocular and the objective, to view a small specimen. Only cells that are thin enough for light to pass through will be visible with a light microscope in a two dimensional image.
                <br>
                <br>
                Another microscope that you will use in lab is a stereoscopic or a dissecting microscope. This type of microscope uses visible light view thicker, larger specimens, such as an insect, in 3D. Since you are viewing larger samples, the magnification range of the dissecting microscope is lower than the compound light microscope.
                <br>
                <br>
                Your instructor will review the parts and functions of the compound light microscopes that we will be using throughout the semester. Fill in the table on the next page to help you remember this important information. You will likely refer back to this page frequently. Here is a picture of a light microscope for you to label and take notes on.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/LCT3.jpg" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Rules and Instructions for using the Compound Light Microscopes
            </h4>
            <p class="desc-note mt-2">
                (1) Turn the revolving turret (2) so that the lowest power objective lens (eg. 4x) is clicked into position.
                Place the microscope slide on the stage (6) and fasten it with the stage clips.
                Look at the objective lens (3) and the stage from the side and turn the focus knob (4) so the stage moves upward. Move it up as far as it will go without letting the objective touch the coverslip.
                Look through the eyepiece (1) and move the focus knob until the image comes into focus.
                Adjust the condenser (7) and light intensity for the greatest amount of light.
                Move the microscope slide around until the sample is in the centre of the field of view (what you see).
                Use the focus knob (4) to place the sample into focus and readjust the condenser (7) and light intensity for the clearest image (with low power objectives you might need to reduce the light intensity or shut the condenser).
                When you have a clear image of your sample with the lowest power objective, you can change to the next objective lenses. You might need to readjust the sample into focus and/or readjust the condenser and light intensity. If you cannot focus on your specimen, repeat steps 3 through 5 with the higher power objective lens in place. Do not let the objective lens touch the slide!
                When finished, lower the stage, click the low power lens into position and remove the slide.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
