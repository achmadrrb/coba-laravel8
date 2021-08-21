{{-- halaman singgle post --}}
@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>
                <p>By. <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/posts?category={{  $post->category->slug }}">{{ $post->category->name }}</a></p>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
                
                <article class="my-3">
                    {!! $post->body !!}
                </article>
                <a href="/posts" class="d-block mt-2">Back to posts </a>
            </div>
        </div>
    </div>
    

@endsection

