<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Privacy;
use Illuminate\Http\Request;
use Throwable;

class PrivacyController extends Controller
{
    public function index(){

        try {
            $data = Privacy::where('id',1)->first();
            return view('admin.privacy.index',compact('data'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function store(Request $request){

        try {
            Privacy::where('id',1)->first()->update([
                'text_ar'=>$request->text_ar,
                'text_en'=>$request->text_en
            ]);
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }
}
