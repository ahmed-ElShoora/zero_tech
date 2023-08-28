<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Throwable;
use App\Http\Traits\UplodeTrait;

class SettingController extends Controller
{
    use UplodeTrait;
    public function index(){

        try {
            $facebook = Setting::where('var','facebook')->first()->value;
            $insta = Setting::where('var','insta')->first()->value;
            $twitter = Setting::where('var','twitter')->first()->value;
            $snapchat = Setting::where('var','snapchat')->first()->value;
            $meta_title = Setting::where('var','meta_title')->first()->value;
            $meta_desc = Setting::where('var','meta_desc')->first()->value;
            $slider_color = Setting::where('var','slider_color')->first()->value;
            return view('admin.setting.index',compact('facebook','insta','twitter','snapchat','meta_title','meta_desc','slider_color'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function store(Request $request){
        try {
            if($request->logo != null){
                $image = $this->uploud($request->logo);
                Setting::where('var','logo')->first()->update([
                    'value'=>$image
                ]);
            }
            if($request->logo_footer != null){
                $logo_footer = $this->uploud($request->logo_footer);
                Setting::where('var','logo_footer')->first()->update([
                    'value'=>$logo_footer
                ]);
            }
            Setting::where('var','slider_color')->first()->update([
                'value'=>$request->slider_color
            ]);
            Setting::where('var','facebook')->first()->update([
                'value'=>$request->facebook
            ]);
            Setting::where('var','insta')->first()->update([
                'value'=>$request->insta
            ]);
            Setting::where('var','twitter')->first()->update([
                'value'=>$request->twitter
            ]);
            Setting::where('var','snapchat')->first()->update([
                'value'=>$request->snapchat
            ]);
            Setting::where('var','meta_title')->first()->update([
                'value'=>$request->meta_title
            ]);
            Setting::where('var','meta_desc')->first()->update([
                'value'=>$request->meta_desc
            ]);
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }
}
