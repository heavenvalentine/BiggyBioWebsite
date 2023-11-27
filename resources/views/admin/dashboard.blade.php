@extends('layout.NavLoggedAdm')
<link rel="stylesheet" href="asset/css/admin.css">
@section('title', 'Welcome')
@section('content')

<body style="background: #EEF4DB">
    <div class="container">

        <div class="group" id="sec-2">
            <div class="box">
                <div class="container conp2">
                <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 kotak">

                <div class="box-part text-center">

                <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>

                <a href="/announcements">
                    <img src="asset/img/crud/1.png" alt="" srcset="" class="icon-plus">
                </a>

                <div class="title">
                    <a href="/announcements">
                        <h4 class="subtitle">CRUD - Announcement</h4>
                    </a>
                </div>

                </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 kotak">

                <div class="box-part text-center">

                    <i class="fa fa-twitter fa-3x" aria-hidden="true"></i>

                    <a href="/posts">
                        <img src="asset/img/crud/2.png" alt="" srcset="" class="icon-plus">
                    </a>


                    <div class="title">
                        <a class="" href="/posts">
                        <h4 class="subtitle">CRUD - Article Programs</h4>
                        </a>
                    </div>

                </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 kotak">

                <div class="box-part text-center">

                <i class="fa fa-facebook fa-3x" aria-hidden="true"></i>

                <a href="work_preview">
                    <img src="asset/img/crud/3.png" alt="" srcset="" class="icon-plus">
                </a>

                <div class="title">
                    <a href="/work_preview">
                        <h4 class="subtitle">Preview</h4>
                    </a>
                </div>

                </div>
            </div>
         </div>
         </div>
         </div>
         </div>

    </div>
</body>
@endsection
