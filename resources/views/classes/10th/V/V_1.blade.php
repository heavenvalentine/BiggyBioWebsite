@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/kufvGibHWTM">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            "Viruses are the smallest organisms that are parasitic and can cause disease by infecting humans, animals, plants, fungi, and even bacteria.".
            <br>
            <br>
            - Rahetha Sartya
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/V_2">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Virus Explanation
            </h1>
            <p class="desc-note mt-2">
            Viruses are the smallest organisms that are parasitic and can cause disease by infecting humans, animals, plants, fungi, and even bacteria. Viruses are composed of a head containing DNA or RNA, a capsid, virions and a tail. Viruses are smaller than bacteria, which is around 20-300 nm
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/corona-virus-116_v-variantBig16x9_wm-true_zc-ecbbafc6.webp" class="w-75" " alt="" srcset="">
                <br>
                <br>
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Feature Viruses
            </h4>
            <p class="desc-note mt-2">
            Viruses have characteristics that distinguish them from other organisms. The following are the characteristics of a virus that can be recognized:
            <br>
            <br>

1. Having only RNA or DNA genetic material.
<br>
2. Does not have cells or is acellular.
<br>
3. Smaller than bacteria.
<br>
4. Has a variety of shapes.
<br>
5. Can only be seen using an electron microscope.
<br>
6. Can be crystallized.
<br>
7. Requires nucleic acid to reproduce.
<br>
8. Does not have cytoplasm.
<br>
9. Not doing metabolic activity.
<br>
<br>
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">A Brief History of the Discovery of Viruses
            </h4>
            <p class="desc-note mt-2">
            There are three people who can be regarded as the inventors of the virus, namely Adolf Eduard Mayer, Dmitri Ivanovsky, Martinus Beijerinck.

Historical records show that Adolf Meyer, a scientist from Germany, found a virus attack on tobacco leaves, with symptoms of spots and mottled colors like a mosaic on the leaves. At this time, the term "virus" was not yet known and used officially.

Then in 1982, Ivanoski showed that the sap from infected tobacco plants could still be transmitted to healthy tobacco plants even though it had been filtered.

The term "virus" was recently discovered by Martinus Beijerinck. The term virus was coined by Beijerinck after demonstrating that tobacco mosaic disease is caused by an infectious agent much smaller than bacteria.

Beijerinck was the first to realize that viruses reproduce entities that are different from other organisms. Beijerinck stated that the virus is slightly fluid in nature, calling it a "contagium vivum fluidum" (living infectious fluid).

He also discovered a new type of bacteria from the soil and explained biological nitrogen fixation (the conversion of nitrogen gas to ammonium, a form that can be used by plants).

Because of this contribution, Martinus Beijerinck is also called the Father of the World Virus.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
