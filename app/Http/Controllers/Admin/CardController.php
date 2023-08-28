<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Throwable;
use App\Http\Traits\UplodeTrait;
use App\Models\Card;

class CardController extends Controller
{
    use UplodeTrait;
    public function index(){

        try {
            $cards = Card::paginate(15);
            return view('admin.card.index',compact('cards'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function delete($id){

        try {
            if ($delete = Card::find($id)){
                $delete->delete();
            }
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function create(){
        try {
            return view('admin.card.create');
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function store(Request $request){
        try {
            Card::create([
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
            $data = Card::where('id',$id)->first();
            return view('admin.card.edite',compact('data','id'));
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
            Card::find($request->id)->update([
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
