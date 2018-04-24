@extends('layouts.app') @section('content')
<div class="container mt-5 py-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center h3 bg-primary text-white">Bot Creation Page</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <a href="botman_d_bs" class="btn btn-primary btn-block w-50 text-center mt-5" target="_blank">Go to your page</a>
        </div>
    </div>
</div>
</div>
<script>
    var botmanWidget = {
        aboutText: 'A Chatbot that creates a Webpage',
        title: 'Webber',
        introMessage: 'Type Hello to Start',
        bubbleBackground: 'red',
        mainColor: 'red',
        desktopHeight: 640,
        desktopWidth: 370
    };

</script>
<script id="botmanWidget" src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
@endsection
