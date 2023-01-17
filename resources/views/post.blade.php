@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>
                <p>By. <a href="/blog?author={{ $post->author->username }}"
                        class="text-decoration-none">{{ $post->author->name }}</a> in
                    <a href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                </p>
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}"
                        class="img-fluid mt-3">
                @else
                    <img src="https://source.unsplash.com/random/1200×400?{{ $post->category->name }}" class="card-img-top"
                        alt="{{ $post->category->name }}" class="img-fluid mt-3">
                @endif

                <article class="my-3 fs-4">
                    {!! $post->body !!}
                </article>
                <a href="/blog" class="d-block mt-3">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection
