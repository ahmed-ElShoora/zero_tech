<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Throwable;

class AboutController extends Controller
{
    public function index(){
        try {
            $about_ar = Setting::where('var','about_ar')->first()->value;
            $about_en = Setting::where('var','about_en')->first()->value;

            return view('admin.about.index',compact('about_ar','about_en'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function store(Request $request){
        try {
            Setting::where('var','about_ar')->first()->update([
                'value'=>$request->about_ar
            ]);
            Setting::where('var','about_en')->first()->update([
                'value'=>$request->about_en
            ]);
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }
}
