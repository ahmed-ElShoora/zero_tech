<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Throwable;
use App\Http\Traits\UplodeTrait;
use App\Models\ContactSide;

class ContactController extends Controller
{
    use UplodeTrait;
    public function index(){
        try {
            $datas = Contact::latest()->paginate(15);
            return view('admin.contact.index',compact('datas'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function indexSide(){
        try {
            $datas = ContactSide::paginate(15);
            return view('admin.contact_side.index',compact('datas'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function delete($id){

        try {
            if ($delete = ContactSide::find($id)){
                $delete->delete();
            }
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function create(){
        try {
            return view('admin.contact_side.create');
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function store(Request $request){
        try {
            ContactSide::create([
                'image'=>$this->uploud($request->image),
                'text_ar'=>$request->text_ar,
                'text_en'=>$request->text_en,
                'desc'=>$request->desc
            ]);
            return redirect()->back();
        }catch (Throwable $e){
           return view('error.error');
        }
    }
}
