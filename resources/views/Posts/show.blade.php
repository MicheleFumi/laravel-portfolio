@extends('layouts.posts')
@yield('title')


@section('content')
    <div class="card mb-3 shadow-sm">
        <div class="card-body">
            <h3 class="card-title">{{ $post->title }}</h3>
            <h5 class="card-subtitle mb-2 text-muted">Autore: {{ $post->author }}</h5>
            <h6>Categoria: {{ $post->type->name }}</h6>
            {{--  <div class="d-flex gap-2">
                <span class="badge bg-primary">{{ $post->technologies->name }}</span>

            </div> --}}

            <p class="card-text mt-2">{{ $post->content }}</p>
            <a href={{ route('posts.index') }} class="btn btn-dark ">Vai alla lista dei
                post</a>
            <a href={{ route('posts.edit', $post) }} class="btn btn-outline-warning ">Modifica il post</a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Elimina </button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ATTENZIONE: l'articolo verrà cancellato in maniera PERMANENTE.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <form action={{ route('posts.destroy', $post) }} method="POST">
                        @csrf
                        @method('DELETE')

                        <input type="submit" class="btn btn-danger" value="Elimina definitivamente"></input>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
