@extends('layout.NavLogged-layout')
<link rel="stylesheet" href="/asset/css/detail.css">
@section('title')
{{ $post->title }}
@endsection

@section('content')

@if($post)

<div class="article-area">
    <div class="container w-50 mt-5 mb-5 shadow-m5">
        <div class="row note">
            <img width="" src="{{ Storage::url('public/posts/').$post->image }}">
            <h1 class="title-note mt-5">
                {{ $post->title }}
            </h1>
            <p class="desc-note mt-2">
                {!! $post->content !!}
            </p>
            <div class="desc-note mt-2 text-center">
            </div>
        </div>
    </div>
    </div>
@else
        <h1> Nothing to show here </h1>
@endif
@endsection
