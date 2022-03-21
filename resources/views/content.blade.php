@extends('layouts.main')

@section('title', 'Article')

@section('container')
{{-- Font Poppins --}}
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <article class="mb-5" style="padding-top: 5%; font-family: Poppins;">
        <h1>{{ $article->title }} </h1>
        <h5 ><span style="font-weight:700">Author By:</span> <a href="/author/{{ $article->user->username }}" style="color: rgb(201, 137, 100)" class="text-decoration-none">{{ $article->user->name }}</a> | <a href="/categories/{{ $article->category->slug }}" class="text-decoration-none">{{ $article->category->name }}</a></h5>
        <hr>
        <p style="text-align:justify; line-height:1.8rem; font-size:18px">{{  $article->body }}</p>
    </article>
@endsection