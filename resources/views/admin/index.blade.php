@extends('layouts.admin')

@section('main_content')
<div class="row">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Subtitle</th>
                <th scope="col">Author</th>
                <th scope="col">Body</th>
                <th scope="col">Poster</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post )
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->subtitle}}</td>
                <td>{{$post->author}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->poster}}</td>
                <td><a class="btn btn-primary" href="{{route('admin.posts.show',$post->id)}}" role="button">SHOW</a>
                    <a class="btn btn-primary" href="{{route('admin.posts.edit',$post->id)}}" role="button">EDIT</a>
                    <a class="btn btn-primary" href="" role="button">DELETE</a>
                </td>



            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection