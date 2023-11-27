@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/Hy3-QHhzvPE">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Substances that are added to food to maintain or improve the safety, freshness, taste, or texture.
            <br>
            <br>
            - Mr. Bones Kiks
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/AAS_2">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Food additives
            </h1>
            <p class="desc-note mt-2">
                Substances that are added to food to maintain or improve the safety, freshness, taste, texture, or appearance of food are known as food additives. Some food additives have been in use for centuries for preservation – such as salt (in meats such as bacon or dried fish), sugar (in marmalade), or sulfur dioxide (in wine).
                <br><br>
                Many different food additives have been developed over time to meet the needs of food production, as making food on a large scale is very different from making them on a small scale at home. Additives are needed to ensure processed food remains safe and in good condition throughout its journey from factories or industrial kitchens, during transportation to warehouses and shops, and finally to consumers.
                <br><br>
                The use of food additives is only justified when their use has a technological need, does not mislead consumers, and serves a well-defined technological function, such as to preserve the nutritional quality of the food or enhance the stability of the food.
                <br><br>
                Food additives can be derived from plants, animals, or minerals, or they can be synthetic. They are added intentionally to food to perform certain technological purposes which consumers often take for granted. There are several thousand food additives used, all of which are designed to do a specific job in making food safer or more appealing. WHO, together with FAO, groups food additives into 3 broad categories based on their function.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/AAS111.jpg" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Flavouring agents
            </h4>
            <p class="desc-note mt-2">
                Flavouring agents – which are added to food to improve aroma or taste – make up the greatest number of additives used in foods. There are hundreds of varieties of flavourings used in a wide variety of foods, from confectionery and soft drinks to cereal, cake, and yoghurt. Natural flavouring agents include nut, fruit and spice blends, as well as those derived from vegetables and wine. In addition, there are flavourings that imitate natural flavours.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Enzyme preparations
            </h4>
            <p class="desc-note mt-2">
            Enzyme preparations are a type of additive that may or may not end up in the final food product. Enzymes are naturally-occurring proteins that boost biochemical reactions by breaking down larger molecules into their smaller building blocks. They can be obtained by extraction from plants or animal products or from micro-organisms such as bacteria and are used as alternatives to chemical-based technology. They are mainly used in baking (to improve the dough), for manufacturing fruit juices (to increase yields), in wine making and brewing (to improve fermentation), as well as in cheese manufacturing (to improve curd formation).
	        </p>

        </div>

        <div class="desc-note mt-2 text-center">
            <img src="asset/img/AAS11.jfif" class="w-75" " alt="" srcset="">
        </div>
    </div>
    </div>

<x-footer/>
@endsection
