<?php
 
namespace App\Services\Midtrans;
 
use Midtrans\Snap;
use App\Models\Orders;
use App\Models\Order_items;
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
        
        $order_data = Orders::where('order_code','=',$order_id)->first();
        $order_items = Order_items::where('order_codes','=',$order_id)->get();

        $transaction_details = ['order_id' => $order_data['order_code'] ,
                                'gross_amount' => (int)round($order_data['grand_total'])];

        // $transaction_details = [
        //         'order_id' => $order_id,
        //         'gross_amount' => (int)round(60000)];
        foreach($order_items as $oi)
        {
            $order[] = ['id' => $oi['id'],
                        'price' => (int)round($oi['ticket_price']),
                        'quantity' => $oi['qty'],
                        'name' => $oi['ticket_name']." ".$this->tanggal_indo($order_data['ticket_date'])
                ];    
        }
          $order[] = ['id' => '100',
                    'price' => $order_data['admin_fee'],
                    'quantity' => 1,
                    'name' => 'Biaya penanganan'
                ];
            

    //     $enabled_payment = ["credit_card", "cimb_clicks",
    // "bca_klikbca", "bca_klikpay", "bri_epay", "echannel", "permata_va",
    // "bca_va", "bni_va", "bri_va", "other_va", "gopay", "indomaret",
    // "danamon_online"];

    $cc = ['credit_card'];

    $bank_transfer = ["bri_epay", "echannel", "permata_va",
    "bca_va", "bni_va", "bri_va", "other_va"];

    $qris = ["gopay"];

    if( $order_data['payment_method'] == "bank_transfer")
    {
        $metode_payment = $bank_transfer;
    } else if($order_data['payment_method'] == "credit_card")
    {
        $metode_payment = $cc;
    } else {
        $metode_payment = $qris;
    }
              
        $customer = [
                'first_name' => $order_data['customer_name'],
                'email' => $order_data['customer_email'],
                'phone' => $order_data['customer_phone']
            ];
               
        $params['transaction_details'] = $transaction_details;
        $params['item_details'] = $order;
        $params['enabled_payments'] = $metode_payment;
        $params['customer_details'] = $customer;                            
       
        $snapToken = Snap::getSnapToken($params);
 
        return $snapToken;
    }

    private function tanggal_indo($tanggal)
    {
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];

    }
}