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

    <form action="{{route('admin.posts.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Title -->
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{old('title')}}" placeholder="Inserisci il titolo del post">
        </div>
        @error('title')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <!-- Sottotitolo -->
        <div class="form-group">
            <label for="subtitle">Sottotitolo</label>
            <input type="text" class="form-control @error('subtitle') is-invalid @enderror" name="subtitle" id="subtitle" value="{{old('subtitle')}}" placeholder="Inserisci il sottotitolo del post">
        </div>
        @error('subtitle')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <!-- Autore -->
        <div class="form-group">
            <label for="author">Autore</label>
            <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" id="author" value="{{old('author')}}" placeholder="Inserisci il nome dell'autore">
        </div>
        @error('author')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <!-- Contenuto -->
        <div class="form-group">
            <label for="body">Articolo</label>
            <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body" rows="3">{{old('body')}}</textarea>
        </div>
        @error('body')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <!-- Poster -->
        <div class="form-group">
            <label for="poster">Carica un'immagine</label>
            <input class="form-control @error('poster') is-invalid @enderror" type="file" name="poster" id="poster">
        </div>
        @error('poster')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <!-- Categoria -->
        <div class="form-group">
            <label for="category_id">Categoria</label>
            <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                <option value="">Segli una categoria</option>

                @foreach ($categories as $category )
                <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach

            </select>
        </div>
        @error('category_id')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <!-- Tags -->
        <div class="form-group">
            <label for="tags">Tags</label>
            <select multiple class="form-control @error('tags') is-invalid @enderror" name="tags[]" id="tags">
                <option disabled>Select tags</option>
                @if ($tags)

                @foreach ($tags as $tag )
                <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach

                @endif
            </select>
        </div>
        @error('tags')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <!-- Submit -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection