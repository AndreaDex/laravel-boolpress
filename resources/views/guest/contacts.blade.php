@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Contact Me</h1>
    <!-- Messaggio operazione riuscita -->
    @if(session('message'))
    <div class="alert alert-success" role="alert">
        <strong>{{session('message')}}</strong>
    </div>
    @endif

    <!-- Messaggi di errore -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{route('send.contact.form')}}" method="POST">
        @csrf
        <!-- Name -->
        <div class="form-group">
            <label for="name">Nome</label>
            <input class="form-control" type="text" name="name" id="name">
        </div>

        <!-- Surname -->
        <div class="form-group">
            <label for="surname">Cognome</label>
            <input class="form-control" type="text" name="surname" id="surname">
        </div>

        <!-- Date of birth -->
        <div class="form-group">
            <label for="dob">Data di nascita</label>
            <input class="form-control" type="date" name="dob" id="dob">
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="email">email</label>
            <input class="form-control" type="email" name="email" id="email">
        </div>

        <!-- Message -->
        <div class="form-group">
            <label for="message">message</label>
            <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
        </div>

        <button class="btn btn-primary btn-block" type="submit">Invia</button>
    </form>
</div>
@endsection