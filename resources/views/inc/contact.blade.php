<div class="container">
    <h1 class="text-center">Contact Us</h1>

    <div class="row my-5">
        <div class="col-md-8 h-100">
            <div class="link-left">
                <div class="card">
                    <div class="card-header">Message Form</div>
                    <div class="card-body">
                        @include('inc.messages') {!! Form::open(['url' => '/contact/submit'], ['class' => 'container']) !!}
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
