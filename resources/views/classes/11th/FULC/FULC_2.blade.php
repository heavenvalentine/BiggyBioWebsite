@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/L-Xq1nyVLVQ">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Initially discovered by Robert Hooke in 1665, the cell has a rich and interesting history that has ultimately given way to many of today's scientific advancements.
            <br>
            <br>
            - Axton Auden
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/FULC_3">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Discovery of Cells
            </h1>
            <p class="desc-note mt-2">
                Although they are externally very different, internally, an elephant, a sunflower, and an amoeba are all made of the same building blocks. From the single cells that make up the most basic organisms to the trillions of cells that constitute the complex structure of the human body, each and every living being on Earth is comprised of cells. This idea, part of the cell theory, is one of the central tenants of biology. Cell theory also states that cells are the basic functional unit of living organisms and that all cells come from other cells. Although this knowledge is foundational today, scientists did not always know about cells.
                <br><br>
                The discovery of the cell would not have been possible if not for advancements to the microscope. Interested in learning more about the microscopic world, scientist Robert Hooke improved the design of the existing compound microscope in 1665. His microscope used three lenses and a stage light, which illuminated and enlarged the specimens. These advancements allowed Hooke to see something wondrous when he placed a piece of cork under the microscope. Hooke detailed his observations of this tiny and previously unseen world in his book, Micrographia. To him, the cork looked as if it was made of tiny pores, which he came to call “cells” because they reminded him of the cells in a monastery.
                <br><br>
                In observing the cork’s cells, Hooke noted in Micrographia that, “I could exceedingly plainly perceive it to be all perforated and porous, much like a Honey-comb, but that the pores of it were not regular… these pores, or cells,…were indeed the first microscopical pores I ever saw, and perhaps, that were ever seen, for I had not met with any Writer or Person, that had made any mention of them before this…”
                <br><br>
                Not long after Hooke’s discovery, Dutch scientist Antonie van Leeuwenhoek detected other hidden, minuscule organisms—bacteria and protozoa. It was unsurprising that van Leeuwenhoek would make such a discovery. He was a master microscope maker and perfected the design of the simple microscope (which only had a single lens), enabling it to magnify an object by around two hundred to three hundred times its original size. What van Leeuwenhoek saw with these microscopes was bacteria and protozoa, but he called these tiny creatures “animalcules.”
                <br><br>
                Van Leeuwenhoek became fascinated. He went on to be the first to observe and describe spermatozoa in 1677. He even took a look at the plaque between his teeth under the microscope. In a letter to the Royal Society, he wrote, "I then most always saw, with great wonder, that in the said matter there were many very little living animalcules, very prettily a-moving.”
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/discover.jpg" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Who Discovered Cells?
            </h4>
            <p class="desc-note mt-2">
                Cells are the basic structural and functional unit of life. The term “cells” was first coined in 1665 by a British scientist Robert Hooke. He was the first person to study living things under a microscope and examined a thin slice of cork under a microscope and observed honeycomb-like structures. Robert Hooke called these structures as cells.
                <br><br>
                Soon after this Antonie Van Leuwenhoek made further discoveries by inventing his own microscope lenses that were more powerful than the microscopes of his time. He was the first person to observe human cells and bacteria under his microscope.
                <br><br>
                With the advancements in microscopes, more discoveries were made about cells. However, with the help of a light microscope, it became difficult to visualise the minute structures inside the cells. As a result, a more powerful microscope, known as the electron microscope was invented that made it easier to observe objects smaller than cells.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Discovery of Stem Cells
            </h4>
            <p class="desc-note mt-2">
                The stem cells were discovered by Martin Evans and Matt Kauffman. They identified, isolated and cultured the embryonic stem cells from a mouse blastocyst in 1981. Later, James Thomson and his subordinates isolated the embryonic stem cells from a human blastocyst. This helped the scientists to generate the building blocks of the human body in unlimited amounts. The discovery made it possible to have cell types for therapeutic purposes and new transplantation methods that were impossible in earlier times.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
