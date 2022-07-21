<?php

namespace App\Http\Controllers;

use App\Models\Order_items;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Services\Midtrans\CreateSnapTokenService;
use App\Helpers\JsonFormatter;
use Carbon\Carbon;

class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('ticketing/buy_singlepage');
    }


    public function payment($order_id)
    {       

        $order_data = Orders::where('order_code','=',$order_id)->first();
        
        $order_items = Order_items::where('order_codes','=',$order_id)->get();
       

        if($order_data->payment_status == '')
        {
            //status belum bayar
            $midtrans = new CreateSnapTokenService($order_id);
            $snapToken = $midtrans->getSnapToken($order_id);
            return view('payment_ticket',compact('snapToken','order_data','order_items'));
        } else if($order_data->payment_status == 'PENDING'){
            //pending payment
             return view('pending_payment',compact('order_data','order_items'));
        } else if($order_data->payment_status == 'SETTLEMENT'){
            //
             return view('finish_payment',compact('order_data','order_items'));
        } else {
            //if canceled transaction

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
            'id_ticket' => 'required',
            'ticket_date' => 'required',
            'admin_fee' => 'required',                         
        ]);

        //panggil fungsi generate code, check ke database
         $order_id = $this->generate_code('PRK');

            $date = Carbon::now();
            $expired_time = Carbon::parse($date);
            $expired_time->addHours(2);

         $orders = Orders::create([
            'order_code' => $order_id,
            'customer_email' =>  $validatedData['cust_email'] ,
            'customer_name' => $validatedData['cust_firstname']." ".$validatedData['cust_lastname'],
            'customer_phone' => $validatedData['cust_phone'],
            'cust_gender' => $validatedData['gender'],
            'total_ticket' => $validatedData['total_qty'],
            'grand_total' => $validatedData['grand_total'],
            'payment_status' => '',            
            'payment_method' => $validatedData['payment_method'],
            'admin_fee' => $validatedData['admin_fee'],
            'ticket_date' => $validatedData['ticket_date'],
            'expired_time' => $expired_time,
        ]);

        if($orders){
            foreach($request['id_ticket'] as $key => $value )
            {               
                //jika quantiti tiket ! = 0 maka insert ke tabel
                 if($request['quant'][$key] != 0){
                    for($i=1; $i <= $request['quant'][$key]; $i++)
                    {
                        //baris sesuai jumlah total tiket
                        Order_items::Create([
                                        'order_codes' => $order_id,
                                        'ticket_id' => $request['id_ticket'][$key],
                                        'ticket_name' => $request['ticket'][$key],
                                        'ticket_price' => $request['price'][$key],
                                        'qty' => 1,
                                        'status' => 'unclaimed',              
                                    ]); 
                    }
                    //ini kalo qty langsung 1 baris qty banyak
                    // Order_items::Create([
                    //                     'order_codes' => $order_id,
                    //                     'ticket_id' => $request['id_ticket'][$key],
                    //                     'ticket_name' => $request['ticket'][$key],
                    //                     'ticket_price' => $request['price'][$key],
                    //                     'qty' => $request['quant'][$key],
                    //                     'status' => 'unclaimed',              
                    //                 ]); 
                    // echo 'data sudah masuk!';
                }                
            }

             return JsonFormatter::createApi(200,'Success',$order_id);


        } else {
                echo 'Data tidak berhasil diinsert!';                        
                return JsonFormatter::createApi(400,'Failed',$order_id);
            }                                                  
    }

    public function generate_code($code)
    {
        $order_id = Str::upper($code)."-".Str::upper(Str::random(4)."-".Str::random(4));
        $row = Orders::where('order_code', '=', $order_id)->first();
        if($row) {
           $this->generate_code($code);
        } else {
            return  $order_id;
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
