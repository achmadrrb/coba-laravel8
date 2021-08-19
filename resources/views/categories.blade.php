@extends('layouts.main')

@section('content')
    <h1 class="mb-5">Post Categories</h1>
    
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-3">
                    <a href="/categories/{{  $category->slug }}">
                        <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/400x400?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                            <div class="card-img-overlay">
                            <h5 class="card-title">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection

