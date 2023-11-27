@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/UhHQs6ZcK_g">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Biotechnology has applications in four major industrial areas, including health care (medical), crop production and agriculture, non-food (industrial) uses of crops and other products (e.g., biodegradable plastics, vegetable oil, biofuels), and environmental uses.
            <br>
            <br>
            - Irish Isabella
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/B_2">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5">Principles of biotechnology
            </h1>
            <p class="desc-note mt-2">
                Biotechnology is a field that involves the use of living organisms or their products to make or modify products, improve plants or animals, or develop microorganisms for specific uses. There are several principles that underlie the practice of biotechnology, including:
                <br><br>
                <ul>
                <li>The use of living organisms or their products to make or modify products: Biotechnology often involves the use of microorganisms, such as bacteria or yeast, to produce products such as drugs, vaccines, or enzymes.</li>

                <li>The manipulation of genetic material to improve plants or animals: Biotechnology can be used to alter the genetic makeup of plants and animals to improve their characteristics, such as disease resistance or yield. This can be done through techniques such as genetic engineering, which involves the direct manipulation of an organism's DNA.</li>

                <li>The development of microorganisms for specific uses: Biotechnology can involve the development of microorganisms that are specifically designed to perform a specific task, such as breaking down pollution or producing biofuels.</li>

                <li>The use of biotechnology to solve environmental problems: Biotechnology can be used to address environmental issues, such as pollution or the need for sustainable agriculture. For example, biotechnology can be used to develop environmentally friendly products or to develop microorganisms that can break down environmental contaminants.</li>

                <li>The use of biotechnology to improve human health: Biotechnology has the potential to improve human health by developing new drugs and therapies, as well as by improving the efficiency of the healthcare system through the use of diagnostic tools and information management technologies.</li>
                </ul>
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/B1.jpg" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Biotechnology growing
            </h4>
            <p class="desc-note mt-2">
                Biotechnology is a rapidly growing field that has the potential to revolutionize many different industries and improve the quality of life for people around the world. Some examples of how biotechnology is being used today include:
                <br><br>
                <ol>
                <li>Medicine and healthcare: Biotechnology is used to develop new drugs and therapies, as well as diagnostic tools to help identify and treat diseases. Biotechnology is also being used to develop new treatments for cancer, such as personalized medicine, which involves the use of genetic information to tailor treatment to an individual patient's specific needs.</li>

                <li>Agriculture: Biotechnology is being used to improve crop yields and increase the resistance of crops to pests and diseases. This can help to improve food security and reduce the need for chemical pesticides and fertilizers.</li>

                <li>Environmental cleanup: Biotechnology is being used to develop microorganisms that can break down pollutants and contaminants in the environment, helping to clean up contaminated sites.</li>

                <li>Industrial applications: Biotechnology is being used to develop new materials and products, such as biofuels and bioplastics, which are more sustainable alternatives to traditional fossil fuels and plastics.</li>

                <li>Food processing: Biotechnology is being used to improve the efficiency of food production, such as by using enzymes to break down food into more easily digestible forms. Biotechnology is also being used to produce food additives and ingredients, such as artificial sweeteners and flavorings.</li>
                </ol>

                Overall, biotechnology has the potential to have a significant impact on many different areas of our lives, and it is likely to continue to play a major role in shaping our world in the future.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Principles of Biotechnology
            </h4>
            <p class="desc-note mt-2">

                The basic principles of biotechnology that initiated the inception of biotechnology are:
                <br><br>
                <ol>
                <li>Genetic Engineering: The underlying principle used in this process is to alter the existing organisms by modifying the genetic makeup of the organism, which involves recombinant DNA technology. The biotech process involved in genetic engineering is given below:
                    <ul>
                    <li>Isolation of the DNA from the donor organism</li>

                    <li>DNA fragmentation using the restriction endonucleases</li>

                    <li>Ligation of the desired DNA fragment into the vector</li>

                    <li>Recombinant DNA is then transferred to the host</li>

                    <li>Culture of transformed cells in a nutrient medium</li>

                    <li>Extraction of the desired product</li>
                    </ul>
                </li>
                <br><br>

                <li>Chemical Engineering: The main point of distinction between biotechnology and chemical engineering is the scale of operation as mostly the products from biotechnology are low on the volume of biochemicals and high on value. Biotechnology increased the scope of pharmaceuticals, and its application has given excellent products in terms of quality as well as quantity. Examples include vaccines, enzymes, antibiotics, etc.</li>
                </ol>
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
