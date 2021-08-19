@extends('layouts.main')

@section('content')
    <h1 class="mb-5">{{ $title }}</h1>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            <div class="card-body">
            <h2 class="card-title">{{ $posts[0]->title }}</h2>
            <p>
                <small class="text-muted">
                    By. <a href="/author/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/categories/{{  $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }} </a> Last updated {{ $posts[0]->created_at->diffForHumans() }}
                </small>
            </p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none border-bottom">Read more..</a>
            </div>
        </div>
    
    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4">
                <div class="card">
                    <div class="position-absolute bg-dark px-3 py-2"><a href="/categories/{{  $post->category->slug }}" class="text-decoration-none text-white">{{  $post->category->name  }}</a></div>
                    <img src="https://source.unsplash.com/400x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <p>
                        <small class="text-muted">
                            By. <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{  $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }} </a> Last updated {{ $post->created_at->diffForHumans() }}
                        </small>
                    </p>
                      <p class="card-text">{{ $post->excerpt }}</p>
                      <a href="/posts/{{ $post->slug }}" class="text-decoration-none border-bottom">Read more..</a>
                      {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>

    @else
        <p class="text-center fs-4">No post available.</p>
    @endif 
    
@endsection

