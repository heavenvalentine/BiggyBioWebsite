@extends('layout.NavLogged-layout')
{{-- @section('title', 'Grade') --}}
<link rel="stylesheet" href="asset/css/grade.css">
@section('content')

<div class="container d-grid gap-2 d-md-flex justify-content-md-end ">
    <a class="btn btn-outline-secondary" href="/7thgrade" role="button">7th Grade</a>
    <a class="btn btn-outline-secondary" href="/8thgrade" role="button">8th Grade</a>
    <a class="btn btn-outline-secondary" href="/9thgrade" role="button">9th Grade</a>
</div>

@yield('content')

@endsection
