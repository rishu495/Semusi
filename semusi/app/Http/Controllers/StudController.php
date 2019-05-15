<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Illuminate\Mail\Mailer;


class StudController extends Controller
{
    public function studAddSuccess(Request $request){
        $studD=new Student;
        $studD->name=$request->name;
        $studD->email=$request->email;
        $studD->password=$request->password;
        $studD->dob=$request->dob;
        $studD->rollno=$request->rollno;
        $studD->skills=$request->skills;
        $studD->gender=$request->gender;
        $studD->save();
        return redirect('/mail/AddStud');
    }
     public function mailAddStud(Request $request, Mailer $mailer){
         $mailer->to('rishabhagrawal495@gmail.com')->send(new \App\Mail\AddStudent(
            'Title to mail'
        ));
        return view('successLoginEmp');
     }
    
    public function EditId(Request $request){
        $id= $request->id;
        $form=Student::find($id);
        return view('StudUpdate')->with('form',$form);
    }
    
    public function updateSubmitStudent(Request $request){
        $id=$request->id;
        $studD=Student::find($id);  
        $studD->name=$request->name;
        $studD->email=$request->email;
        $studD->password=$request->password;
        $studD->dob=$request->dob;
        $studD->rollno=$request->rollno;
        $studD->skills=$request->skills;
        $studD->gender=$request->gender;
        $studD->save();
        return redirect('/mail/updateStud');
    }
     public function mailUpdStud(Request $request, Mailer $mailer) {
        $mailer->to('rishabhagrawal495@gmail.com')->send(new \App\Mail\UpdateStudent(
            'Title to mail'
        ));
        return view('successLoginEmp');
    }
    
    public function delete(Request $request){
        $id=$request->id;
        $deleteStud=Student::find($id);
        $deleteStud->delete();
        return redirect('/mail/delStud');    }
    
    public function mailDelStud(Request $request, Mailer $mailer) {
        $mailer->to('rishabhagrawal495@gmail.com')->send(new \App\Mail\DeleteStudent(
            'Title to mail'
        ));
        return view('successLoginEmp');
    }
    
    public function view(Request $request){
        $id=$request->id;
        $form=Student::find($id);
        return view('viewStud')->with('form',$form);
    }
}
