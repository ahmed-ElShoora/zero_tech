<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Throwable;
use App\Http\Traits\UplodeTrait;
use App\Models\Distinguishe;

class DistingController extends Controller
{
    use UplodeTrait;
    public function index(){

        try {
            $distins = Distinguishe::paginate(15);
            return view('admin.disting.index',compact('distins'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function delete($id){

        try {
            if ($delete = Distinguishe::find($id)){
                $delete->delete();
            }
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function create(){
        try {
            return view('admin.disting.create');
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function store(Request $request){
        try {
            Distinguishe::create([
                'image'=>$this->uploud($request->image),
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
            $data = Distinguishe::where('id',$id)->first();
            return view('admin.disting.edite',compact('data','id'));
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
            Distinguishe::find($request->id)->update([
                'image'=>$image,
                'title_ar'=>$request->title_ar,
                'title_en'=>$request->title_en
            ]);
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }
}
