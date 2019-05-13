@extends('layouts.app')

@section('content')

    <form method="post" action="{{url('/view/employee')}}
">
                        {{csrf_field()}}

                        <div class="form-group row">
                            <label for="employeeName" class="col-md-4 col-form-label text-md-right">{{ __('Employee ID') }}</label>

                            <div class="col-md-4">
                                
                                <input id="id" type="text" class="form-control" name="id" required autofocus>
                            </div>
                        </div>
        
                         <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-6">
                                <button type="submit" name="add" value="add" class="btn btn-primary">
                                    {{ __('View') }}
                                </button>

                                
                            </div>
                        </div>
    </form>


@endsection