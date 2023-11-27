@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/bwZcPwlRRcc">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Drugs or alcohol can hijack the pleasure/reward circuits in your brain and hook you into wanting more and more.
            <br>
            <br>
            - Clara Brilianui
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/AAS_3">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Addictive Substance (Drug)
            </h1>
            <p class="desc-note mt-2">
                Drug addiction, also called substance use disorder, is a disease that affects a person's brain and behavior and leads to an inability to control the use of a legal or illegal drug or medicine. Substances such as alcohol, marijuana and nicotine also are considered drugs. When you're addicted, you may continue using the drug despite the harm it causes.
                <br><br>
                Drug addiction can start with experimental use of a recreational drug in social situations, and, for some people, the drug use becomes more frequent. For others, particularly with opioids, drug addiction begins when they take prescribed medicines or receive them from others who have prescriptions.
                <br><br>
                The risk of addiction and how fast you become addicted varies by drug. Some drugs, such as opioid painkillers, have a higher risk and cause addiction more quickly than others.
                <br><br>
                As time passes, you may need larger doses of the drug to get high. Soon you may need the drug just to feel good. As your drug use increases, you may find that it's increasingly difficult to go without the drug. Attempts to stop drug use may cause intense cravings and make you feel physically ill. These are called withdrawal symptoms.
                <br><br>
                Help from your health care provider, family, friends, support groups or an organized treatment program can help you overcome your drug addiction and stay drug-free.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/AAS2.jpg" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Symptoms
            </h4>
            <p class="desc-note mt-2">

                Drug addiction symptoms or behaviors include, among others:
                <ul>
                <li>Feeling that you have to use the drug regularly — daily or even several times a day</li>
                <li>Having intense urges for the drug that block out any other thoughts</li>
                <li>Over time, needing more of the drug to get the same effect</li>
                <li>Taking larger amounts of the drug over a longer period of time than you intended</li>
                <li>Making certain that you maintain a supply of the drug</li>
                <li>Spending money on the drug, even though you can't afford it</li>
                <li>Not meeting obligations and work responsibilities, or cutting back on social or recreational activities because of drug use</li>
                <li>Continuing to use the drug, even though you know it's causing problems in your life or causing you physical or psychological harm</li>
                <li>Doing things to get the drug that you normally wouldn't do, such as stealing</li>
                <li>Driving or doing other risky activities when you're under the influence of the drug</li>
                <li>Spending a good deal of time getting the drug, using the drug or recovering from the effects of the drug</li>
                <li>Failing in your attempts to stop using the drug</li>
                <li>Experiencing withdrawal symptoms when you attempt to stop taking the drug</li>
                </ul>
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Recognizing unhealthy drug use in family members
            </h4>
            <p class="desc-note mt-2">
                Sometimes it's difficult to distinguish normal teenage moodiness or anxiety from signs of drug use. Possible signs that your teenager or other family member is using drugs include:
                <br>
                <ol>
                <li>Problems at school or work — frequently missing school or work, a sudden disinterest in school activities or work, or a drop in grades or work performance</li>
                <li>Physical health issues — lack of energy and motivation, weight loss or gain, or red eyes</li>
                <li>Neglected appearance — lack of interest in clothing, grooming or looks</li>
                <li>Changes in behavior — major efforts to bar family members from entering the teenager's room or being secretive about going out with friends; or drastic changes in behavior and in relationships with family and friends</li>
                <li>Money issues — sudden requests for money without a reasonable explanation; or your discovery that money is missing or has been stolen or that items have disappeared from your home, indicating maybe they're being sold to support drug use</li>
                </ol>
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
