@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card_show d-flex flex-column align-items-center">
        <img src="{{asset('storage/'.$post->poster)}}" class="" alt="image not found">
        <div class="card-body">
            <h5 class="card-title">
                {{$post->title}}
            </h5>

            <h6> {{$post->subtitle}}</h6>

            <p class="card-text"> {{$post->body}}</p>
            <p class="card-text">Autore : {{$post->author}}</p>
            <p>Categoria : {{$post->category ? $post->category->title : 'No category found'}} </p>
            <span>Date : {{$post->updated_at}}</span>
        </div>
    </div>
</div>

@endsection