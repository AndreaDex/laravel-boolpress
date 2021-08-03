@extends('layouts.app')

@section('content')

<h1> Blog</h1>
<div class="card text-left" v-for="(post,index) in posts">
    <img class="card-img-top" src="" alt="">
    <div class="card-body">
        <h4 class="card-title">@{{post.title}}</h4>
        <p class="card-text">@{{post.body}}</p>

        <p class="card-text"> Tags: @{{post.tags}}</p>
    </div>
</div>

<prova-component></prova-component>


@endsection