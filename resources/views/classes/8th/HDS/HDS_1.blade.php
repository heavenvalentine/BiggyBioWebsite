@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/yIoTRGfcMqM">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            The digestive system includes the digestive tract and its accessory organs.
            <br>
            <br>
            - Delvin Hugo.s
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/HDS_2">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5">Digestive System
            </h1>
            <p class="desc-note mt-2">
                The digestive system includes the digestive tract and its accessory organs, which process food into molecules that can be absorbed and utilized by the cells of the body. Food is broken down, bit by bit, until the molecules are small enough to be absorbed and the waste products are eliminated. The digestive tract, also called the alimentary canal or gastrointestinal (GI) tract, consists of a long continuous tube that extends from the mouth to the anus. It includes the mouth, pharynx, esophagus, stomach, small intestine, and large intestine. The tongue and teeth are accessory structures located in the mouth. The salivary glands, liver, gallbladder, and pancreas are major accessory organs that have a role in digestion. These organs secrete fluids into the digestive tract.
                <br><br>
                Food undergoes three types of processes in the body:
                <br>
                <ul>
                    <li>Digestion</li>
                    <li>Absorption</li>
                    <li>Elimination</li>
                </ul>
                <br>
                Digestion and absorption occur in the digestive tract. After the nutrients are absorbed, they are available to all cells in the body and are utilized by the body cells in metabolism.

                The digestive system prepares nutrients for utilization by body cells through six activities, or functions.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/HDS1.png" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Ingestion
            </h4>
            <p class="desc-note mt-2">
                The first activity of the digestive system is to take in food through the mouth. This process, called ingestion, has to take place before anything else can happen.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Mechanical Digestion
            </h4>
            <p class="desc-note mt-2">
                The large pieces of food that are ingested have to be broken into smaller particles that can be acted upon by various enzymes. This is mechanical digestion, which begins in the mouth with chewing or mastication and continues with churning and mixing actions in the stomach.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Chemical Digestion
            </h4>
            <p class="desc-note mt-2">
                The complex molecules of carbohydrates, proteins, and fats are transformed by chemical digestion into smaller molecules that can be absorbed and utilized by the cells. Chemical digestion, through a process called hydrolysis, uses water and digestive enzymes to break down the complex molecules. Digestive enzymes speed up the hydrolysis process, which is otherwise very slow.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Movements
            </h4>
            <p class="desc-note mt-2">
                After ingestion and mastication, the food particles move from the mouth into the pharynx, then into the esophagus. This movement is deglutition, or swallowing. Mixing movements occur in the stomach as a result of smooth muscle contraction. These repetitive contractions usually occur in small segments of the digestive tract and mix the food particles with enzymes and other fluids. The movements that propel the food particles through the digestive tract are called peristalsis. These are rhythmic waves of contractions that move the food particles through the various regions in which mechanical and chemical digestion takes place.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Absorption
            </h4>
            <p class="desc-note mt-2">
                The simple molecules that result from chemical digestion pass through cell membranes of the lining in the small intestine into the blood or lymph capillaries. This process is called absorption.
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">Elimination
            </h4>
            <p class="desc-note mt-2">
                The food molecules that cannot be digested or absorbed need to be eliminated from the body. The removal of indigestible wastes through the anus, in the form of feces, is defecation or elimination.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
