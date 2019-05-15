@extends('layouts.app')


@section('content')

    <div class="alert alert-danger success-block">
        <strong>
            WELCOME Employee->   !!
        </strong><br>
    </div>


    <div class="form-group row">
        <label for="addEmployee" class="col-md-4 col-form-label text-md-left" style="color:hsl(0, 100%, 75%);font-size:25px;margin-left:10%;"> <a href="{{url('/main/StudForm')}}">{{ __('Add Student') }}</a></label>
    </div>

    <div class="form-group row">
        <label for="addEmployee" class="col-md-4 col-form-label text-md-left" style="color:hsl(0, 100%, 75%);font-size:25px;margin-left:10%;"> <a href="{{url('/main/StudEdit')}}">{{ __('Edit Student') }}</a></label>
    </div>
    
    <div class="form-group row">
        <label for="addEmployee" class="col-md-4 col-form-label text-md-left" style="color:hsl(0, 100%, 75%);font-size:25px;margin-left:10%;"> <a href="{{url('/main/StudDel')}}">{{ __('Delete Student') }}</a></label>
    </div>

    <div class="form-group row">
        <label for="addEmployee" class="col-md-4 col-form-label text-md-left" style="color:hsl(0, 100%, 75%);font-size:25px;margin-left:10%;"> <a href="{{url('/main/StudView')}}">{{ __('View Student Details') }}</a></label>
    </div>

<div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-6">
                                <a href="{{url('/main/Emplogin')}}">
                                <button type="submit" name="add" value="add" class="btn btn-danger" >
                                    {{ __('Logout') }}
                                </button>
                                    </a>
                                
                            </div>
                        </div>

@endsection