@extends('layouts.app') @section('content') @guest


<section id="showcase" class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="showcase-left">
                    <img src="/botman.png" alt="chatbotFaceLogo">
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="showcase-right">
                    <h1>Welcome to Chatbot Project</h1>
                    <p>This project aims to create a chatbot capable of creating webpages for the user</p>
                    <p>It also is capable of performing normal everyday talk</p>
                </div>
                <div class="nav">
                    <li class="nav-item mr-auto"><a class="nav-link btn btn-success btn-lg showcase-btn" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li class="nav-item ml-auto"><a class="nav-link btn btn-danger btn-lg showcase-btn" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="text-center">
    <div class="container">
        <h1>About Webber</h1>
        <p>Webber is a chatbot that aims to create webpages by simple conversation. The rules are simple and easy. You simply talk through the steps mentioned by the bot and at the end, hopefully, you'll have your desired webpage.</p>
    </div>
</section>

<section id="services" class="text-center">
    <div class="container">
        <div class="service">
            <h1>Services</h1>
            <p>Choose from our two chatbot services</p>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="info-left">
                    <a class="btn btn-primary btn-lg" href="/login">General Bot</a>
                    <p>This is a chatbot for normal talk. It's quite unpredictable.</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="info-right">
                    <a class="btn btn-primary btn-lg" href="/login">Webber</a>
                    <p>This is a chatbot for those who want to build webpages through simple talk.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact">
    @include('inc.contact')
</section>

<footer class="footer text-center pt-5">
    <div class="justify-content-center">
        <p>Copyright &copy; 2018 B.Tech Project by Saurabh Srivastava</p>
    </div>
</footer>

@else
<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="text-center">
                        <p>Create a new page using our chatbot or view your previously created pages</p>
                        <ul class="nav">
                            <li class="nav-item mr-auto"><a class="btn btn-primary nav-link" href="/home">New Page</a></li>
                            <li class="nav-item ml-auto"><a class="btn btn-primary nav-link" href="/templates">My Templates</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endguest @endsection
