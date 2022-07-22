<?php

namespace App\Http\Controllers\Api;

use App\Models\Orders;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailSender;
use App\Models\Order_items;

class NotificationController extends Controller
{
    //Midtrans Notification controller
    

    public function getNotification(Request $request)
    {
            try {
            $notification_body = json_decode($request->getContent(), true);
            $invoice = $notification_body['order_id'];
            $transaction_id = $notification_body['transaction_id'];
            $status_code = $notification_body['status_code'];
            $payment_type = $notification_body['payment_type'];
            $va_number = "";
            $bank = "";

            $order = Orders::where('order_code', $invoice)->first();
            if (!$order)
                return ['code' => 0, 'message' => 'Terjadi kesalahan | Pembayaran tidak valid'];

            if($payment_type == "bank_transfer") {
              
              if (isset($notification_body["va_numbers"])) {
              // BCA, BNI, BRI
              $bank = strtoupper($notification_body["va_numbers"][0]["bank"]);
              $virtual_account = $notification_body["va_numbers"][0]["va_number"];
              } else if (isset($notification_body["permata_va_number"])) {
              // Bank Permata
              $bank = "Bank Permata";
              $virtual_account = $notification_body["permata_va_number"];
              } else {
              // Bank Mandiri
              $bank = "Bank Mandiri";
              $virtual_account = $notification_body["bill_key"];
              }

            } else if($payment_type == "credit_card") {

            } else if($payment_type == "gopay") {

            }
            $order->payment_method = $payment_type;
            
            switch ($status_code) {
                            case '200':
                                $order->payment_status = "SUCCESS";
                                $this->sendInvoice($invoice);
                                break;
                            case '201':
                                $order->payment_status = "PENDING";
                                break;
                            case '202':
                                $order->payment_status = "CANCEL";
                                break;
                        }
           

            $order->save();
                        return response('Ok', 200)->header('Content-Type', 'text/plain');
                    } catch (\Exception $e) {
                        return response('Error', 201)->header('Content-Type', 'text/plain');
                    }
    
    }

     public function updateStatus(Request $request)
  {
    $data = $request->all();
    $bank = "";
    $virtual_account = "";
    $status = 0;

    if ($data['payment_type'] == "credit_card") {
      // credit card
      if ($data['transaction_status'] == "settlement" || $data['transaction_status'] == "capture") {
        $status = 1;
      } else if ($data['transaction_status'] == "cancel") {
        $status = 2;
      } else if ($data['transaction_status'] == "pending") {
        $status = 3;
      } else if ($data['transaction_status'] == "expire") {
        $status = 4;  
      } else {
        $status = 0;
      }

    } else if($data['payment_type'] == "bank_transfer"){
      // bank transfer

      if ($data['transaction_status'] == "settlement") {
        $status = 1;
      } else if ($data['transaction_status'] == "cancel") {
        $status = 2;
      } else if ($data['transaction_status'] == "pending") {
        $status = 3;
      } else if ($data['transaction_status'] == "expire") {
        $status = 4;  
      } else {
        $status = 0;
      }



      if (isset($data["va_numbers"])) {
        // BCA, BNI, BRI
        $bank = strtoupper($data["va_numbers"][0]["bank"]);
        $virtual_account = $data["va_numbers"][0]["va_number"];
      } else if (isset($data["permata_va_number"])) {
        // Bank Permata
        $bank = "Bank Permata";
        $virtual_account = $data["permata_va_number"];
      } else {
        // Bank Mandiri
        $bank = "Bank Mandiri";
        $virtual_account = $data["bill_key"];
      }
    } else {
      $bank = $data["acquirer"];
      
    }

    // $update_trx = MTransaksiDetailAkademik::where('kode_transaksi_detail', $data['order_id'])
    // ->update(['status' => $status, 'bank' => $bank, 'virtual_account' => $virtual_account]);
  }

  public function sendInvoice($order_id)
  {
    // Mail::to()    
    // $order_id = "RHD-F5YO-WYEO";
    // $order = Orders::findOrFail($id);
    $order = Orders::where('order_code','=',$order_id)->first();
    $order_items = Order_items::where('order_codes','=',$order_id)->get();
    // dd($order);

    Mail::to($order->customer_email)->queue(new EmailSender($order,$order_items));

    // $to = $order->customer_email;
    // $from = 'ticketing@pekanrayakarawang.co.id';
    // $subject = 'Tanda Terima Tiket Pekan Raya Karawang';

    // Mail::send('email.invoices', compact('order','order_items'), function ($message) use ($to,$from,$subject) {
    //             $message->from($from)
    //                     ->to($to)
    //                     ->subject($subject);

    //         });
		return true;
  }
}
