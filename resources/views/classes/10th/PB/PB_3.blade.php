@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/cRCck4niz5o">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            "Kingdom is the highest taxon because kingdom has more taxa than other plant taxa."
            <br>
            <br>
            - Holirdra
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/PB_4">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Classification of Plants
            </h1>
            <p class="desc-note mt-2">
            <strong> Kingdom or empire </strong>
            <br>
            Kingdom is the highest taxon because kingdom has more taxa than other plant taxa. In this world, the kingdom is divided into six, namely animalia or animals, plantae, fungi or mushrooms, protists, monera or unicellular without a nucleus, and eukaryotic with simple tissues.
            <br>
            <br>
            <strong> Division or division </strong>
            <br>
            The division level is one level below the kingdom. The division in plants has three classes in it, namely pteridophyta (ferns), spermatophyta (seed plants), bryophyta (moss plants).
            <br>
            <br>
            Pteridophyta (ferns) is a division of the kingdom plantae, ferns consist of roots, stems, true leaves, and vessels. Spermatophyta (seed plants) are plants that have a seed. Seeds are part of the ovule which contains new individual candidates. Bryophyta (moss plants) are plants that are usually green in color, grow on land, and the largest size is 50 cm.
            <br>
            <br>
            <strong> Class or class </strong>
            <br>
            The next order of taxon is class. This taxon is under division taxon and above order taxon. Plant names have different endings, the name categorizes plants based on their class.
            <br>
            <br>
            Class taxon names include –edoneae (closed seed plants); -opsida (for mosses); phyceae (for algae); and others. For example, the class name in the division bryophyta (moss plants) is divided into three classes, namely hepaticopsida (liverworts), anthocerotopsida (hornworts), and bryopsida (leaf mosses).
            <br>
            <br>
            <strong> Order or nation </strong>
            <br>
            After knowing the members of the taxon in the class, then settle down again to become a national taxon in order to find out the similarities in the special characteristics of plants.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/366753239.jpg" class="w-75" " alt="" srcset="">
            </div>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
