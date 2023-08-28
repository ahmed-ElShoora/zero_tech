<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Throwable;
use App\Http\Traits\UplodeTrait;
use App\Models\Service;

class ServiceController extends Controller
{
    use UplodeTrait;
    public function index(){

        try {
            $services = Service::paginate(15);
            return view('admin.service.index',compact('services'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function delete($id){

        try {
            if ($delete = Service::find($id)){
                $delete->delete();
            }
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function create(){
        try {
            return view('admin.service.create');
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function store(Request $request){
        try {
            Service::create([
                'image'=>$this->uploud($request->image),
                'text_ar'=>$request->text_ar,
                'text_en'=>$request->text_en,
                'title_ar'=>$request->title_ar,
                'title_en'=>$request->title_en
            ]);
            return redirect()->back();
        }catch (Throwable $e){
           return view('error.error');
        }
    }

    public function edite($id){
        try {
            $data = Service::where('id',$id)->first();
            return view('admin.service.edite',compact('data','id'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function update(Request $request){
        try {
            if($request->image == null){
                $image = $request->old_image;
            }else{
                $image = $this->uploud($request->image);
            }
            Service::find($request->id)->update([
                'image'=>$image,
                'text_ar'=>$request->text_ar,
                'text_en'=>$request->text_en,
                'title_ar'=>$request->title_ar,
                'title_en'=>$request->title_en
            ]);
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }
}
