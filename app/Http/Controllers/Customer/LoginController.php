<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Throwable;

class LoginController extends Controller
{
    public function login(Request $request){
        try{
            //return $request;
            $email = $request->email;
            $password = $request->password;
            if(auth()->guard('web')->attempt(['email' => $email,'password' => $password])){
                return redirect()->route('home.customer');
            }
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }
}
