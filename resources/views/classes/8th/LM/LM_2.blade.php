@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="top-area shadow-sm">
<div class="container w-50">
    <div class="row">
      <div class="col-sm">
        <iframe width="330" height="235" class="vid mt-4 mb-4" src="https://www.youtube.com/embed/UKgbfxPTn_s">
        </iframe>
      </div>
      <div class="col-sm">
        <div class="vid-desc mt-4 mb-2" >
            Skeletal muscles comprise 30 to 40% of your total body mass.
            They're the muscles that connect to your bones and allow you to perform.
            <br>
            <br>
            - Fredy Gabriel
        </div>
        <div class="next mt-1 mb-1 text-end">
            <a href="/LM_3">Next &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="article-area mt-5 shadow-m5">
    <div class="container w-50">
        <div class="row note">
            <h1 class="title-note mt-5"> Skeletal Muscle
            </h1>
            <p class="desc-note mt-2">
                Skeletal muscle is a type of striated muscle tissue that is responsible for movement of the bones and other parts of the body. It is attached to the bones by tendons, and it contracts and relaxes to cause movement. Skeletal muscle is also known as voluntary muscle because it is under conscious control, meaning we can choose to move it or not. It is made up of long, thin cells called muscle fibers, which are surrounded by connective tissue. Skeletal muscle is supplied with oxygen and nutrients through the blood vessels, and it is capable of repairing itself after injury. It is an important component of the musculoskeletal system and plays a key role in maintaining posture and balance.
                <br><br>
                Skeletal muscle works by contracting and relaxing to cause movement. When a muscle contracts, it becomes shorter and thicker, which pulls on the bones or other structures to which it is attached. This movement can be seen when a person lifts their arm or bends their knee.
                <br><br>
                The contraction of skeletal muscle is controlled by signals from the brain through the nervous system. When the brain sends a signal to a particular muscle, it activates nerve impulses that travel to the muscle through the nerves. These nerve impulses stimulate the muscle fibers to contract.
                <br><br>
                Skeletal muscle contains special proteins called myosin and actin that are responsible for muscle contraction. When a nerve impulse reaches the muscle, it causes the myosin and actin to interact in a process called the sliding filament theory. The myosin filaments pull on the actin filaments, causing them to slide past each other and the muscle to shorten. When the muscle relaxes, the myosin and actin filaments return to their original positions and the muscle returns to its resting length.
                <br><br>
                Skeletal muscle is also able to produce heat through the process of muscle metabolism, which helps to regulate body temperature. It also plays a role in the body's metabolism by burning calories and storing energy in the form of glycogen.
            </p>
            <div class="desc-note mt-2 text-center">
                <img src="asset/img/LM2.png" class="w-75" " alt="" srcset="">
            </div>

            <h4 class="subtitle-note mt-3 mb-2">How are the skeletal muscles structured?
            </h4>
            <p class="desc-note mt-2">
                Each muscle can contain thousands of fibers. Different types of sheaths, or coverings, surround the fibers:
                <br>
                <ul>
                    <li>Epimysium: The outermost layer of tissue surrounding the entire muscle.</li>
                    <li>Perimysium: The middle layer surrounding bundles of muscle fibers.</li>
                    <li>Endomysium: The innermost layer surrounding individual muscle fibers.</li>
                </ul>
	        </p>

            <h4 class="subtitle-note mt-3 mb-2">What conditions and disorders affect skeletal muscles?
            </h4>
            <p class="desc-note mt-2">
                A wide range of conditions can affect skeletal muscles, from mild injuries to serious or even life-threatening myopathies (diseases that affect skeletal muscles). A few are:
                <br>
                <ul>
                    <li>Muscular dystrophies: This group of diseases causes progressive degeneration of skeletal muscle fibers. They’re the result of having an abnormal gene and can be inherited (passed down through families). There are many different muscular dystrophies.</li>
                    <br>
                    <li>Myasthenia gravis (MG): This autoimmune disease prevents muscles and nerves from communicating as they should. It leads to severe muscle weakness and fatigue. MG can make it difficult to move, walk, speak, chew, see, hold your head up or keep your eyelids open. It can even lead to severe breathing problems.</li>
                    <br>
                    <li>Rhabdomyolysis: This life-threatening condition causes a breakdown of muscle tissue. The damaged muscles release proteins, electrolytes and other substances into the blood. This can lead to serious organ damage. Traumatic injuries, heatstroke or severe overexertion can cause rhabdomyolysis.</li>
                    <br>
                    <li>Sarcopenia: We gradually lose skeletal muscle mass as we age. Sarcopenia begins around age 40. By 80, we lose about 50% of our muscle mass. Sarcopenia can lead to loss of function, mobility, balance problems and falls. Obesity, hormonal changes and other health conditions can accelerate muscle loss.</li>
                    <br>
                    <li>Strains: Muscle strains, or pulled muscles, occur when you overstretch muscle fibers. These injuries are usually the result of overuse. Severe strains can lead to partial or complete muscle tears.</li>
                    <br>
                    <li>Tendonitis: Tendons connect skeletal muscles to bones. Tendon inflammation can make it painful to use these muscles. Like strains, tendonitis is usually caused by overworking tendons.</li>
                </ul>
	        </p>
        </div>
    </div>
    </div>

<x-footer/>
@endsection
