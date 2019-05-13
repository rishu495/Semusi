<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todo;
class firstController extends Controller
{
   public function index(){
       $retreive=todo::all();
       return view('todo')->with('todo',$retreive);
       
   }
    
    public function addTodo(Request $request){
       $todo=new todo;
       $todo->todo=$request->todo;
       $todo->save();
       return redirect()->back();
        
    }
    
    
    public function delete($id){
        $todo=todo::find($id);
        $todo->delete();
        return redirect()->back();
    }
    
    public function update($id){
        $todo=todo::find($id);
        return view('update')->with('update',$todo);
    }
    
    public function todoSave(Request $request,$id){
        $todo=todo::find($id);
        $todo->todo=$request->todo;
        $todo->save();
        return redirect()->route('todo');
    }
    
    public function todoCompleted($id){
        $todo=todo::find($id);
        $todo->completed=1;
        $todo->save();
        return redirect()->route('todo');
    }
}
