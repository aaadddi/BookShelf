<?php
namespace App\Http\Controllers;

use Mail;
use Cookie;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;
// use Response;
// use withCookie;
class login extends Controller
{
    public function login(Request $req){
    $email_to_check = $req->input('email');
    $password_to_check = $req->input('password');
  
    if(!DB::select("SELECT *FROM users WHERE email = '$email_to_check'")){
       
        return "USER NOT FOUND";
        // alert("Email is not Associated with any account <a href='loginPage'>Go back</a>");
    }
    else{
        if( $password_to_check != DB::table('users')->where('email',$email_to_check)->value('password')){
           return "Incorrect Password";
        // alert("Wrong Password <a href='loginPage'>Go back</a>");
       }
       else{
        $req->session()->put('loggedIn', true);
        return redirect('home');
       } 

    }
    
    }
    public function signUp(Request $req){
        $semail = $req->input('sign-email');
        $sname = $req->input('sign-name');
        $spass = $req->input('sign-password');

        if(DB::select("SELECT *FROM users WHERE email = '$semail'")){
            return "Accout exist";
        }
        else{
            DB::insert('insert into users  values (?, ?,?)', array($semail,$sname,$spass));
            Mail::send([],[],function($message) use ($semail){
                $message->to($semail);
                $message->subject("hello dev");
                $message->setBody("hello dev this is body");
            });
            $response = new response();
            // $response->withCookie(cookie('emailFill',$semail));
            // $response->withCookie(cookie('passFill',$spass));
            Cookie::queue('emailFill', $semail, 15);
            Cookie::queue('passFill', $spass, 15);
            return redirect('loginPage');
        }
       
        

       
    }
    public function logout(){
        if(session('loggedIn')){
            session()->pull('loggedIn', '');
            return redirect('/');
        }
    }
   
    //
}
  

