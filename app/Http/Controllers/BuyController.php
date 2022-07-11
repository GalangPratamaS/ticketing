<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Services\Midtrans\CreateSnapTokenService;
use App\Models\Ticket;

class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id = 'RHD-'.Str::upper(Str::random(4)."-".Str::random(4));
        $midtrans = new CreateSnapTokenService($id);
        $snapToken = $midtrans->getSnapToken($id);

        return view('buy_ticket',compact('snapToken'));
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

          $request->validate([
            'cust_email' => 'required|email:rfc,dns',
            'cust_phone' => 'required|numeric',
            'cust_firstname' => 'required',
            'cust_lastname' => 'required',
            'gender' => 'required',
            'gender' => 'required',
            'cust_agree' => 'required',
            'total_price' => 'required',
            'payment_method' => 'required',  
                       
        ]);

        Ticket::create([
            'cust_email' => 'Namanya',
            'cust_firstname' => 'Namanya',
            'cust_lastname' => 'Nama blknya',
            'cust_phone' => 'Nama blknya',
            
        ]);

        //  DB::table('users')->insert([
        //             'email' => 'kayla@example.com',
        //             'votes' => 0
        //         ]);

        //  foreach ($request->ticket as $key => $value) {

        //  }

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
