{!! Form::open(['url' => '/store'], ['class' => 'container']) !!}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" placeholder="Enter name" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="webact">Webact</label>
                            <input type="text" class="form-control" placeholder="Enter webact" id="webact" name="webact" required>
                        </div>
                        <div class="form-group">
                            <label for="webname">Webname</label>
                            <input type="text" class="form-control" placeholder="Enter webname" id="webname" name="webname" required>
                        </div>
                        <div class="form-group">
                            <label for="webbrand">WebBrand</label>
                            <input type="text" class="form-control" placeholder="Enter webbrand" id="webbrand" name="webbrand" required>
                        </div>
                        <div class="form-group">
                            <label for="webheader">Webheader</label>
                            <input type="text" class="form-control" placeholder="Enter webheader" id="webheader" name="webheader" required>
                        </div>
                        <div class="form-group">
                            <label for="webheaderpara">Webheaderpara</label>
                            <input type="text" class="form-control" placeholder="Enter webheaderpara" id="webheaderpara" name="webheaderpara" required>
                        </div>
                        <div class="form-group">
                            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                        </div>
{!! Form::close() !!}
