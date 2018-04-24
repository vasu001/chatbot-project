<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>{{ $bot->webTitle }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/template/Art_files/w3.css">
    <link href="/template/Art_files/css" rel="stylesheet" type="text/css">
    <style>
        .w3-row img {
            margin-bottom: -8px
        }

    </style>
</head>

<body>

    <!-- !PAGE CONTENT! -->
    <div class="container" style="max-width:1500px">

        <!-- Header -->
        <header class="w3-container w3-xlarge w3-padding-24">
            <a href="#" class="w3-left">{{$bot->userName}}'s ART</a>
            <a href="#about" class="w3-right">About</a>
        </header>
        <div class="container">

            {{-- Welcome Paragraph --}}
            <div class="jumbotron text-center">
                <h1>
                    {{$bot->welcomeHeading}}
                </h1>
                <p>{{$bot->welcomeTextPara}}</p>
            </div>
        
            <!-- Photo Grid -->
            <div class="w3-row jumbotron">
                <div class="w3-half">
                    <img src="/template/Art_files/streetart.jpg" style="width:100%">
                    <img src="/template/Art_files/streetart2.jpg" style="width:100%">
                    <img src="/template/Art_files/streetart5.jpg" style="width:100%">
                </div>

                <div class="w3-half">
                    <img src="/template/Art_files/streetart3.jpg" style="width:100%">
                    <img src="/template/Art_files/streetart4.jpg" style="width:100%">
                </div>
            </div>

            {{-- About Section --}}
            <div class="jumbotron text-center" id="about">
                <h2>About</h2>
                <img src="/template/Art_files/boy.jpg" class="w3-image w3-padding-32" width="300" height="300">
                <p>{{$bot->aboutTextPara}}</p>
            </div>

            <div class="jumbotron text-center bg-white">
                <div class="container" id="contact">
                    <h1 class="text-center">Contact Us</h1>

                    <div class="row my-5">
                        <div class="col-md-8 h-100">
                            <div class="link-left">
                                <div class="card">
                                    <div class="card-header">Message Form</div>
                                    <div class="card-body">
                                        @include('inc.messages') {!! Form::open(['url' => '/contact/submitForArt'], ['class' => 'container']) !!}
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" placeholder="Enter name" id="name" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" placeholder="Enter email" id="email" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea class="form-control" placeholder="Enter message" name="message" id="message" rows="10" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 h-100 jumbotron">
                            <div class="link-right px-5">
                                <a target="_blank" href="mailto:vvasu001@gmail.com"><i class="fas fa-envelope fa-5x px-5"></i></a>
                                <a target="_blank" href="https://twitter.com/obitothetobi"><i class="fab fa-twitter fa-5x px-5"></i></a>
                                <a target="_blank" href="https://github.com/vasu001"><i class="fab fa-github fa-5x px-5"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- Footer --}}
        <footer class="container-fluid bg-dark text-center text-white m-5 p-5">
            <p>Powered by Chatbot &copy; 2018</p>
        </footer>
    </div>

</body>

</html>
