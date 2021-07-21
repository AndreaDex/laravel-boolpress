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

    <form action="{{route('admin.posts.store')}}" method="POST">
        @csrf
        <!-- Title -->
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{old('title')}}" placeholder="Inserisci il titolo del post">

        </div>
        <!-- Sottotitolo -->
        <div class="form-group">
            <label for="subtitle">Sottotitolo</label>
            <input type="text" class="form-control" name="subtitle" id="subtitle" value="{{old('subtitle')}}" placeholder="Inserisci il sottotitolo del post">

        </div>
        <!-- Autore -->
        <div class="form-group">
            <label for="author">Autore</label>
            <input type="text" class="form-control" name="author" id="author" value="{{old('author')}}" placeholder="Inserisci il nome dell'autore">

        </div>
        <!-- Contenuto -->
        <div class="form-group">
            <label for="body">Example textarea</label>
            <textarea class="form-control" name="body" id="body" rows="3">{{old('body')}}</textarea>
        </div>
        <!-- Poster -->
        <div class="form-group">
            <label for="poster">Poster url</label>
            <input type="text" class="form-control" name="poster" id="poster" value="{{old('poster')}}" placeholder="Inserisci il link ad una copertina">
        </div>

        <!-- Submit -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection