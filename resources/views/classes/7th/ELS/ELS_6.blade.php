@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/guBW2nJT4Lw">
        </iframe>
        {{-- <video controls style="width: 500px" poster="asset/img/thumbnail.png" class="vid mt-5">
            <source src="https://drive.google.com/uc?export=download&id=1llst4BwWwbYwuIr12pdCGO46VZl7Hl7v" type='video/mp4'>
        </video> --}}
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Levels of organization are structures in nature, usually defined by part-whole relationships.
            <br>
            <br>
            - Asep Arochmah
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/LOLT_1">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> The Historical Origins of the Concept
            </h1>
            <p class="desc-note mt-2">
                When levels of organization are understood as belonging to the broader category of hierarchical depictions of nature, their history can be traced all the way back to the early days of western science and philosophy. Aristotle suggested that living things could be arranged in a graded scale, starting from plants at the bottom and ending with humans at the top. This idea was further developed in Neoplatonism, and in Medieval times, it transformed into the idea of “the Great Chain of Being” (Lovejoy 1936). This Scala Naturae conveyed a hierarchical conception of the world as modeled after the perfection of the Deity: at the top, there is God, and at lower rungs, angels, humans, animals, plants, and so on. After the scientific revolution, more scientific classifications of nature started to appear, the most famous ones being Linneaus’ taxonomical system and Auguste Comte’s hierarchy of the sciences (Comte 1842 [1853]).
                <br>
                <br>
                At the beginning of the 20th century, several notions of “levels” began to circulate in the philosophical and scientific literature. Prominent among these was the idea of “levels of existence” (alternatively: “being”; “complexity”) developed by philosophers Samuel Alexander (1920: 3, 45) and Charles Dunbar Broad (1925), which figured prominently in the emergentist and emergent evolution literature of the 1920’s (Sellars 1926; McLaughlin 1992; Stephan 1999). This introduced a number of themes that have become germane to general levels-language. These themes include level-specific laws (Broad 1925: 77; cf. Woodger 1929) and the idea that ‘levels’ exhibit a tendency in nature towards increasing complexity (Sellars 1917: 224; cf. Needham 1937), Although most of these themes were severely underdeveloped and divorced from the cutting-edge work in the life sciences happening at the time (Needham 1937: 242 ff. 4), this tradition has been an influential historical source for explicating levels language in philosophy of mind (see the entries on emergent properties and supervenience; McLaughlin 1992; Beckermann et al. 1992; Kim 1999, 2002).
                <br>
                <br>
                The roots of the contemporary notion of levels of organization and the associated hierarchical thinking are best linked to the efforts of organicist biologists of the early-mid 20th century (for primers on the organicist movement, see Peterson 2014; Nicholson and Gawne 2015). Particularly important to the introduction and development of the levels concept were Joseph Woodger (1929, 1930), Ludwig von Bertalanffy (1928 [1933], 1932), and Joseph Needham (1936, 1937). These individuals were in turn influenced by Alfred North Whitehead’s philosophy (see, e.g., Whitehead 1929; Needham 1941).
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/ELS6.jpg" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2"> Philosophical Accounts of Levels of Organization
            </h4>
            <p class="desc-note mt-2">
                A recurring motif in the literature on levels of organization is to lament the haphazard or unreflective way in which terms such as ‘hierarchy’ or ‘levels’ are applied, and to call for more precise analyses (e.g., Beckner 1974; Bunge 1977; Grene 1987; Korn 2002; Valentine & May 1996). However, surprisingly few philosophers or scientists have taken up the challenge of developing a substantial theory or account of levels of organization. In this section, we discuss three major accounts put forward in philosophy of science to clarify or posit what exactly levels of organization are. These are Paul Oppenheim and Hilary Putnam’s “layer-cake” account, the mechanist account developed and advocated by Carl Craver (2007: ch. 5, 2015) and William Bechtel (2008: ch. 4), and William Wimsatt’s “local maxima” account (1976a, 1994). After these, we also go through recent skeptical approaches to the idea of levels of organization.
                <br>
                <br>
                The two most visible accounts in philosophy of science, the “layer-cake” and “mechanistic” accounts, mark polarized visions for the levels concept. The layer-cake account comprises a comprehensive conception that posits exhaustive stepwise compositional relations between all constituents of nature and strict correspondence between each putative level and a primary scientific discipline that studies the constituents occupying that level. The mechanistic account proposes a contextualized conception of ontological levels in nature that are defined in terms of constitutive parthood within a mechanism (Craver 2007: 188–189; Kaplan 2015: 20). The third account, Wimsatt’s “local maxima” account, has arguably received less mainstream attention in philosophy, and posits a more overarching framework for conceptualizing levels in science, covering both epistemic and ontological aspects. Though general, Wimsatt’s account is not comprehensive, admitting exceptions and multiple distinct criteria for characterizing levels that are congenial to both local and global conceptions.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
