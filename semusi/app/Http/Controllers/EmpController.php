<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\addEmp;
use Illuminate\Mail\Mailer;

class EmpController extends Controller
{
    public function mailAddEmp(Request $request, Mailer $mailer) {
        $mailer->to('rishabhagrawal495@gmail.com')->send(new \App\Mail\MyMail(
            'Title to mail'
        ));
        return view('successLogin');
    }
    
    public function mailUpdEmp(Request $request, Mailer $mailer) {
        $mailer->to('rishabhagrawal495@gmail.com')->send(new \App\Mail\UpdEmp(
            'Title to mail'
        ));
        return view('successLogin');
    }
    
     public function mailDelEmp(Request $request, Mailer $mailer) {
        $mailer->to('rishabhagrawal495@gmail.com')->send(new \App\Mail\DelEmp(
            'Title to mail'
        ));
        return view('successLogin');
    }
    
    public function addEmp(Request $request){
        $empD=new addEmp;
        $empD->name=$request->name;
        $empD->email=$request->email;
        $empD->password=$request->password;
        $empD->dob=$request->dob;
        $empD->designation=$request->designation;
        $empD->skills=$request->skills;
        $empD->gender=$request->gender;
        $empD->save();
        return redirect('/mail/addEmp');
    }
    
    
    public function update(Request $request){
        $id= $request->id;
        $form=addEmp::find($id);
        return view('update')->with('form',$form);
    }
    
    
    public function updateSubmit(Request $request){
        $id=$request->id;
        $empD=addEmp::find($id);
        $empD->name=$request->name;
        $empD->email=$request->email;
        $empD->password=$request->password;
        $empD->dob=$request->dob;
        $empD->designation=$request->designation;
        $empD->skills=$request->skills;
        $empD->gender=$request->gender;
        $empD->save();
        return redirect('/mail/updateEmp');
    }
    
    public function delete(Request $request){
        $id=$request->id;
        $deleteEmp=addEmp::find($id);
        $deleteEmp->delete();
        return redirect('/mail/delEmp');    }
    
    public function view(Request $request){
        $id=$request->id;
        $form=addEmp::find($id);
        return view('viewEmp')->with('form',$form);
    }
}
