{{-- @extends('layouts.app') --}}
@extends('layout.NavNoLog-layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="  padding: 100px 0;">
            <div class="card" style="
            ">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body" style="">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="email" class="col-md-4 col-form-label mx-2 my-2">{{ __('Email') }}</label>
                            </div>

                            <div class="col-md-6 " style="" >
                                <input id="email" type="email" class=" my-2 form-control me-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-3 ">
                                <button type="submit" class="btn my-2" style="background:#19766b; color:white!important;  font-weight:400; ">
                                    {{ __('Send Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
