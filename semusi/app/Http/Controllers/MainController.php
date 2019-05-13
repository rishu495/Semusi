<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Auth;
use App\User;
use App\addEmp;
use Illuminate\Support\Facades\DB;


class MainController extends Controller
{
    function index(){
        return view('login');
    }
    
    
    function checklogin(Request $request){
        $this->validate($request,[
            'email'     =>      'required|email',
            'password'  =>      'required|min:3'
        ]);
        
        
        $user_data=array(
            'email'    =>   $request->get('email'),
            'password' =>   $request->get('password'),
        );
        
        
        if(Auth::attempt($user_data)){
            return redirect('main/successlogin');  
        }
        else{
                return back()->with('error','Invalid Credentials');
        }
    }
    
    
    function successLogin(){
        return view ('successLogin');
    }
    
    
    function logout(){
        Auth::logout();
        return redirect('main');
    }
    
    function Emplogin(){
        return view('EmpLogin');
    }
    
    function Empchecklogin(Request $request){
        $email=$request->email;
        $password=$request->password;
        $auth = DB::table('add_emps')->where('email', $email)->first();
        if(!$auth){
            echo "Login Failed";
        }
        else{
        $authEmail=$auth->email;
        $authPass=$auth->password;
        if($email==$authEmail && $password==$authPass){
            return view('successLoginEmp')->with('auth',$auth);
        }
        else{
            echo "Login Failed";
        }
        }
        
    }
}
