@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/nVl17JLn_u0">
        </iframe>
        {{-- <video controls style="width: 500px" poster="asset/img/thumbnail.png" class="vid mt-5">
            <source src="https://drive.google.com/uc?export=download&id=1llst4BwWwbYwuIr12pdCGO46VZl7Hl7v" type='video/mp4'>
        </video> --}}
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Energy describes the ability of an object to do work. Work is the transfer of energy that happens when an external force moves an object.
            <br>
            <br>
            - Green Mountain Energy
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/ELS_2">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Energy
            </h1>
            <p class="desc-note mt-2">
                Energy describes the ability of an object to do work. Work is the transfer of energy that happens when an external force moves an object.

                There are two main types of energy. They are kinetic energy and potential energy. Mechanical energy is the sum of the kinetic and potential energy in a system.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/ELS1.jpg" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Sound Energy
            </h4>
            <p class="desc-note mt-2">
                Sound energy moves through substances in longitudinal waves. These waves have to travel through a medium like air or water. Sound waves are created when a force causes an object to vibrate. For example, a hand hitting a drum creates sound waves.
	        </p>

            <div class="desc-note mt-2 text-center">
                <img src="asset/img/ELS1A.jpg" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">Thermal Energy
            </h4>
            <p class="desc-note mt-2">
                Thermal energy is another way of saying heat. It comes from the movement of atoms and molecules in matter. The faster the molecules move, the hotter the matter becomes. And the hotter the matter becomes, the more thermal energy it has. Think about boiling water on the stove. As the water heats up, its molecules move faster and faster.
	        </p>
            <h4 class="subtitle-note mt-3 mb-2">Electrical Energy
            </h4>
            <p class="desc-note mt-2">
                Electrons are tiny charged particles. When they move, they produce electrical energy. Moving electrons carry energy through an electrical conductor. Any device that you have to plug into the wall runs on electrical energy.
	        </p>
            <h4 class="subtitle-note mt-3 mb-2">Potential Energy: Stored Energy
            </h4>
            <p class="desc-note mt-2">
                Potential energy is stored in a stationary object. When the object moves, its energy changes from potential to kinetic. These objects all have potential energy:

                The water behind a dam
                A rock perched on the top of a hill
                Fireworks about to be launched
	        </p>
            <h4 class="subtitle-note mt-3 mb-2">Chemical Potential Energy
            </h4>
            <p class="desc-note mt-2">
                Chemical potential energy is stored in the bonds of molecules. It gets released through a chemical reaction. Chemical potential energy usually produces thermal energy. For example, the natural gas burned in a furnace releases heat. Likewise, the energy stored in the food you eat gets released through digestion.
	        </p>
            <h4 class="subtitle-note mt-3 mb-2">Gravitational Potential Energy
            </h4>
            <p class="desc-note mt-2">
                An object’s height and weight give it gravitational potential energy. The higher and heavier the object, the more gravitational potential energy it has. Think of water about to flow over a waterfall. The higher the waterfall, the more gravitational potential energy the water has.
	        </p>
            <h4 class="subtitle-note mt-3 mb-2">Mechanical Energy
            </h4>
            <p class="desc-note mt-2">
                Mechanical energy is the sum of energy in a mechanical system. It includes both kinetic energy and potential energy. So objects have mechanical energy when they are in motion. And they also have it when they have the potential to move. A car moving down the highway has mechanical energy. And so does a book you hold up in the air.
	        </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/ELS1B.jpg" class="w-75" " alt="" srcset="">
            </div>
            <p class="desc-note mt-2">
                The faster an object moves, the more energy it stores. This stored energy can be used to apply a force to another object. In other words, it does work on the object. Think of a wrecking ball demolishing a building. It has potential energy because it is held up in the air. As it swings toward the building, the energy is transformed into kinetic energy. Eventually, the ball comes in contact with a wall. That’s when the kinetic energy of the ball applies a force on the building, which can cause it to fall down.
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
