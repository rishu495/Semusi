@extends('layout')
@section('content')
<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
        <form action="{{route('update.save',['id'=>$update->id])}}" method="post">
            {{csrf_field()}}
            <input type="text" class="form-control input-lg" name="todo" value="{{$update->todo}}" placeholder="Create a Todo">
        </form>
    </div>
</div>
 
@stop