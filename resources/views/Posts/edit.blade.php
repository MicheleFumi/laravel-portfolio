@extends('layouts.posts')
@yield('title')


@section('content')
    <form action={{ route('posts.update', $post) }} method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId"
                value={{ $post->title }} />
            <small id="helpId" class="text-muted">Modifica il titolo </small>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">autore</label>
            <input type="text" name="author" id="author" class="form-control" placeholder=""
                aria-describedby="helpId" value={{ $post->author }} />
            <small id="helpId" class="text-muted">Modifica l' autore </small>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">categoria</label>
            <select name="type_id" id="type_id" class="form-select">
                @foreach ($types as $type)
                    <option value="{{ $type->id }}"{{ $post->type_id == $type->id ? 'selected' : '' }}>
                        {{ $type->name }}</option>
                @endforeach
            </select>
            <small id="helpId" class="text-muted">Modifica la categoria </small>
        </div>
        <div class="mb-3">
            <label for="technology" class="form-label">Tecnologie</label>
            <div class="d-flex flex-wrap gap-2">
                @foreach ($technologies as $technology)
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="technologies[]" id="{{ $technology->id }}"
                            value="{{ $technology->id }}"
                            {{ $post->technologies->contains($technology->id) ? 'checked' : '' }}>
                        <label class="form-check-label" for="{{ $technology->id }}">
                            {{ $technology->name }}
                        </label>
                    </div>
                @endforeach
            </div>
            <small class="text-muted d-block mt-2">modifica le tecnologie</small>
        </div>
        <div class="mb-3">
            <label for="contenuto" class="form-label">contenuto</label>
            <div class="form-floating">
                <textarea class="form-control" placeholder="" name="content" id="content">{{ $post->content }}</textarea>
                <small id="helpId" class="text-muted">Modifica il contenuto </small>
            </div>
        </div>
        <button type="submit" class="btn btn-dark">Modifica</button>
    </form>
@endsection
