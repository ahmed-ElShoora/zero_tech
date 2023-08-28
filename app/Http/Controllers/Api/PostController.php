<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\ContactPackage;
use Illuminate\Http\Request;
use Throwable;
class PostController extends Controller
{
    public function contact(Request $request){
        try {
            Contact::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'title'=>$request->title,
                'message'=>$request->message
            ]);
            return response()->json([
                'status'=>true,
                'msg'=>'تمت العملية بنجاح',
                'data'=>''
            ]);
        }catch (Throwable $e){
            return response()->json([
                'status'=>false,
                'msg'=>'حدث خطأ',
                'data'=>''
            ]);
        }
    }

    public function package(Request $request){
        try {
            ContactPackage::create([
                'package_id'=>$request->package_id,
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'title'=>$request->title,
                'message'=>$request->message
            ]);
            return response()->json([
                'status'=>true,
                'msg'=>'تمت العملية بنجاح',
                'data'=>''
            ]);
        }catch (Throwable $e){
            return response()->json([
                'status'=>false,
                'msg'=>'حدث خطأ',
                'data'=>''
            ]);
        }
    }
}
