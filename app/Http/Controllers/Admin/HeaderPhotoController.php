<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Header;
use Illuminate\Http\Request;
use Throwable;
use App\Http\Traits\UplodeTrait;

class HeaderPhotoController extends Controller
{
    use UplodeTrait;
    public function index(){

        try {
            $photos = Header::paginate(15);
            return view('admin.header-slider.index',compact('photos'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function edite($id){

        try {
            return view('admin.header-slider.edite',compact('id'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function store(Request $request){
        try {
            Header::find($request->id)->update([
                'image'=>$this->uploud($request->image),
            ]);
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }
}
