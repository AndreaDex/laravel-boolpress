@extends('layouts.admin')

@section('main_content')
<div class="container">
    <div class="card_show d-flex flex-column align-items-center">
        <img src="{{$post->poster}}" class="" alt="image not found">
        <div class="card-body">
            <h5 class="card-title">
                {{$post->title}}
            </h5>

            <h6> {{$post->subtitle}}</h6>

            <p class="card-text"> {{$post->body}}</p>
            <p class="card-text">{{$post->author}}</p>
            <span>Date : {{$post->update_at}}</span>
        </div>
    </div>
</div>

@endsection