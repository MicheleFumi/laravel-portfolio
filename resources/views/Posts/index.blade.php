@extends('layouts.posts')
@yield('title')


@section('content')
    <a href={{ route('posts.create') }} class="btn btn-dark mt-3">Aggiungi un nuovo post</a>
    <div class=" mt-4">
        @foreach ($posts as $post)
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Autore: {{ $post->author }}</h6>
                    <p class="badge bg-primary mb-0">{{ $post->type->name }}</p>
                    <p class="card-text mb-2">{{ $post->content }}</p>
                    <a href={{ route('posts.show', $post->id) }} class="btn btn-dark mt-3">Vai al dettaglio</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
