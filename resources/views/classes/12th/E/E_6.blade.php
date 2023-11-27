@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/rlH1ym916Fo">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Enzymes are proteins that help speed up chemical reactions in our bodies. Enzymes are essential for digestion, liver function and much more.
            <br>
            <br>
            - Maria Darlla
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/E_7">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Summary Of Enzym
            </h1>
            <p class="desc-note mt-2">
                Enzymes are proteins that catalyze chemical reactions in the body. They play a crucial role in many biological processes, including metabolism, digestion, and energy production. Enzymes are highly specific, meaning they can only catalyze specific reactions, and are sensitive to changes in temperature, pH, and the presence of certain chemicals. They are typically most active within a specific range of conditions, and their activity decreases outside of this range. Enzymes are named based on the type of reaction they catalyze or the substrate they act upon, and are essential for the proper functioning of the body's cells.
                <br><br>
                <ol>
                <li>Enzymes are found in all living cells, and they are necessary for the chemical reactions that sustain life.

                    <li>Enzymes are highly efficient catalysts, meaning they can speed up chemical reactions without being consumed in the process. This allows them to catalyze many reactions without being used up, making them an important resource for the cell.</li>

                    <li>Enzymes are classified into six main categories based on the type of reaction they catalyze: oxidoreductases, transferases, hydrolases, lyases, isomerases, and ligases.</li>

                    <li>Enzymes are usually specific for a particular substrate, meaning that they can only catalyze the reaction of that substrate. For example, the enzyme lactase can only break down the sugar lactose, and not other sugars like glucose or fructose.</li>

                    <li>The activity of enzymes can be regulated by various mechanisms, including allosteric regulation, where the activity of the enzyme is modified by the binding of a small molecule to a specific site on the enzyme.
                    </li>
                    <li>Abnormalities in enzyme function can lead to various diseases, including metabolic disorders and deficiencies. Some of these disorders can be treated with enzyme supplements or by modifying the diet to provide the necessary enzymes.</li>
                </ol>
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/zim.webp" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">What health conditions can enzyme problems cause?
            </h4>
            <p class="desc-note mt-2">
                Metabolic disorders are often the result of not having enough of a certain enzyme. Parents can pass them to their children through genes (inherited). Some examples of inherited metabolic disorders include:
                <br><br>
                Fabry disease prevents body from making enzymes (alpha-galactosidase A) that break down fat (lipids).
                Krabbe disease (globoid cell leukodystrophy) affects enzymes needed for the protective covering (myelin) on nerve cells (Central Nervous System).
                Maple syrup urine disease affects enzymes needed to break down certain branch chain amino acids.
                Other health conditions related to enzyme imbalances include:
                <br><br>
                Crohn’s disease an imbalance of the bacteria in your gut (gut microbiome) may influence an autoimmune response of the intestinal tract. This may play a role in presentation and severity of Crohn’s disease.
                Exocrine pancreatic insufficiency (EPI) is a condition where your pancreas doesn’t have enough digestive enzymes. You can’t break down food or absorb nutrients. Chronic pancreatitis, pancreatic cancer, diabetes or cystic fibrosis can lead to EPI.
                Lactose intolerance is a shortage of the enzyme needed to digest sugars in milk (lactose) and dairy.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Can medications affect enzyme levels?
            </h4>
            <p class="desc-note mt-2">
                Some medications affect enzyme levels. For example, antibiotics can kill certain bacteria needed for some enzymes to work their best. This is the reason antibiotics may cause diarrhea. To kill the bacteria making you sick, they also wipe out important good bacteria that aid in digestion.
                <br><br>
                Statins (medications that lower cholesterol) can raise liver enzymes and muscle enzymes. They may increase the risk of damage to the liver or muscles.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
