<?php

namespace App\Http\Controllers;

use App\Models\Order_items;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Services\Midtrans\CreateSnapTokenService;

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

        $order_id = 'RHD-'.Str::upper(Str::random(4)."-".Str::random(4));

         $validatedData =  $request->validate([
            'cust_email' => 'required|email:rfc,dns',
            'cust_phone' => 'required|numeric',
            'cust_firstname' => 'required',
            'cust_lastname' => 'required',
            'gender' => 'required',            
            'cust_agree' => 'required',
            'grand_total' => 'required',
            'total_qty' => 'required',
            'payment_method' => 'required',  
            'admin_fee' => 'required',                         
        ]);
        

       $orders = Orders::create([
            'order_code' => $order_id,
            'customer_email' =>  $validatedData['cust_email'] ,
            'customer_name' => $validatedData['cust_firstname']." ".$validatedData['cust_lastname'],
            'customer_phone' => $validatedData['cust_phone'],
            'cust_gender' => $validatedData['gender'],
            'total_ticket' => $validatedData['total_qty'],
            'grand_total' => $validatedData['grand_total'],
            'payment_status' => 'pending',
            'payment_code' => 201,
            'payment_method' => $validatedData['payment_method'],
            'expired_time' => '2022-09-18 10:34:09.000',
        ]);


        if(!$orders){
            echo 'teu asup nya';
        } else {
            // Masukan data ke tabel order_items
            foreach($request['id_tiket'] as $key => $value )
            {
                // echo "{$key} => {$value} ";
                // print_r($request['id_tiket']);
                 if($request['qty'][$key] != 0){
                    Order_items::Create([
                                        'order_codes' => $order_id,
                                        'ticket_id' => $request['id_tiket'][$key],
                                        'ticket_name' => $request['ticket'][$key],
                                        'ticket_price' => $request['price'][$key],
                                        'qty' => $request['qty'][$key],
                                        'status' => 'unclaimed',              
                                    ]); 
                    echo 'data udah masuk bos';
                }
            }           
            
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
