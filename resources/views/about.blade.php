@extends('layout.NavLogged-layout')
@section('title', 'About')
<link rel="stylesheet" href="asset/css/about.css">
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
@section('content')


<div class="container">
    <div class="page1">
    <div class="row">
        <div class="col-sm">
            <img src="asset/img/About.png" alt="" class="mt-4" height="420px" srcset="">
        </div>
        <div class="col-sm">
            <div class="title-1" style="margin-top: 9rem;">
                Investing in Knowledge and Your Future
            </div>
            <div class="desc-1  mt-2">
                We believe everyone has the capacity.
                With the help of E-learning, we help you to create your own path to achieve what you seek.
            </div>
        </div>
    </div>
    </div>
</div>

<div class="container">
    <div class="page2">
        <div class="row">
            <div class="col-10">
                <div class="title-2" style="margin-top: 6rem;">
                    About Company
                </div>
                <div class="desc-2  mt-2">
                    Biology is big deal events. That's why in 2017 we call this online learning platform as "Biggy Bio".
                </div>
            </div>
            <div class="col-2">
                <img src="asset/img/about/1.png" alt="" class="float-end img-2" height="120px" srcset="">
            </div>
        </div>
    </div>
    <div class="title-3 float-end"> <center> Meet Our Team </center> </div>
</div>

<div class="container">
    <div class="page3">
        <div class="row" style="margin-top: 2rem;">
            <div class="col-md-4 col-sm-4">
                <div class="team-member">
                    <div class="team-img">
                        <img src="asset/img/member/Devi.png" alt="team member" class="img-responsive">
                                                        <div class="team-intro light-txt">
                    <h5>Devi Melia Sarwono (0033) </h5>
                    <span>Front End</span>
                </div>
                    </div>
                    <div class="team-hover">
                        <div class="desk">
                            <h4>Hi There !</h4>
                            <p>I love to introduce myself as Front End Developer.</p>
                        </div>
                        <div class="s-link">
                            <a href="https://instagram.com/devvvvvvv.i?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
                            <a href="mailto:21k10033@student.unika.ac.id"><i class="fab fa-google"></i></a>
                            <a href="https://wa.me/085870550021"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 col-sm-4">
                <div class="team-member">
                    <div class="team-img">
                        <img src="asset/img/member/Heaven.png" alt="team member"  class="img-responsive">
                                                        <div class="team-intro light-txt">
                    <h5>Heaven Valentine(0050)</h5>
                    <span>Full Stack</span>
                </div>
                    </div>
                    <div class="team-hover">
                        <div class="desk">
                            <h4>Hello World</h4>
                            <p>I love to introduce myself as a Full Stack Developer.</p>
                        </div>
                        <div class="s-link">
                            <a href="https://instagram.com/heaveeennn?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
                            <a href="mailto:21k10050@student.unika.ac.id"><i class="fab fa-google"></i></a>
                            <a href="https://wa.me/087733832250"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 col-sm-4">
                <div class="team-member">
                    <div class="team-img">
                        <img src="asset/img/member/Grace.png" alt="team member"  class="img-responsive">
                                                        <div class="team-intro light-txt">
                    <h5>Grace F. T. Zaluchu (0052)</h5>
                    <span>Front End</span>
                </div>
                    </div>
                    <div class="team-hover">
                        <div class="desk">
                            <h4>I love to design</h4>
                            <p>I love to introduce myself as a Front End Developer.</p>
                        </div>
                        <div class="s-link">
                            <a href="https://instagram.com/gracezaluchu?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
                            <a href="mailto:21k10052@student.unika.ac.id"><i class="fab fa-google"></i></a>
                            <a href="https://wa.me/082155308032"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="page4">
        <div class="row">
            <div class="col-sm">
                <div class="title-4" style="">
                    We Are On A Mission
                </div>
                <div class="desc-4  mt-2">
                    Serve the communities of our world, nation, state by advancing understanding of living organisms and their interactions with the environment through research.
                    <br>
                    <br>
                    We really want to provide high-quality Biology education with an emphasis on experiential learning and problem solving, and to build public understanding of the living world through educational outreach activities for learners of all ages.
                </div>
            </div>
            <div class="col-sm">
                <img src="asset/img/support.png" alt="" class="img-5" height="420px" srcset="">
            </div>
        </div>
        </div>
</div>

<x-contact/>
@endsection
