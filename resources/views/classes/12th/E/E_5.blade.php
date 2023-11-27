@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/8dlRwE8-Gkw">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Enzymes help speed up chemical reactions in the human body.
            <br>
            <br>
            - Dallash Dann
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/E_6">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Function Of Enzym
            </h1>
            <p class="desc-note mt-2">
                An enzyme is a type of protein that acts as a catalytic agent in chemical reactions. It speeds up the rate of a chemical reaction by lowering the activation energy needed for the reaction to occur. Enzymes are highly specific, meaning that they can only catalyze specific reactions and are not generally effective at catalyzing other reactions.
                <br><br>
                Enzymes are essential for the proper functioning of the body's cells and are involved in many different biological processes, including metabolism, digestion, and energy production. They are also involved in the synthesis and breakdown of biomolecules, such as carbohydrates, lipids, nucleic acids, and amino acids.
                <br><br>
                Enzymes are usually named based on the type of reaction they catalyze or the substrate they act upon. For example, the enzyme lactase breaks down the sugar lactose into glucose and galactose, while the enzyme amylase breaks down starch into simpler sugars.
                <br><br>
                Enzymes are highly sensitive to changes in temperature, pH, and the presence of certain chemicals, and their activity can be inhibited or enhanced by these factors. However, enzymes are typically most active within a specific range of conditions, and their activity decreases outside of this range.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/func.png" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">What do enzymes do?
            </h4>
            <p class="desc-note mt-2">
                Enzymes provide support for many important processes within the body. Some examples include:
                <ol>
                <li>The digestive system: Enzymes help the body break down larger complex molecules into smaller molecules, such as glucose, so that the body can use them as fuel.</li>
                <li>DNA replication: Each cell in the body contains DNA. Each time a cell divides, the cell needs to copy its DNA. Enzymes help in this process by unwinding the DNA coils.</li>
                <li>Liver enzymes: The liver breaks down toxins in the body. To do this, it uses a range of enzymes the facilitate the process of destroying the toxins.</li>
                </ol>
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Inhibition
            </h4>
            <p class="desc-note mt-2">
                To ensure that the body’s systems work correctly, it is sometimes necessary to slow down enzyme function. For instance, if an enzyme makes too much of a product, then the body needs a way to reduce or stop the production.
                <br><br>
                Several factors can limit enzyme activity levels, including:
                <br><br>
                <ul>
                <li>Competitive inhibitors: This inhibitor molecule blocks the active site so that the substrate has to compete with the inhibitor to attach to the enzyme.</li>
                <li>Non-competitive inhibitors: This molecule binds to an enzyme somewhere other than the active site and reduces how effectively it works.</li>
                <li>Uncompetitive inhibitors: This inhibitor binds to the enzyme and substrate. The products leave the active site less easily, which slows the reaction.</li>
                <li>Irreversible inhibitors: This is an irreversible inhibitor, which binds to an enzyme and permanently inactivates it.</li>
                </ul>
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
