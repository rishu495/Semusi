@extends('layouts.app')


@section('content')

    <div class="alert alert-danger success-block">
        <strong>
            WELCOME Admin->{{Auth::user()->name}}!!
        </strong><br>
    </div>


    <div class="form-group row">
        <label for="addEmployee" class="col-md-4 col-form-label text-md-left" style="color:hsl(0, 100%, 75%);font-size:25px;margin-left:10%;"> <a href="{{url('/main/empForm')}}">{{ __('Add Employee') }}</a></label>
    </div>

    <div class="form-group row">
        <label for="addEmployee" class="col-md-4 col-form-label text-md-left" style="color:hsl(0, 100%, 75%);font-size:25px;margin-left:10%;"> <a href="{{url('/main/updateId')}}">{{ __('Edit Employee') }}</a></label>
    </div>
    
    <div class="form-group row">
        <label for="addEmployee" class="col-md-4 col-form-label text-md-left" style="color:hsl(0, 100%, 75%);font-size:25px;margin-left:10%;"> <a href="{{url('/main/deleteId')}}">{{ __('Delete Employee') }}</a></label>
    </div>

    <div class="form-group row">
        <label for="addEmployee" class="col-md-4 col-form-label text-md-left" style="color:hsl(0, 100%, 75%);font-size:25px;margin-left:10%;"> <a href="{{url('/main/viewId')}}">{{ __('View Employee Details') }}</a></label>
    </div>

@endsection