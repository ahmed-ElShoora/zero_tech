<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\ContactSide;
use App\Models\Distinguishe;
use App\Models\Header;
use App\Models\Image;
use App\Models\Package;
use App\Models\Partenar;
use App\Models\Post;
use App\Models\Privacy;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Vidoe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Throwable;

class GetController extends Controller
{
    public function vedios(){
        try {
            return response()->json([
                'status'=>true,
                'msg'=>'تمت العملية بنجاح',
                'data'=>Vidoe::select(
                    'text_'.App::getLocale().' as text',
                    'image',
                    'link'
                )->get()
            ]);
        }catch (Throwable $e){
            return response()->json([
                'status'=>false,
                'msg'=>'حدث خطأ',
                'data'=>''
            ]);
        }
    }

    public function partenar(){
        try {
            return response()->json([
                'status'=>true,
                'msg'=>'تمت العملية بنجاح',
                'data'=>Partenar::select(
                    'text_'.App::getLocale().' as text',
                    'image',
                    'link'
                )->get()
            ]);
        }catch (Throwable $e){
            return response()->json([
                'status'=>false,
                'msg'=>'حدث خطأ',
                'data'=>''
            ]);
        }
    }

    public function posts(){
        try {
            return response()->json([
                'status'=>true,
                'msg'=>'تمت العملية بنجاح',
                'data'=>Post::select(
                    'id',
                    'image',
                    'text_'.App::getLocale().' as text',
                    'title_'.App::getLocale().' as title',
                )->get()
            ]);
        }catch (Throwable $e){
            return response()->json([
                'status'=>false,
                'msg'=>'حدث خطأ',
                'data'=>''
            ]);
        }
    }

    public function contactSide(){
        try {
            return response()->json([
                'status'=>true,
                'msg'=>'تمت العملية بنجاح',
                'data'=>ContactSide::select(
                    'image','desc',
                    'text_'.App::getLocale().' as text',
                )->get()
            ]);
        }catch (Throwable $e){
            return response()->json([
                'status'=>false,
                'msg'=>'حدث خطأ',
                'data'=>''
            ]);
        }
    }

    public function privacy(){
        try {
            return response()->json([
                'status'=>true,
                'msg'=>'تمت العملية بنجاح',
                'data'=>Privacy::select(
                    'text_'.App::getLocale().' as text',
                )->first()->text
            ]);
        }catch (Throwable $e){
            return response()->json([
                'status'=>false,
                'msg'=>'حدث خطأ',
                'data'=>''
            ]);
        }
    }

    public function getPost($id){
        try {
            $data = Post::where('id',$id)->select(
                'id','image','views',
                'text_'.App::getLocale().' as text',
                'title_'.App::getLocale().' as title',
                'created_at',
            )->first();
            Post::find($id)->update([
                'views'=>$data->views+1
            ]);
            $data->slider_images = Image::where('post_id',$id)->get();
            return response()->json([
                'status'=>true,
                'msg'=>'تمت العملية بنجاح',
                'data'=>$data
            ]);
        }catch (Throwable $e){
            return response()->json([
                'status'=>false,
                'msg'=>'حدث خطأ',
                'data'=>''
            ]);
        }
    }

    public function masterImages(){
        try {
            $data = Header::get();
            return response()->json([
                'status'=>true,
                'msg'=>'تمت العملية بنجاح',
                'data'=>$data
            ]);
        }catch (Throwable $e){
            return response()->json([
                'status'=>false,
                'msg'=>'حدث خطأ',
                'data'=>''
            ]);
        }
    }

    public function headerFooter(){
        try {
            return response()->json([
                'status'=>true,
                'msg'=>'تمت العملية بنجاح',
                'data'=>[
                    'logo'=>Setting::where('var','logo')->first()->value,
                    'logo_footer'=>Setting::where('var','logo_footer')->first()->value,
                    'meta_title'=>Setting::where('var','meta_title')->first()->value,
                    'meta_desc'=>Setting::where('var','meta_desc')->first()->value,
                    'facebook'=>Setting::where('var','facebook')->first()->value,
                    'insta'=>Setting::where('var','insta')->first()->value,
                    'twitter'=>Setting::where('var','twitter')->first()->value,
                    'snapchat'=>Setting::where('var','snapchat')->first()->value,
                ]
            ]);
        }catch (Throwable $e){
            return response()->json([
                'status'=>false,
                'msg'=>'حدث خطأ',
                'data'=>''
            ]);
        }
    }

    public function levelPage(){
        try {
            return response()->json([
                'status'=>true,
                'msg'=>'تمت العملية بنجاح',
                'data'=>[
                    'text'=>Setting::where('var','level_text_'.App::getLocale())->first()->value,
                    'image'=>Setting::where('var','level_image_'.App::getLocale())->first()->value,
                ]
            ]);
        }catch (Throwable $e){
            return response()->json([
                'status'=>false,
                'msg'=>'حدث خطأ',
                'data'=>''
            ]);
        }
    }

    public function about(){
        try {
            return response()->json([
                'status'=>true,
                'msg'=>'تمت العملية بنجاح',
                'data'=>[
                    'text'=>Setting::where('var','about_'.App::getLocale())->first()->value,
                    'cards'=>Card::select(
                        'image',
                        'text_'.App::getLocale().' as text',
                        'title_'.App::getLocale().' as title',
                    )->get(),
                    'distinguishe'=>Distinguishe::select(
                        'title_'.App::getLocale().' as title',
                        'image'
                    )->get()
                ]
            ]);
        }catch (Throwable $e){
            return response()->json([
                'status'=>false,
                'msg'=>'حدث خطأ',
                'data'=>''
            ]);
        }
    }

    public function home(){
        try {
            return response()->json([
                'status'=>true,
                'msg'=>'تمت العملية بنجاح',
                'data'=>[
                    'slider'=>[
                        'background_color'=>Setting::where('var','slider_color')->first()->value,
                        'data'=>Slider::select(
                        'color','text_'.App::getLocale().' as text'
                    )->get()
                        ],
                    'text'=>Setting::where('var','about_'.App::getLocale())->first()->value,
                    'services'=>Service::select(
                        'image',
                        'text_'.App::getLocale().' as text',
                        'title_'.App::getLocale().' as title',
                    )->get(),
                    'packages'=>Package::select(
                        'id',
                        'color_head',
                        'title_head_'.App::getLocale().' as title',
                        'price',
                        'category_'.App::getLocale().' as category',
                        'btn_'.App::getLocale().' as btn',
                        'btn_color',
                        'desc_'.App::getLocale().' as desc',
                    )->get()
                ]
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
