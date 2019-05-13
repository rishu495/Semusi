@extends('layout')
@section('content')
<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
        <form action="/add/todo" method="post">
            {{csrf_field()}}
            <input type="text" class="form-control input-lg" name="todo" placeholder="Create a Todo">
            
        </form>
    </div>
</div>
    
    @foreach($todo as $todos)
    {{$todos->todo}}<a href="{{route('todo.delete',['id'=>$todos->id])}}" class="btn btn-danger">x</a>


    @if($todos->completed==0)
                    <a href="{{route('todo.update',['id'=>$todos->id])}}" class="btn btn-danger">update</a>
    @endif



    @if($todos->completed==0)
                    <a href="{{route('todo.completed',['id'=>$todos->id])}}" class="btn btn-success">Mark as Completed</a>
    @else
                    <span>Completed!!</span>
    @endif
    <hr>
    @endforeach
@stop