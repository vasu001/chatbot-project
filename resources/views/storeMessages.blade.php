@extends('layouts.app') @section('content')
<div class="container mt-5 pt-5 pb-5">
    <h1 class="h3 text-danger">Messages</h1>
    @if(count($messages) > 0)
    @foreach($messages as $message)
    <div class="card my-5">
        <ul class="list-group">
            <li class="list-group-item"><span class="text-primary">Name: </span>{{$message->name}}</li>
            <li class="list-group-item"><span class="text-danger">Email: </span>{{$message->email}}</li>
            <li class="list-group-item"><span class="text-info">Message: </span>{{$message->message}}</li>
        </ul>
    </div>
    @endforeach
    @endif
<a class="btn btn-primary" href="{{ url('/') }}">Go back to Home</a>
</div>
@endsection
