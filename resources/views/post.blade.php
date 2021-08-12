{{-- halaman singgle post --}}
@extends('layouts.main')

@section('content')

    <article class="mb-5">
        <h2>{{ $post->title }}</h2>
        <p>By. <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{  $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
        <a href="/posts">Back to posts </a>
    </article>
    

@endsection

