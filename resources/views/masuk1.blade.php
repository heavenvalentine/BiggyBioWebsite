 @extends('layout.app-layout')
 @section('title', 'Beranda')
 @section('content')

<div class="m-mas-p1">

    <img src="asset/img/loginbg3.png" class="img1-mas-p1 float-end" />
    <img src="asset/img/blobyl.png" class="img2-mas-p1" >

    <div class="quote1-mas-p1">
        <p> Buat Akun Sebelum Memulai Petualangan</p>
    </div>


    <div class="form-mas-p1">
        <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>


    </div>

</div>

 @endsection
