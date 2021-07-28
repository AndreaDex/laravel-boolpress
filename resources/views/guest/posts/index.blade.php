@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-around flex-wrap">
    <!-- Posts Card -->
    @foreach ($posts as $post )
    <div class="card">
        <img src="{{$post->poster}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">
                {{$post->title}}
            </h5>

            <h6> {{$post->subtitle}}</h6>

            <p class="card-text"> {{$post->body}}</p>
            <a href="{{route('posts.show',$post->id)}}" class="btn btn-primary">Leggi</a>
        </div>
    </div>
    @endforeach

    <!-- Paginate link -->
    {{ $posts->links() }}
</div>
@endsection