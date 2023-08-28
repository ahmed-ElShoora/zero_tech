<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Throwable;
use App\Http\Traits\UplodeTrait;
use App\Models\ContactPackage;
use App\Models\Package;

class PackageController extends Controller
{
    use UplodeTrait;
    public function index(){

        try {
            $packages = Package::paginate(15);
            return view('admin.package.index',compact('packages'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function delete($id){

        try {
            if ($delete = Package::find($id)){
                $delete->delete();
            }
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function create(){
        try {
            return view('admin.package.create');
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function store(Request $request){
        try {
            Package::create([
                'color_head'=>$request->color_head,
                'title_head_ar'=>$request->title_head_ar,
                'title_head_en'=>$request->title_head_en,
                'price'=>$request->price,
                'category_ar'=>$request->category_ar,
                'category_en'=>$request->category_en,
                'btn_en'=>$request->btn_en,
                'btn_ar'=>$request->btn_ar,
                'btn_color'=>$request->btn_color,
                'desc_en'=>$request->desc_en,
                'desc_ar'=>$request->desc_ar,
            ]);
            return redirect()->back();
        }catch (Throwable $e){
           return view('error.error');
        }
    }

    public function edite($id){
        try {
            $data = Package::where('id',$id)->first();
            return view('admin.package.edite',compact('data','id'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function update(Request $request){
        try {
            Package::find($request->id)->update([
                'color_head'=>$request->color_head,
                'title_head_ar'=>$request->title_head_ar,
                'title_head_en'=>$request->title_head_en,
                'price'=>$request->price,
                'category_ar'=>$request->category_ar,
                'category_en'=>$request->category_en,
                'btn_en'=>$request->btn_en,
                'btn_ar'=>$request->btn_ar,
                'btn_color'=>$request->btn_color,
                'desc_en'=>$request->desc_en,
                'desc_ar'=>$request->desc_ar,
            ]);
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function getData($id){
        try {
            $datas = ContactPackage::where('package_id',$id)->latest()->paginate(15);
            return view('admin.package.show',compact('datas'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }
}
