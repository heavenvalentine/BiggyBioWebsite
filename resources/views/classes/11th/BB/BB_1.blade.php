@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/wxzc_2c6GMg">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            What are carbohydrates? Carbohydrates, or carbs, are sugar molecules. Along with proteins and fats, carbohydrates are one of three main nutrients.
            <br>
            <br>
            - Alston Alma
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/BB_2">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5">Carbohydrates
            </h1>
            <p class="desc-note mt-2">
                What are carbohydrates?
                Carbohydrates, or carbs, are sugar molecules. Along with proteins and fats, carbohydrates are one of three main nutrients found in foods and drinks.
                <br><br>
                Your body breaks down carbohydrates into glucose. Glucose, or blood sugar, is the main source of energy for your body's cells, tissues, and organs. Glucose can be used immediately or stored in the liver and muscles for later use.
                <br><br>
                What are the different types of carbohydrates?<br>
                There are three main types of carbohydrates:
                <br><br>
                Sugars. They are also called simple carbohydrates because they are in the most basic form. They can be added to foods, such as the sugar in candy, desserts, processed foods, and regular soda. They also include the kinds of sugar that are found naturally in fruits, vegetables, and milk.
                Starches. They are complex carbohydrates, which are made of lots of simple sugars strung together. Your body needs to break starches down into sugars to use them for energy. Starches include bread, cereal, and pasta. They also include certain vegetables, like potatoes, peas, and corn.
                Fiber. It is also a complex carbohydrate. Your body cannot break down most fibers, so eating foods with fiber can help you feel full and make you less likely to overeat. Diets high in fiber have other health benefits. They may help prevent stomach or intestinal problems, such as constipation. They may also help lower cholesterol and blood sugar. Fiber is found in many foods that come from plants, including fruits, vegetables, nuts, seeds, beans, and whole grains.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/carbo.jpg" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Which foods have carbohydrates?
            </h4>
            <p class="desc-note mt-2">
                Common foods with carbohydrates include:
                <ol>
                <li>Grains, such as bread, noodles, pasta, crackers, cereals, and rice</li>
                <li>Fruits, such as apples, bananas, berries, mangoes, melons, and oranges</li>
                <li>Dairy products, such as milk and yogurt</li>
                <li>Legumes, including dried beans, lentils, and peas</li>
                <li>Snack foods and sweets, such as cakes, cookies, candy, and other desserts</li>
                <li>Juices, regular sodas, fruit drinks, sports drinks, and energy drinks that contain sugar</li>
                <li>Starchy vegetables, such as potatoes, corn, and peas</li>
                </ol>
                Some foods don't have a lot of carbohydrates, such as meat, fish, poultry, some types of cheese, nuts, and oils.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">How many carbohydrates should I eat?
            </h4>
            <p class="desc-note mt-2">
                There is no one-size-fits-all amount of carbohydrates that people should eat. This amount can vary, depending on factors such as your age, sex, health, and whether or not you are trying to lose or gain weight. On average, people should get 45 to 65% of their calories from carbohydrates every day. On the Nutrition Facts labels, the Daily Value for total carbohydrates is 275 g per day. This is based on a 2,000-calorie daily diet. Your Daily Value may be higher or lower depending on your calorie needs and health.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Is it safe to eat a low-carb diet?
            </h4>
            <p class="desc-note mt-2">
                Some people go on a low-carb diet to try to lose weight. This usually means eating between 25 g and 150 g of carbs each day. This kind of diet can be safe, but you should talk to your health care provider before starting it. One problem with low-carb diets is that they can limit the amount of fiber you get each day. They can also be hard to stay on for the long term.
            </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
