@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/Axj4PJFoGjA">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            "A virus is a substance or a transitional form between living things (living things) and non-living things."
            <br>
            <br>
            - Merry Riana
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/V_3">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Classification Of Viruses
            </h1>
            <p class="desc-note mt-2">
            Virus classification is divided into several groups. This is the full discussion.
            <br>
            <br>
            <strong> 1. Based on the content of nucleic acids </strong>
            <br>
            -Ribovirus or RNA virus: a virus whose nucleic acid is made up of RNA. For example Tobacco Mosaic Virus.
            <br>
            -Deoxyribovirus or DNA virus: a virus whose nucleic acid is derived from DNA. For example Herpes Simplex Virus.
            <br>
            <br>
            <strong>  2. Based on the basic </strong>
            <br>
            -shape of the icosahedral virus: This type of virus has a spatial shape that is limited to 20 triangles with equal sides. In the virus has a form of double rotation. Examples of these viruses are polio and adenovirus.
            <br>
            -Helical shaped virus: This virus is like a long rod, the nucleocapsid is not rigid, has a helical shape, and has one axis of rotation. Viral RNA is shown above. Examples are the influenza virus and the Tobacco Mosaic Virus (TMV).
            <br>
            -Complex virus: As the name suggests, this type of virus has a very complex and more complete structure. An example of this virus is the Poxyvirus. READ ALSO 10 Differences between Animal Cells and Plant Cells with Pictures
            <br>
            <br>
            <strong>  3. Based on the envelope that envelops the nucleoplastid </strong>
            <br>
            - Enveloped or enveloped viruses: that is, viruses that have nucleoplastids have envelopes of lipoproteins and glycoproteins. For example Poxyvirus, Togovirus, Retrovirus, and so on.
            <br>
            -Naked virus: a type of virus whose nucleoplastid does not have an envelope or coating. Examples are Adenovirus, Reovirus, Papovirus, and
            <br>
            <br>
            <strong> 4. Based on the number of capsomeres</strong>
            <br>
            The virus has 252 capsomeres, like Adenovirus. Viruses with 162 capsomeres, such as Herpesvirus. Viruses with 72 capsomeres, such as Papovavirus. Viruses with 60 capsomeres, such as Picornavirus. Viruses with 32 capsomeres, such as Parvovirus.
            <br>
            <br>
            <strong>5. Based on host cells Viruses</strong>
            <br>
            Viruses that attack humans, such as HIV. Viruses that attack animals, such as rabies. Viruses that attack plants, such as TMV. Viruses that attack bacteria, such as the T virus (bacteriophage).
            <br>
            <br>
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/Proses_replikasi_virus-2021_09_22-17_10_23_3f8649ffe27be36176d381734aa9cb86.webp" class="w-75" " alt="" srcset="">
            </div>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
