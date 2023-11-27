@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/NdOEconjH_0">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            "The biological sciences emerged from traditions of medicine and natural history reaching back to Ayurveda."
            <br>
            <br>
            - Merlina Adyrth
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/V_1">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> History Of Biology
            </h1>
            <p class="desc-note mt-2">
            The history of biology follows the study of the living world from ancient to modern times. Although the concept of biology as a unified field emerged in the 19th century, the biological sciences that emerged from traditions of medicine and natural history reach back to ayurveda, ancient Egyptian medicine and the works of Aristotle and Galen in the ancient Greco-Roman world. This ancient work was further developed in the Middle Ages by Muslim physicians and scholars such as Avicenna. During the European Renaissance and early modern period, biological thought underwent a revolution in Europe with a renewed interest in empiricism and the discovery of many novel organisms. Prominent in this movement were Vesalius and Harvey, who used careful experimentation and observation in physiology, and naturalists such as Linnaeus and Buffon who began to classify the diversity of life and the fossil record, and the development and behavior of organisms. Microscopy revealed a previously unknown world of microorganisms, laying the foundation for the cell theory. The growing importance of natural theology, partly a response to the rise of mechanical philosophy, fueled the growth of natural history (although it entrenched the argument from design).
            <br>
            <br>
            During the 18th and 19th centuries, biological sciences such as botany and zoology became increasingly professional disciplines. Lavoisier and other physical scientists began to relate the animate and inanimate worlds through physics and chemistry. Naturalist explorers such as Alexander von Humboldt investigated the interactions between organisms and their environment, and the ways these relationships depended on geography—laying the foundations for biogeography, ecology and ethology. Naturalists began to reject essentialism and consider the importance of the extinction and mutability of species. The cell theory provides a new perspective on the basis of life. These developments, as well as the results of embryology and paleontology, were synthesized in Charles Darwin's theory of evolution by natural selection. The late 19th century saw the fall of spontaneous generation and the emergence of the germ theory of disease, although the mechanism of inheritance remains a mystery.
            <br>
            <br>
            In the early 20th century, the rediscovery of Mendel's work led to the rapid development of genetics by Thomas Hunt Morgan and his students, and in the 1930s the combination of population genetics and natural selection in the "neo-Darwinian synthesis". A rapidly developing scientific discipline, especially after Watson and Crick proposed the structure of DNA. After the formation of the Central Dogma and the breakdown of the genetic code, biology was largely divided between organismal biology—the field dealing with whole organisms with groups of organisms—and those dealing with cellular and molecular biology. In the late 20th century, new fields such as genomics and proteomics reversed this trend, with organismal biologists using molecular techniques, and molecular and cell biologists examining the interactions between genes and the environment, as well as the genetics of natural populations of organisms.
            <br>
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/biology-lab.jpg" class="w-75" " alt="" srcset="">
                <br>
                <br>
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Etymology Of "Biology"
            </h4>
            <p class="desc-note mt-2">
            The word biology is formed by combining the Greek βίος (bios), meaning "life", and the suffix '-logy', meaning "science", "knowledge", "study", which is based on the Greek verb λέγειν, 'legein' "to select", "gather" (cf. noun λόγος, 'logos' "word"). The term biology in its modern sense seems to have been introduced independently by Thomas Beddoes (1799),[1] Karl Friedrich Burdach (1800), Gottfried Reinhold Treviranus (Biologie oder Philosophie der lebenden Natur, 1802) and Jean-Baptiste Lamarck (Hydrogéologie, 1802) .[2][3] The word itself appears in the title of Volume 3 of Philosophiae naturalis sive physicae dogmaticae: Geologia, biologia, phytologia generalis et dendrologia by Michael Christoph Hanow, published in 1766.
            <br>
            <br>
            Before biology, there were several terms used for the study of animals and plants. Natural history refers to the descriptive aspects of biology, although it also includes mineralogy and non-biological fields; from the Middle Ages through the Renaissance, the unifying framework for natural history was the scala naturae or the Great Chain of Being. Natural philosophy and natural theology cover the conceptual and metaphysical foundations of plant and animal life, dealing with the problem of why organisms exist and behave the way they do, although these subjects also include what is now called geology, physics, chemistry, and astronomy. Physiology and pharmacology (botany) are fields of medicine. Botany, zoology, and (in the case of fossils) geology replaced natural history and natural philosophy in the 18th and 19th centuries before biology was widely adopted.[4][5] To this day, "botany" and "zoology" are used widely, although they have been merged with sub-disciplines of biology, such as mycology and molecular biology.
            <br>
            <br>
	        </p>

        </div>
    </div>
    </div>

<x-footer/>
@endsection
