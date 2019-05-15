@extends('layouts.app')


@section('content')

        <form method="POST" action="{{url('/main/studUpdateSuccess')}}">
                        {{csrf_field()}}

                        <div class="form-group row">
                            <label for="employeeName" class="col-md-4 col-form-label text-md-right">{{ __('Student Name') }}</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="name" value="{{$form->name}}" required autofocus>
                            </div>
                        </div>
            
            
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control" name="email" value="{{$form->email}}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-4">
                                <input id="password" type="password" class="form-control" name="password" value="{{$form->password}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date-oF-Birth') }}</label>

                            <div class="col-md-4">
                                <input id="dob" type="date" class="form-control" name="dob" value="{{$form->dob}}" required>
                            </div>
                        </div>
            
                        <div class="form-group row">
                            <label for="rollno" class="col-md-4 col-form-label text-md-right">{{ __('Roll No.') }}</label>

                            <div class="col-md-4">
                                <input id="rollno" type="text" class="form-control" name="rollno" value="{{$form->rollno}}" required>
                            </div>
                        </div>
            
            
                        <div class="form-group row">
                            <label for="skills" class="col-md-4 col-form-label text-md-right">{{ __('Other Skills') }}</label>

                            <div class="col-md-4">
                                <input id="skills" type="text" class="form-control" name="skills" value="{{$form->skills}}" required>
                            </div>
                        </div>
            
            
                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                    <input type="radio" name="gender" value="Male" checked> Male<br>
                                    <input type="radio" name="gender" value="Female"> Female<br>
                                    <input type="radio" name="gender" value="Other"> Other  
                            </div>
                        </div>
                        
                        <input type="hidden" name="id" value="{{$form->id}}">

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-6">
                                <button type="submit" name="add" value="add" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>

                                
                            </div>
                        </div>
                    </form>

@endsection


