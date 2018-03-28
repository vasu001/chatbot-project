@extends('layouts.app')

@section('content')
<div class="container mt-5 py-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center h3 text-danger">Bot Creation Page</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="@yield('blog')" allowfullscreen></iframe>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
@endsection
