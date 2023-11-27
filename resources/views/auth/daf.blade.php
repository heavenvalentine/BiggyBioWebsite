@extends('layout.akun-layout')
@section('title', 'Daftar')


@section('content')
<x-logo_kiri>
</x-logo_kiri>
<div class="row">
    <div class="column" style="background-color:white;">
     <div class="card" style="border:white;">
        <div class="card-body">
            <div class="welcome-quotes">
            </div>
        <div class="register-form">



            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                           name="name" placeholder="Your name" value="{{ old('name') }}">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                           name="email" placeholder="name@example.com" value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation"
                           placeholder="password">
                    @error('password_confirmation')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" value="Register">
                </div>
            </form>
        </div>
        </div>
    </div>
    </div>
    <div class="column" style="background-color:#bedd9a;">
      <h2>Column 2</h2>
      <p>Some text..</p>
    </div>
</div>

@endsection
