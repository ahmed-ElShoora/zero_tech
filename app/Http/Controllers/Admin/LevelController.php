<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Throwable;
use App\Http\Traits\UplodeTrait;

class LevelController extends Controller
{
    use UplodeTrait;
    public function index(){
        try {
            $level_text_ar = Setting::where('var','level_text_ar')->first()->value;
            $level_text_en = Setting::where('var','level_text_en')->first()->value;
            // $level_image_ar = Setting::where('var','level_image_ar')->first()->value;
            // $level_image_en = Setting::where('var','level_image_en')->first()->value;

            return view('admin.level.index',compact('level_text_ar','level_text_en'));//,'level_image_ar','level_image_en'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function store(Request $request){
        try {
            if($request->level_image_ar != null){
                Setting::where('var','level_image_ar')->first()->update([
                    'value'=>$this->uploud($request->level_image_ar)
                ]);
            }
            if($request->level_image_en != null){
                Setting::where('var','level_image_en')->first()->update([
                    'value'=>$this->uploud($request->level_image_en)
                ]);
            }
            Setting::where('var','level_text_ar')->first()->update([
                'value'=>$request->level_text_ar
            ]);
            Setting::where('var','level_text_en')->first()->update([
                'value'=>$request->level_text_en
            ]);
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }
}
