<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Throwable;

class LoginController extends Controller
{
    public function login(){
        try{
            return view('auth.login');
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function loginStore(Request $request){
        try{
            if(auth()->guard('admin')->attempt(['email' => $request->email,'password' => $request->password])){
                return redirect()->route('home');
            }
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }
}
