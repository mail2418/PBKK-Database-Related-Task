{{-- Memanggil sebuah file template --}}
@extends('layouts.main')

@section('title', 'Article')

@section('container')
    {{-- Css --}}
    <link rel="stylesheet" href="/css/style.css">
    {{-- Font Poppins --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <div class="header">
        <h1 style="padding-top: 5%; font-family: Roboto Slab;">Article Category : {{ $category }}</h1>
        <hr>
        <h3>Judul Artikel</h3>
        <br/>
        @foreach($articles as $article)
           <article>
               <h3><a href="/article/{{ $article->slug }}" class="text-decoration-none">{{ $article->title }}</a></h3>
               <p style="font-size: 20px">{{ $article->excerpt }}</p>
            </article> 
        @endforeach
@endsection