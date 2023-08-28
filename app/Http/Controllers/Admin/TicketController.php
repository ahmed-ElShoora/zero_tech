<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Throwable;
class TicketController extends Controller
{
    public function tickets(){
        
        try {
            $datas = Ticket::where('status','containe')->latest()->paginate(15);
            return view('admin.ticket.ticket',compact('datas'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function ticketMessage($id){
        try {
            $ticket = Ticket::where('id',$id)->first();
            $messages = Message::where('ticket_id',$id)->get();
            return view('admin.ticket.replay',compact('ticket','messages'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function storeReplay(Request $request){
        
        try {
            Message::create([
                'ticket_id'=>$request->ticket_id,
                'client_is_send'=>false,
                'msg'=>$request->msg
            ]);
            Ticket::where('id',$request->ticket_id)->update([
                'status'=>'accept'
            ]);
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }
}
