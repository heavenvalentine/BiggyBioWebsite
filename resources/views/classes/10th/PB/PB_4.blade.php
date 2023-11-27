@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/bvPM6sfidY4">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            "Transport Network in Plants Transportation in plants is absolutely necessary in the process of fulfilling nutrients in plants"
            <br>
            <br>
            - Laura Xin
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/E_1">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Transport Network in Plants
            </h1>
            <p class="desc-note mt-2">
            Transport Network in Plants
            <br>
            Transportation in plants is absolutely necessary in the process of fulfilling nutrients in plants by taking food extracts from the soil and distributing the results of photosynthesis to all parts of the plant. Two tissues that play a very important role in plant transportation are xylem and phloem which are located in every part of the plant, both roots, stems and leaves. With the fulfillment of plant needs will have a nutritional impact on optimal plant growth and development.
            <br>
            <br>
            Xylem and phloem are tube-like tissues that play a role in the transport system. Water and minerals from the soil will be absorbed by the roots, then transported through the xylem to the stems and leaves of plants. Nutrients made in the leaves will be transported through the phloem to other plant parts that require nutrients. Xylem and phloem are transport tissues whose ducts are separate. Xylem in roots is continuous with xylem in stems and leaves. Phloem is also continuous with all parts of the plant body.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/Pengangkutan-Pada-Tumbuhan.jpg" class="w-75" " alt="" srcset="">
            </div>

        </div>
    </div>
    </div>

<x-footer/>
@endsection
