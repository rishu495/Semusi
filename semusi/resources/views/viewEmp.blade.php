@extends('layouts.app')


@section('content')

        <form method="POST" action="">
                        {{csrf_field()}}

                        <div class="form-group row">
                            <label for="employeeName" class="col-md-5 col-form-label text-md-right">{{ __('Employee Name') }}</label>

                            <div class="col-md-4">
                                <label for="employeeName" class="col-md-5 col-form-label text-md-right">{{$form->name}}</label>
                            </div>
                        </div>
            
            
                        <div class="form-group row">
                            <label for="email" class="col-md-5 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-4">
                                 <label for="employeeName" class="col-md-5 col-form-label text-md-right">{{$form->email}}</label>
                            </div>
                        </div>

                       

                        <div class="form-group row">
                            <label for="dob" class="col-md-5 col-form-label text-md-right">{{ __('Date-oF-Birth') }}</label>

                            <div class="col-md-4">
                                 <label for="employeeName" class="col-md-5 col-form-label text-md-right">{{$form->dob}}</label>
                            </div>
                        </div>
            
                        <div class="form-group row">
                            <label for="designation" class="col-md-5 col-form-label text-md-right">{{ __('Designation') }}</label>

                            <div class="col-md-4">
                                 <label for="employeeName" class="col-md-5 col-form-label text-md-right">{{$form->designation}}</label>
                            </div>
                        </div>
            
            
                        <div class="form-group row">
                            <label for="skills" class="col-md-5 col-form-label text-md-right">{{ __('Skills') }}</label>

                            <div class="col-md-4">
                                 <label for="employeeName" class="col-md-5 col-form-label text-md-right">{{$form->skills}}</label>
                            </div>
                        </div>
            
            
                        <div class="form-group row">
                            <label for="gender" class="col-md-5 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-4">
                                     <label for="employeeName" class="col-md-5 col-form-label text-md-right">{{$form->gender}}</label>
                            </div>
                        </div>
                        
                        <input type="hidden" name="id" value="{{$form->id}}">

                    </form>

@endsection


