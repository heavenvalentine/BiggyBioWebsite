@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/0dAoCfgAQw8">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
        "Viruses are the smallest infectious agents having a diameter of about 20 to 300 nano meters".
            <br>
            <br>
            - Satya Wharsa
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/V_4">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> List Of Viral Diseases
            </h1>
            <p class="desc-note mt-2">
            <strong> Flu </strong>
            <br>
            Flu or influenza is a viral infection that attacks the nose, throat and lungs. Common symptoms include cough, headache, fever, runny nose and stuffy nose. A mild cold can be overcome by getting plenty of rest, eating healthy foods that contain vitamin C, and drinking lots of mineral water.
            <br>
            <br>
            <strong> Dengue fever </strong>
            <br>
            The dengue virus that causes dengue fever comes from the bites of Aedes aegypti and Aedes albopictus mosquitoes. Symptoms include headaches, chills, and red patches on the skin for 24 to 72 hours. Sufferers experience decreased platelet levels and in severe conditions can cause bleeding that leads to death.
            <br>
            <br>
            <strong> Polio </strong>
            <br>
            Polio is a viral infectious disease that attacks the central nervous system, causing paralysis of the legs, infecting the lining of the brain and spinal cord. Symptoms that appear include fever, headache, sore throat, vomiting, muscle weakness, stiffness in the neck or back, pain, and numbness in the arms or legs.
            <br>
            <br>
            <strong> Hepatitis </strong>
            <br>
            Hepatitis B and C viruses attack the liver and spread through bodily fluids such as blood and sperm of sufferers who have been infected with these viruses. Generally, people with viral hepatitis do not show symptoms for years and the way to find out is to do a blood test diagnosis.
            <br>
            <br>
            <strong> AIDS </strong>
            <br>
            HIV (Human Immunodeficiency Virus) is a virus that damages the immune system by infecting and destroying CD4 cells. The HIV virus is found in human bodily fluids such as blood, semen, fluids produced by the vagina, and other bodily fluids from sufferers. If not treated immediately will develop into the final stages called AIDS (Acquired Immune Deficiency Syndrome). Symptoms that appear include high fever, skin rash, vomiting, joint or muscle pain, headache, stomach ache, sore throat and canker sores. Be aware of the spread of the HIV virus, which is transmitted through sexual contact with HIV sufferers or HIV-infected mothers to their babies.
            <br>
            <br>
    </p>
    <div class="desc-note mt-2 text-center">
        <img src="asset/img/Penyakit-akibat-VIRUS.jpg" class="w-75" " alt="" srcset="">
    </div>
    </div>
    </div>

<x-footer/>
@endsection
