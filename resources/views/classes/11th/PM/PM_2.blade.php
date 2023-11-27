@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/tj3Rr9EOxoA">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Stem, in botany, the plant axis that bears buds and shoots with leaves and, at its basal end, roots.
            <br>
            <br>
            - Bancroft Banks
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/PM_3">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Stem Of Plants
            </h1>
            <p class="desc-note mt-2">
                Stem cells are a specific type of cell capable of evolving into many different types of specialized cells within the body. There are three primary types of stem cells: embryonic stem cells are characterized as pluripotent in nature—capable of developing into the two hundred or so specialized cells of the adult organism; adult stem cells exist within certain tissues of the body (for example, blood and bone marrow) and carry out repair and regenerative functions; and induced pluripotent stem cells (iPSCs) are adult stem cells that have been genetically reprogrammed to behave like embryonic stem cells.
                <br><br>
                Due to their ability to repair, regenerate, and develop into certain specialized cell types, stem cells offer great promise as therapy for a number of diseases. Many of the Institutes and Centers of the Intramural Research Program (IRP) have a dedicated stem cell research program, including the National Heart, Lung and Blood Institute (NHLBI), National Institute of Dental Craniofacial Research (NIDCR), National Institute of Diabetes & Digestive & Kidney Diseases (NIDDK), and the National Institute of Neurological Disorders and Stroke (NINDS).
                <br><br>
                Additionally, the NIH Regenerative Medicine Program (RMP)(external link) is a resource that provides infrastructure to accelerate the clinical translation of stem cell-based therapies—at any one time, around 100 clinical trials investigating the use of stem cells as therapies are ongoing at the NIH Clinical Center.
                <br><br>
                In addition to the research programs within the IRP, the NIH Stem Cell Interest Group was established to enhance communication and collaboration among scientist interested in stem cells. Visit the Stem Cell Interest Group Web site(external link) to learn more.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/stem.jfif" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Growth and anatomy
            </h4>
            <p class="desc-note mt-2">
                The first rudiment of the young stem, or shoot, of an embryonic plant appears from the seed after the root has first protruded. The growing portion at the apex of the shoot is the terminal bud of the plant, and by the continued development of this bud and its adjacent tissues, the stem increases in height. Lateral buds and leaves grow out of the stem at intervals called nodes; the intervals on the stem between the nodes are called internodes. The number of leaves that appear at a node depends on the species of plant; one leaf per node is common, but two or more leaves may grow at the nodes of some species. When a leaf drops off a stem at the end of a growing season, it leaves a scar on the stem because of the severing of the vascular (conducting)
                <br><br>
                bundles that had connected stem and leaf. As the stem continues to grow, lateral buds are produced that develop into lateral shoots more or less resembling the parent stem, and these ultimately determine the branching of the plant. In trees the lateral shoots develop into branches, from which other lateral shoots, called branchlets, or twigs, arise. The point at which a leaf diverges in axis from a stem is called the axil. A bud formed in the axil of a previously formed leaf is called an axillary bud, and it, like the leaves, is produced from the tissues of the stem. During the development of such buds, vascular bundles are formed within them that are continuous with those of the stem.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Stem types and modifications
            </h4>
            <p class="desc-note mt-2">
                Many plants are annuals and complete their life cycles in one growing season, after which the entire plant, including the stem, dies. In biennial plants the lower part of the stem, often modified for food storage, persists after the first growing season and bears buds from which an erect stem arises during the second growing season. In perennial plants the short stem may produce new shoots for many years. Plants producing woody stems are called trees and shrubs; the latter produce branches from or near the ground, while the former have conspicuous trunks.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
