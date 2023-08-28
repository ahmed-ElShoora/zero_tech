<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Traits\UplodeTrait;
use App\Models\Edit;
use App\Models\Site;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Throwable;

class CustomerController extends Controller
{
    use UplodeTrait;
    public function index(){

        try {
            $users = User::paginate(15);
            return view('admin.customers.index',compact('users'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function delete($id){

        try {
            if ($delete = User::find($id)){
                $delete->delete();
            }
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function create(){
        try {
            return view('admin.customers.create');
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function store(Request $request){
        try {
            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'password_hash'=>$request->password,
                'town'=>$request->town,
                'gender'=>$request->gender,
                'phone'=>$request->phone
            ]);
            return redirect()->back();
        }catch (Throwable $e){
           return view('error.error');
        }
    }

    public function getData($id){
        try {
            $datas = Edit::where('user_id',$id)->latest()->paginate(15);
            return view('admin.customers.show',compact('datas'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function sites($id){

        try {
            $datas = Site::where('customer_id',$id)->latest()->paginate(15);
            return view('admin.customers.sites',compact('datas','id'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function deleteSiteNow($id){

        try {
            Site::find($id)->delete();
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function createSite($id){

        try {
            return view('admin.customers.create-site',compact('id'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function storeSite(Request $request){

        try {
            Site::create([
                'customer_id'=>$request->customer_id,
                'site_name'=>$request->site_name,
                'site_link'=>$request->site_link
            ]);
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }
}
