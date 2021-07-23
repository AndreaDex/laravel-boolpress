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
                <td><img src="{{asset('storage/'.$post->poster)}}" width="100" alt=""></td>
                <td><a class="btn btn-secondary m-1" href="{{route('admin.posts.show',$post->id)}}" role="button">SHOW</a>
                    <a class="btn btn-primary m-1" href="{{route('admin.posts.edit',$post->id)}}" role="button">EDIT</a>
                    <!-- <a class="btn btn-danger m-1" href="{{route('admin.posts.destroy',$post->id)}}" role="button">DELETE</a> -->
                    <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST">
                        @method('DELETE')
                        @csrf

                        <input class="btn-danger m-1" type="submit" value="Delete" />

                    </form>
                </td>



            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection