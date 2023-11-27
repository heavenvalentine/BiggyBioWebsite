@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/JGZj6DsUZhE">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Proteins are large, complex molecules that play many critical roles in the body.
            <br>
            <br>
            - Common Gate
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/BB_3">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5">What are proteins and what do they do?
            </h1>
            <p class="desc-note mt-2">
                Proteins are large, complex molecules that play many critical roles in the body. They do most of the work in cells and are required for the structure, function, and regulation of the body’s tissues and organs.
                <br><br>
                Proteins are made up of hundreds or thousands of smaller units called amino acids, which are attached to one another in long chains. There are 20 different types of amino acids that can be combined to make a protein. The sequence of amino acids determines each protein’s unique 3-dimensional structure and its specific function. Amino acids are coded by combinations of three DNA building blocks (nucleotides), determined by the sequence of genes.
                Proteins are large biomolecules and macromolecules that comprise one or more long chains of amino acid residues. Proteins perform a vast array of functions within organisms, including catalysing metabolic reactions, DNA replication, responding to stimuli, providing structure to cells and organisms, and transporting molecules from one location to another. Proteins differ from one another primarily in their sequence of amino acids, which is dictated by the nucleotide sequence of their genes, and which usually results in protein folding into a specific 3D structure that determines its activity.
                <br><br>
                A linear chain of amino acid residues is called a polypeptide. A protein contains at least one long polypeptide. Short polypeptides, containing less than 20–30 residues, are rarely considered to be proteins and are commonly called peptides. The individual amino acid residues are bonded together by peptide bonds and adjacent amino acid residues. The sequence of amino acid residues in a protein is defined by the sequence of a gene, which is encoded in the genetic code. In general, the genetic code specifies 20 standard amino acids; but in certain organisms the genetic code can include selenocysteine and—in certain archaea—pyrrolysine. Shortly after or even during synthesis, the residues in a protein are often chemically modified by post-translational modification, which alters the physical and chemical properties, folding, stability, activity, and ultimately, the function of the proteins. Some proteins have non-peptide groups attached, which can be called prosthetic groups or cofactors. Proteins can also work together to achieve a particular function, and they often associate to form stable protein complexes.
                <br><br>
                Once formed, proteins only exist for a certain period and are then degraded and recycled by the cell's machinery through the process of protein turnover. A protein's lifespan is measured in terms of its half-life and covers a wide range. They can exist for minutes or years with an average lifespan of 1–2 days in mammalian cells. Abnormal or misfolded proteins are degraded more rapidly either due to being targeted for destruction or due to being unstable.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/bb2.jpg" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">General structure and properties of proteins
            </h4>

            <h4 class="subtitle-note mt-3 mb-2">The amino acid composition of proteins
            </h4>
            <p class="desc-note mt-2">
                The common property of all proteins is that they consist of long chains of α-amino (alpha amino) acids. The general structure of α-amino acids is shown in . The α-amino acids are so called because the α-carbon atom in the molecule carries an amino group (―NH2); the α-carbon atom also carries a carboxyl group (―COOH).
                <br><br>
                In acidic solutions, when the pH is less than 4, the ―COO groups combine with hydrogen ions (H+) and are thus converted into the uncharged form (―COOH). In alkaline solutions, at pH above 9, the ammonium groups (―NH+3) lose a hydrogen ion and are converted into amino groups (―NH2). In the pH range between 4 and 8, amino acids carry both a positive and a negative charge and therefore do not migrate in an electrical field. Such structures have been designated as dipolar ions, or zwitterions (i.e., hybrid ions).
                <br><br>
                Although more than 100 amino acids occur in nature, particularly in plants, only 20 types are commonly found in most proteins. In protein molecules the α-amino acids are linked to each other by peptide bonds between the amino group of one amino acid and the carboxyl group of its neighbour.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Structures of common amino acids
            </h4>
            <p class="desc-note mt-2">
                The amino acids present in proteins differ from each other in the structure of their side (R) chains. The simplest amino acid is glycine, in which R is a hydrogen atom. In a number of amino acids, R represents straight or branched carbon chains. One of these amino acids is alanine, in which R is the methyl group (―CH3). Valine, leucine, and isoleucine, with longer R groups, complete the alkyl side-chain series. The alkyl side chains (R groups) of these amino acids are nonpolar; this means that they have no affinity for water but some affinity for each other. Although plants can form all of the alkyl amino acids, animals can synthesize only alanine and glycine; thus valine, leucine, and isoleucine must be supplied in the diet.
                <br><br>
                Two amino acids, each containing three carbon atoms, are derived from alanine; they are serine and cysteine. Serine contains an alcohol group (―CH2OH) instead of the methyl group of alanine, and cysteine contains a mercapto group (―CH2SH). Animals can synthesize serine but not cysteine or cystine. Cysteine occurs in proteins predominantly in its oxidized form (oxidation in this sense meaning the removal of hydrogen atoms), called cystine. Cystine consists of two cysteine molecules linked by the disulfide bond (―S―S―) that results when a hydrogen atom is removed from the mercapto group of each of the cysteines. Disulfide bonds are important in protein structure because they allow the linkage of two different parts of a protein molecule to—and thus the formation of loops in—the otherwise straight chains. Some proteins contain small amounts of cysteine with free sulfhydryl (―SH) groups.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
