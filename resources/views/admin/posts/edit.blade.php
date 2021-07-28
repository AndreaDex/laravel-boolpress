@extends('layouts.admin')

@section('main_content')

<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{route('admin.posts.update',$post->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")

        <!-- Title -->
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{$post->title}}" placeholder="Inserisci il titolo del post">

        </div>
        <!-- Sottotitolo -->
        <div class="form-group">
            <label for="subtitle">Sottotitolo</label>
            <input type="text" class="form-control" name="subtitle" id="subtitle" value="{{$post->subtitle}}" placeholder="Inserisci il sottotitolo del post">

        </div>
        <!-- Autore -->
        <div class="form-group">
            <label for="author">Autore</label>
            <input type="text" class="form-control" name="author" id="author" value="{{$post->author}}" placeholder="Inserisci il nome dell'autore">

        </div>
        <!-- Contenuto -->
        <div class="form-group">
            <label for="body">Articolo</label>
            <textarea class="form-control" name="body" id="body" rows="3">{{$post->body}}</textarea>
        </div>
        <!-- Poster -->
        <div class="form-group">
            <img src="{{asset('storage/'.$post->poster)}}" alt="">
            <label for="poster">Carica un'immagine</label>
            <input class="form-control" type="file" name="poster" id="poster">
            <!-- <input type="text" class="form-control" name="poster" id="poster" value="{{$post->poster}}" placeholder="Inserisci il link ad una copertina"> -->
        </div>

        <!-- Categoria -->
        <div class="form-group">
            <label for="category_id">Categoria</label>
            <select name="category_id" id="category_id" class="form-control">
                <option value="">Segli una categoria</option>
                @foreach ($categories as $category )
                <option value="{{$category->id}}" {{$category->id == old('categoty_id',$post->category_id) ? 'selected' : ''}}>{{$category->title}}</option>
                @endforeach
            </select>
        </div>

        <!-- Tags -->
        <div class="form-group">
            <label for="tags">Tags</label>
            <select multiple class="form-control" name="tags[]" id="tags">
                <option disabled>Select tags</option>
                @if ($tags)

                @foreach ($tags as $tag )
                <option value="{{$tag->id}}" {{$post->tags->contains($tag) ? 'selected' : ''}}>{{$tag->name}}</option>
                @endforeach

                @endif
            </select>
        </div>

        <!-- Submit -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection