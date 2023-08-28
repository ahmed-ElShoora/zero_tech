<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Throwable;
use App\Http\Traits\UplodeTrait;
use App\Models\Vidoe;

class VedioController extends Controller
{ 
    use UplodeTrait;
    public function index(){

        try {
            $vedios = Vidoe::paginate(15);
            return view('admin.vedios.index',compact('vedios'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function delete($id){

        try {
            if ($delete = Vidoe::find($id)){
                $delete->delete();
            }
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function create(){
        try {
            return view('admin.vedios.create');
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function store(Request $request){
        try {
            Vidoe::create([
                'image'=>$this->uploud($request->image),
                'text_ar'=>$request->text_ar,
                'text_en'=>$request->text_en,
                'link'=>$request->link
            ]);
            return redirect()->back();
        }catch (Throwable $e){
           return view('error.error');
        }
    }

    public function edite($id){
        try {
            $data = Vidoe::where('id',$id)->first();
            return view('admin.vedios.edite',compact('data','id'));
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
            Vidoe::find($request->id)->update([
                'image'=>$image,
                'text_ar'=>$request->text_ar,
                'text_en'=>$request->text_en,
                'link'=>$request->link
            ]);
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }
}
