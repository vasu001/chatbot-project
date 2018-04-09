@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My Templates</div>

                <div class="card-body">
                    <?php echo $name; ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
