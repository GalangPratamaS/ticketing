<?php
 
namespace App\Services\Midtrans;
 
use Midtrans\Snap;
use App\Models\Invoice;
use App\Models\InvoiceDetail;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
 
class CreateSnapTokenService extends Midtrans
{
    protected $order;
 
    public function __construct($order)
    {
        parent::__construct();
 
        $this->order = $order;
    }
 
    public function getSnapToken($order_id)
    {
        $params = array();                        
        $order = array(); 
        $transaction_details = [
                'order_id' => $order_id,
                'gross_amount' =>(int)round(60000)];

        
       $order[] = ['id' => '123131',
                    'price' => 30000,
                    'quantity' => 2,
                    'name' => 'Tiket Rumah Hantu Week Day'
                ];

        $enabled_payment = ["credit_card", "cimb_clicks",
    "bca_klikbca", "bca_klikpay", "bri_epay", "echannel", "permata_va",
    "bca_va", "bni_va", "bri_va", "other_va", "gopay", "indomaret",
    "danamon_online"];

    $cc = ['credit_card'];

    $bank_transfer = ["bri_epay", "echannel", "permata_va",
    "bca_va", "bni_va", "bri_va", "other_va"];
        

        // $item_details = ['item_details' => $invoice_details];    
        // dd($item_details);
        $customer = [
                'first_name' => 'Galang Pratama',
                'email' => 'galang@gmaail.com',
                'phone' => '0812313213'
            ];

       

        // $params['payment_type'] = 'credit_card';
        $params['transaction_details'] = $transaction_details;
        $params['item_details'] = $order;
        $params['enabled_payments'] = $bank_transfer;
        $params['customer_details'] = $customer;                
       
        $snapToken = Snap::getSnapToken($params);
 
        return $snapToken;
    }
}