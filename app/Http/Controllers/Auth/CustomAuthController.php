<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{   
    public function customLogin(Request $request)
    {   
        
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        $authCheck = Auth::attempt($credentials);
        if($authCheck) {
            $role = User::find(Auth::id())->role;
            if($role == 1 || $role == 3){
                return redirect()->intended('home')
                        ->withSuccess('Signed in');
            }elseif($role == 0){
                return "student";
            }elseif($role == 2){
                return "Teacher";
            }
           
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

     public function logout() {
        Session::flush();
        Auth::logout();
        return redirect()->route('index');
    }
    
}
