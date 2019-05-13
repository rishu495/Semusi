@extends('layouts.app')
@extends('layouts.preloader')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   <a href="/pingtest">Ping Testing</a>
                </div>
                <hr>
                <div class="card-body">
                   <a href="">Port Scanning</a>
                </div>
                <hr>
                
                <div class="card-body">
                   <a href="">N Mapping</a>
                </div>
                <hr>
                
                <div class="card-body">
                   <a href="">DoS Protection</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
