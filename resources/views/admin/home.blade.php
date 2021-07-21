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
            </tr>
        </thead>
        <tbody>
            @foreach ( as )

            @endforeach
        </tbody>
    </table>
</div>

@endsection