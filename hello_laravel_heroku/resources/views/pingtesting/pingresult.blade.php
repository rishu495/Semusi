@extends('layouts.app')
@extends('layouts.preloader')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ping Results') }}</div>

                <div class="card-body">
                    
                      

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Enter Address') }}</label>

                            <div class="col-md-6">
                                //display
                                {{$output}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="packet" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                //display
                            </div>
                        </div>

                       
<!--

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ping') }}
                                </button>
                            </div>
                        </div>
-->
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection