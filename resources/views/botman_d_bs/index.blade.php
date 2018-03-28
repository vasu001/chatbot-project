@extends('layouts.app')

@section('content')
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
                    @endif

                    @if(count($botman_d_bs) > 0)
                        @foreach($botman_d_bs as $botman)
                            <div class="card-body">
                                <h3><a href="/botman_d_bs/{{$botman_d_bs->id}}">{{$botman_d_bs->category}}</a></h3>
                                <small>Written on {{$botman_d_bs->created_at}}</small>
                            </div>
                        @endforeach
                        {{$botman_d_bs->links()}}
                    @else
                        <p>No Templates Found!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
