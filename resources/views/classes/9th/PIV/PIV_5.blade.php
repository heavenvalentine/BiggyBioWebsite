@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/uqtpBRLvOYA">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Inheritance is the process by which characters are passed on from parent to progeny; it is the basis of heredity. Variation is the degree by which progeny differ from their parents.
            <br>
            <br>
            - My CBSE Guide
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/B_1">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Summary Of principles of inheritance and variation
            </h1>
            <p class="desc-note mt-2">
                Gene expression: Gene expression refers to the process by which the instructions contained in a gene are used to produce a specific protein or other product. Gene expression is regulated by a variety of mechanisms, including transcription and translation, and it can be influenced by environmental factors as well as genetic factors.

                Genetic variation: Genetic variation refers to the differences in the genetic makeup of individuals within a population. Genetic variation can be caused by mutations, which are changes in the genetic material, or by the shuffling of genetic material that occurs during the process of reproduction. Genetic variation is important for evolution, as it provides the raw material for natural selection to act upon.

                Genetic drift: Genetic drift is a process that can lead to changes in the frequency of genes in a population due to chance events, rather than because of natural selection. Genetic drift can lead to the loss of genetic diversity within a population, which can have negative consequences for the population's ability to adapt to changing environmental conditions.

                Inbreeding: Inbreeding is the mating of individuals who are closely related, such as siblings or cousins. Inbreeding can lead to the expression of recessive traits that are not normally observed in a population, as well as to an increased risk of genetic disorders and other health problems.
                <br><br>
                Hybridization: Hybridization refers to the mating of individuals from different populations or species. Hybridization can lead to the creation of new genetic combinations, which can be beneficial for a population's ability to adapt to changing environmental conditions. However, it can also lead to the loss of genetic diversity within a population if hybrid individuals are unable to breed with individuals from either of the parent populations.

                Heredity: Heredity refers to the process by which traits and characteristics are passed down from one generation to the next.

                Genetics: Genetics is the study of how traits and characteristics are passed down from one generation to the next, and it helps us to understand the mechanisms behind heredity.

                DNA: DNA is a molecule that contains the genetic instructions for the development and function of all living organisms.

                Variation: Variation refers to the differences that exist among individuals within a particular species, and it can be caused by a variety of factors, including genetics, environment, and chance.
                <br><br>
                Evolution: Evolution is the process by which populations of organisms change over time in response to changing environmental conditions and selective pressures.

                Mendelian inheritance: Mendelian inheritance refers to the transmission of traits and characteristics in a predictable and consistent manner, according to certain rules and patterns.

                Polygenic inheritance: Polygenic inheritance refers to the inheritance of traits and characteristics that are determined by multiple genes, rather than a single gene. These traits and characteristics are often continuous, meaning that they can vary across a range of values, and are often influenced by environmental factors.

                Gene expression: Gene expression refers to the process by which the instructions contained in a gene are used to produce a specific protein or other product.

                Genetic variation: Genetic variation refers to the differences in the genetic makeup of individuals within a population.

                Genetic drift: Genetic drift is a process that can lead to changes in the frequency of genes in a population due to chance events, rather than because of natural selection.

                Inbreeding: Inbreeding is the mating of individuals who are closely related, such as siblings or cousins.

                Hybridization: Hybridization refers to the mating of individuals from different populations or species.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/PIV5.png" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">The processes of inheritance and variation
            </h4>
            <p class="desc-note mt-2">
                There are several principles that are important for understanding the processes of inheritance and variation in living organisms. These principles include:
                <br><br>
                <ol>
                <li>Heredity: Heredity refers to the process by which traits and characteristics are passed down from one generation to the next. Heredity is mediated by genes, which are the units of heredity that contain the instructions for the development and function of an organism.</li>

                <li>Genetics: Genetics is the study of how traits and characteristics are passed down from one generation to the next, and it helps us to understand the mechanisms behind heredity.</li>

                <li>DNA: DNA is a molecule that contains the genetic instructions for the development and function of all living organisms. The specific sequence of nucleotides in a DNA molecule determines the genetic code for an individual.</li>

                <li>Variation: Variation refers to the differences that exist among individuals within a particular species, and it can be caused by a variety of factors, including genetics, environment, and chance.</li>

                <li>Evolution: Evolution is the process by which populations of organisms change over time in response to changing environmental conditions and selective pressures. Evolution can lead to the development of new species through the process of speciation, and it is driven by the mechanisms of natural selection.</li>

                <li>Mendelian inheritance: Mendelian inheritance refers to the transmission of traits and characteristics in a predictable and consistent manner, according to certain rules and patterns. Mendelian inheritance is determined by discrete units called genes, which are inherited in pairs, with one gene inherited from each parent.</li>

                <Li>Polygenic inheritance: Polygenic inheritance refers to the inheritance of traits and characteristics that are determined by multiple genes, rather than a single gene. These traits and characteristics are often continuous, meaning that they can vary across a range of values, and are often influenced by environmental factors.</li>
                </ol>
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Mendel’s Laws of Inheritance
            </h4>
            <p class="desc-note mt-2">
                Gregor Johann Mendel is called “Father of genetics”.
                <br>
                Mendel performed experiments on Garden pea. He took 14 true-breeding plants of pea having seven distinguishable characters, which have two opposite traits.
                <br>
                He called genes as “factors”, which are passed from parents to offsprings.
                <br>
                Genes, that code for a pair of opposite traits are called “alleles”.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
