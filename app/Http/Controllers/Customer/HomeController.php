<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Edit;
use App\Models\Message;
use App\Models\Site;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Throwable;
class HomeController extends Controller
{
    public function index(){
        try{
            return view('customer.home');
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function tickets(){
        try{
            $datas = Ticket::where('customer_id',Auth()->user()->id)->latest()->paginate(15);
            return view('customer.tickets',compact('datas'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function createTicket(){
        try{
            $sites = Site::where('customer_id',Auth()->user()->id)->get();
            return view('customer.create-ticket',compact('sites'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function storeTicket(Request $request){
        try{
            $ticket = Ticket::create([
                'customer_id'=>Auth()->user()->id,
                'site_name'=>$request->site_name,
                'title'=>$request->title,
                'important'=>$request->important,
                'status'=>'containe'
            ]);
            Message::create([
                'ticket_id'=>$ticket->id,
                'client_is_send'=>true,
                'msg'=>$request->msg
            ]);
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function profile(){
        try{
            $data = User::where('id',Auth::user()->id)->first();
            return view('customer.profile',compact('data'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function profileStore(Request $request){
        try{
            if($request->phone != $request->old_phone){
                Edit::create([
                    'user_id'=>Auth::user()->id,
                    'var'=>'phone',
                    'value'=>$request->old_phone
                ]);
            }
            User::find(Auth::user()->id)->update([
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

    public function ticketMessage($id){
        try {
            $ticket = Ticket::where('id',$id)->where('customer_id',Auth()->user()->id)->first();
            $messages = Message::where('ticket_id',$id)->get();
            return view('customer.messages',compact('ticket','messages'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function storeReplay(Request $request){
        
        try {
            Message::create([
                'ticket_id'=>$request->ticket_id,
                'client_is_send'=>true,
                'msg'=>$request->msg
            ]);
            Ticket::where('id',$request->ticket_id)->update([
                'status'=>'containe'
            ]);
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function closeTicket($id){
        
        try {
            Ticket::where('id',$id)->update([
                'status'=>'close'
            ]);
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }
}
