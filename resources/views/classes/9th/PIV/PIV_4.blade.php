@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/4q9skaZ8nT4">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Polygenic inheritance refers to the inheritance of a trait governed by more than one genes.
            <br>
            <br>
            - Haura Karyl
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/PIV_5">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5">What is meant by polygenic inheritance?
            </h1>
            <p class="desc-note mt-2">
                Polygenic inheritance refers to the inheritance of traits and characteristics that are determined by multiple genes, rather than a single gene. These traits and characteristics are usually continuous, meaning that they can vary across a range of values, rather than being present or absent as in the case of Mendelian traits.
                <br><br>
                Examples of polygenic traits include things like height, weight, and skin color, which are influenced by multiple genes that interact with each other and with environmental factors to determine the final trait. Polygenic traits are often complex and may be influenced by many different genetic and environmental factors, making them difficult to predict or control.
                <br><br>
                Polygenic inheritance is an important concept in genetics, as it helps to explain how traits and characteristics that are determined by multiple genes can vary across a range of values and can be influenced by a variety of genetic and environmental factors. Understanding the mechanisms of polygenic inheritance can help us to better understand the genetic basis of complex traits and characteristics in humans and other organisms.
                <br><br><br>
                Here are a few additional points about polygenic inheritance:
                <br><br>
                <ol>
                <li>Polygenic traits are often continuous, meaning that they can vary across a range of values. For example, height can vary from very short to very tall, and skin color can vary from very light to very dark. This is in contrast to Mendelian traits, which are usually present or absent, rather than varying across a range of values.</li>

                <li>The expression of polygenic traits is often influenced by environmental factors. For example, nutrition and living conditions can affect a person's height, and sun exposure can affect a person's skin color.</li>

                <li>Polygenic traits are often complex, meaning that they are influenced by multiple genes as well as environmental factors. This makes it difficult to predict or control the expression of these traits.</li>

                <li>Polygenic inheritance is important for a variety of fields, including genetics, medicine, and agriculture. Understanding the mechanisms of polygenic inheritance can help us to better understand the genetic basis of complex traits and characteristics, as well as to identify genetic risk factors for certain diseases and conditions. It can also help us to develop strategies for breeding plants and animals with desired traits and characteristics.</li>
                </ol>
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/PIV4.jfif" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Which human trait is an example of polygenic inheritance?

            </h4>
            <p class="desc-note mt-2">
                In polygenic inheritance, each allele has a cumulative or additive effect on the phenotype thus generating continuous variation, e.g. skin pigmentation, height, etc.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2"> What are 3 examples of polygenic traits?
            </h4>
            <p class="desc-note mt-2">
            Three examples of polygenic traits in humans are height, skin colour and eye colour. These traits are governed by multiple genes.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Is blood type an example of polygenic inheritance?
            </h4>
            <p class="desc-note mt-2">
                ABO blood type is an example of multiple allelism, where a single gene has three different alleles or variants (in the same locus) and an individual contains any of the two alleles. It is different from polygenic inheritance. Gene I has 3 alleles IA, IB and i. The combination of two allele pair decides the blood type.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Is eye colour polygenic inheritance?
            </h4>
            <p class="desc-note mt-2">
                Yes, eye colour is a polygenic trait. There are two major eye colour genes, OCA2 and HERC2, which are present on chromosome 15. Other than these, there are more than 13 genes identified that determine the expression of the phenotype (colour of eye). At least 9 colours of eye are recognised in humans.

                <div class="desc-note mt-2 text-center">
                    <img src="asset/img/pivv4.jfif" class="w-75" " alt="" srcset="">
                </div>
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
