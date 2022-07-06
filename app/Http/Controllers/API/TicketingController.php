<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Helpers\JsonFormatter;
use Illuminate\Support\Facades\DB;

class TicketingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Ticket::all();
        if($data) {
            return JsonFormatter::createApi(200,'Success',$data);
        } else {
            return JsonFormatter::createApi(400,'Failed');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'passkey' => 'required',
            'email' => 'email|required|unique:user',
            'password' => 'required|confirmed'
        ]);

        try {
            $request->validate([
                'passkey' => 'required',
                'ticket' => 'ticketname'
            ]); 
            $ticket = Ticket::create([
                'ticket_name' => $request->nama_ticket,
                'ticket_price' => $request->harga,
                'ticket_grup' => $request->harga,
                'created_at' => $request->harga,
                'status' => $request->status
            ]);

            $data = Ticket::where('id','=',$ticket->id)->get();
            if($data) {
            return JsonFormatter::createApi(200,'Success',$data);
                } else {
                    return JsonFormatter::createApi(400,'Failed');
                }
        } catch (\Throwable $th) {
            // throw $th;
            return JsonFormatter::createApi(400,'Failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function showTicketFilter(Request $request)
    {
        $request->validate([
            'tanggal' => 'required'            
        ]);

       $data = DB::table('ticket_sale_date')
            ->leftJoin('tickets', 'tickets.id', '=', 'ticket_sale_date.ticket_id')
            ->select('tickets.*') 
            ->where('ticket_sale_date.ticket_date',$request->tanggal)        
            ->get();
        
        if($data->isNotEmpty()) {
            return JsonFormatter::createApi(200,'Success',$data);
        } else {
            return JsonFormatter::createApi(400,'Failed');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
