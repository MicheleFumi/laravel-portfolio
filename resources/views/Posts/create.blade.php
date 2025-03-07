@extends('layouts.posts')
@yield('title')


@section('content')
    <form action={{ route('posts.store') }} method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId" />
            <small id="helpId" class="text-muted">Inserisci il titolo </small>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">autore</label>
            <input type="text" name="author" id="author" class="form-control" placeholder=""
                aria-describedby="helpId" />
            <small id="helpId" class="text-muted">Inserisci l' autore </small>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">categoria</label>
            <input type="text" name="category" id="category" class="form-control" placeholder=""
                aria-describedby="helpId" />
            <small id="helpId" class="text-muted">Inserisci la categoria </small>
        </div>
        <div class="mb-3">
            <label for="contenuto" class="form-label">contenuto</label>
            <div class="form-floating">
                <textarea class="form-control" placeholder="" name="content" id="content"></textarea>
                <small id="helpId" class="text-muted">Inserisci il contenuto </small>
            </div>
        </div>
        <button type="submit btn btn-dark">Aggiungi</button>
    </form>
@endsection
