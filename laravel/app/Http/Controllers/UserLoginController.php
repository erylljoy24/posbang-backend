<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect; 
use Illuminate\Support\Facades\Storage; 
 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\User;


class UserLoginController extends Controller
{
   
  public function login(){
      return view('pages.login');
  }

     public function loginPost(Request $request){
        $UName = $request->UName;
        $password = $request->password;

        $data = User::where('UName',$UName)->first();

        if($data && Hash::check($password,$data->password)){
              Session::put('user_id',$data->UserID);
              Session::put('uname',$data->UName);
              Session::put('fname',$data->UFirstName);
              Session::put('role',$data->Role);
              Session::put('firmId',$data->FirmID);
              Session::put('login',TRUE);

              if ($data->Role == "admin") {
                  return redirect('/admin/home');
              }else{
                return redirect('/home');
              }
         }else{ 
                return redirect('login')->with('alert','Credentials incorrect!');
             }
        }

    public function logoutUser(){
        Session::flush();
        return redirect('login');
    }
        
}
