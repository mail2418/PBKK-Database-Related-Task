@extends('layouts.main')

@section('title', 'Article')

@section('container')
    {{-- Css --}}
    <link rel="stylesheet" href="/css/style.css">
    {{-- Font Poppins --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <div class="header">
        <h1 style="padding-top: 5%; font-family: Roboto Slab;">Shopee News</h1>
        <h4>Surabaya, Indonesia | Tanggal : {{ $day>9 ? $day : "0".$day }}-{{ $month>9 ? $month : "0".$month }}-{{ $year }}</h3>
        <hr/>
        @foreach($articles as $article)
            <article class="mb-5 border-bottom pb-4">
                <h3>
                    <a href="/article/{{ $article->slug }}" class="text-decoration-none" style="color: black">
                    {{ $article->title }}
                    </a>                    
                </h3>
                <h5>Author by: <a href="/author/{{ $article->user->username }}" class="text-decoration-none" style="color: rgb(201, 137, 100)">{{ $article->user->name }}</a> | <a href="/categories/{{ $article->category->slug }}" class="text-decoration-none">{{ $article->category->name }}</a></h5>
                <p style="font-size: 20px">{{ $article->excerpt }}</p>
                <a href="/article/{{ $article->slug }}" class="text-decoration-none">Read More...</a>         
            </article>
        @endforeach
    </div>
@endsection