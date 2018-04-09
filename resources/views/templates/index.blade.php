@extends('layouts.app') @section('content')
<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My Templates</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif @if(count($templates) > 0) @foreach($templates as $template)
                    <div class="card-body">
                        <h3><a href="/templates/{{$template->id}}">{{$template->category}}</a></h3>
                        <small>Written on {{$template->created_at}}</small>
                    </div>
                    @endforeach {{$templates->links()}} @else
                    <p>No Templates Found!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
