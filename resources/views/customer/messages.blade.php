@extends('layout.customer')

@section('style')
<style>
    body{
        padding-bottom: 10px;
    }
</style>
@endsection

@section('content')
    <main>
        <div class="container-fluid disable-text-selection">
            <div class="row">
                <div class="col-12">
                    <div class="mb-2">
                        <h3>عنوان التذكره {{$ticket->title}}</h3>
                        <h3>اسم الموقع {{$ticket->site_name}}</h3>
                    </div>

                    <div class="separator mb-5"></div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 mb-4">
                <div class="card" style="overflow: auto">
                    <div class="card-body" style="background: #ddd">
                        <div class="msg-body" style="max-height: 500px;
                        overflow: auto;    padding: 0 10px; margin-bottom: 10px;">
                            @foreach ($messages as $item)
                            <div class="msg-in" style='display: flex;
 color: @if ($item->client_is_send)
                                        black
                                    @else    
                                        white
                                    @endif;
                                    font-weight: bold;
                            flex-direction: column;
                            background: @if ($item->client_is_send)
                                        white
                                    @else    
                                    #777777cc
                                    @endif;
                            padding: 10px 20px;
                            margin: 10px 0;
                            border-radius: 10px;
                            '>
                                <h6 style="margin: 0; margin-bottom: 10px; color: #000">
                                    @if ($item->client_is_send)
                                        {{\App\Models\User::getName($ticket->customer_id)->name}}
                                    @else    
                                        zerotech.sa
                                    @endif
                                </h6>
                                <p style="margin: 0;font-size:17px;    line-height: 1.3;">
                                    {{$item->msg}}
                                </p>
                            </div>
                            @endforeach
                        </div>
                        
                        <script>
                            window.onload = _=> {
                                const msg = document.querySelectorAll(".msg-in")
                                const y = msg[msg.length -1]
                                y.scrollIntoView()
                            }
                            
                        </script>
                        @if($ticket->status != 'close')
                            <form method="POST" action="{{URL('/customer/ticket-replay')}}">
                                @csrf
                                <input name="ticket_id" hidden value="{{$ticket->id}}">
                                <div class="tooltip-label-right">
                                    <div class="error-l-100 position-relative form-group">
                                        <textarea 
                                        style="resize: none; height: 120px; border: none; outline: none; border-radius: 10px;" 
                                        name="msg" placeholder="الرسالة" required id="Name" type="text" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div style="
                                display:flex;
                                justify-content: space-between;
                                ">
                                    <button class="btn btn-primary" type="submit">تاكيد</button>
                                    @if($ticket->status == 'accept')
                                        <a href="{{URL('/customer/close-ticket-'.$ticket->id)}}" class="btn btn-sm btn-outline-danger">اغلاق التذكره</a>
                                    @endif
                                </div>
                               
                            </form>
                           
                        @endif
                    </div>
                </div>
            </div>



        </div>
    </main>
@endsection
