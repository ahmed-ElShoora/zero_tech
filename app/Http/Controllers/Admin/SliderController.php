<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Throwable;

class SliderController extends Controller
{
    public function index(){

        try {
            $sliders = Slider::paginate(15);
            return view('admin.slider.index',compact('sliders'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function delete($id){

        try {
            if ($delete = Slider::find($id)){
                $delete->delete();
            }
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function create(){

        try {
            return view('admin.slider.create');
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function store(Request $request){
        try {
            Slider::create([
                'color'=>$request->color,
                'text_ar'=>$request->text_ar,
                'text_en'=>$request->text_en
            ]);
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }
}
