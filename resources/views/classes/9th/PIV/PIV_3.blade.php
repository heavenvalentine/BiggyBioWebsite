@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/NR3779ef9yQ">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Mendelian inheritance refers to certain patterns of how traits are passed from parents to offspring.
            <br>
            <br>
            - Genome Gov
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/PIV_4">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5">Mendelian inheritance
            </h1>
            <p class="desc-note mt-2">
                Mendelian inheritance is a type of inheritance pattern that was first described by Gregor Mendel, an Austrian monk and scientist, in the 19th century. Mendelian inheritance refers to the transmission of traits and characteristics from one generation to the next in a predictable and consistent manner, according to certain rules and patterns.
                <br><br>
                Mendel discovered that certain traits and characteristics, such as the color of a plant's flowers or the shape of its seeds, are determined by discrete units called genes, which are inherited from the parents. He also found that these genes come in pairs, with one gene inherited from each parent, and that the dominant gene in the pair is the one that is expressed in the offspring.
                <br><br>
                Mendel's laws of inheritance describe how genes are passed down from one generation to the next and how they interact to determine the traits and characteristics of an individual. These laws include the law of segregation, which states that the two genes in a pair are separated during the process of reproduction, and the law of independent assortment, which states that the inheritance of one gene pair is independent of the inheritance of another gene pair.
                <br><br>
                Mendelian inheritance is an important concept in genetics, as it helps to explain how traits and characteristics are passed down from one generation to the next in a predictable and consistent manner. It has also provided a foundation for our understanding of the genetic basis of inherited traits and characteristics in humans and other organisms.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/PIV3.jpg" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Learning Objectives
            </h4>
            <p class="desc-note mt-2">
                <ol>
                <li>Know and use the vocabulary needed to discuss genetic inheritance including gene, allele, dominant, recessive, gamete, genotype, phenotype, homozygote, heterozygote, carrier</li>
                <li>Explain how chromosomal separation at meiosis leads to segregation of alleles in gametes</li>
                <li>Explain how alignment at metaphase results in independent assortment of (unlinked) genes</li>
                <li>Construct and use a Punnett square for a single trait and for two traits using appropriate terminology</li>
                <li>Determine possible offspring types and phenotypic ratios using probability rules</li>
                </ol>
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">The terminology of Mendelian inheritance
            </h4>
            <p class="desc-note mt-2">

                Gregor Mendel is famous for discovering “particulate inheritance” or the idea that hereditary elements are passed on in discrete units rather than “blended” together at each new generation.  Today we call those discrete units genes.
                <br><br>
                <ul>
                <li>A gene is a hereditary factor that determines (or influences) a particular trait.  A gene is comprised of a specific DNA sequence and is located on a specific region of a specific chromosome.  Because of its specific location, a gene can also be called a genetic locus.</li>
                <li>An allele is a particular variant of a gene, in the same way that chocolate and vanilla are particular variants of ice cream.</li>
                <li>An organism’s genotype is the particular collection of alleles found in its DNA.  An organism with two of the same alleles for a particular gene is homozygous at that locus; an organism with two different alleles for a particular gene is heterozygous at that locus.</li>
                <li>An organism’s phenotype is its observable traits.  An organism can have a heterozygous at a particular locus but have a phenotype that looks like only one of the two alleles.  This is because some alleles mask the appearance of others in a dominant/recessive pattern.</li>
                <li>A dominant allele produces its phenotype whether the organism is homozygous or heterozygous at that locus.  For example, in humans the allele for brown eyes is dominant to the allele for blue eyes, so a person who is heterozygous at the eye color locus will have brown eyes.</li>
                <li>A recessive allele produces its phenotype only when homozygous at the locus; its phenotype is masked if the locus is heterozygous.  For example, a person must have two copies of the blue eye color allele to have blue eyes.</li>
                <li>Sometimes specific recessive alleles are associated with diseases.  A person who is heterozygous for the gene will be phenotypically normal, but carry a copy of the recessive, disease-associated allele.  This person is said to be a carrier and can pass on the disease allele to his or her offspring.</li>
                </ul>
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Crosses with a single trait & the principle of segregation
            </h4>
            <p class="desc-note mt-2">
                All of the concepts above are illustrated in the types of experiments that Mendel carried out with pea plants. Pea plants aren’t a particularly exciting organism to study, but they were very useful in figuring out basic patterns of inheritance!  The reason they were so useful is that they have a lot of traits that are caused by a single gene with a simple dominant/recessive inheritance pattern (this is actually pretty rare in general – but more on that later).  So what does that statement in bold mean?  A classic example is pea shape. Peas can be either round or wrinkly, but not anything in between. Whether they are round or wrinkly is controlled by a single gene with two alleles, and the round allele is dominant to the wrinkly allele.  The inheritance pattern if you cross homozygous round and homozygous wrinkly pea plants is illustrated here:
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
