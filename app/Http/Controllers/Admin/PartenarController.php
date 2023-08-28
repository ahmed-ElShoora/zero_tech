<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partenar;
use Illuminate\Http\Request;
use Throwable;
use App\Http\Traits\UplodeTrait;

class PartenarController extends Controller
{
    use UplodeTrait;
    public function index(){

        try {
            $partenars = Partenar::paginate(15);
            return view('admin.partenar.index',compact('partenars'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function delete($id){

        try {
            if ($delete = Partenar::find($id)){
                $delete->delete();
            }
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function create(){
        try {
            return view('admin.partenar.create');
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function store(Request $request){
        try {
            Partenar::create([
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
            $data = Partenar::where('id',$id)->first();
            return view('admin.partenar.edite',compact('data','id'));
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
            Partenar::find($request->id)->update([
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
