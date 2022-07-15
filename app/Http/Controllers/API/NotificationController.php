<?php

namespace App\Http\Controllers\Api;

use App\Models\Orders;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    //Midtrans Notification controller
    

    public function getNotification(Request $request)
    {
            try {
            $notification_body = json_decode($request->getContent(), true);
            $invoice = $notification_body['order_code'];
            $transaction_id = $notification_body['transaction_id'];
            $status_code = $notification_body['status_code'];
            $order = Orders::where('order_code', $invoice)->where('transaction_id', $transaction_id)->first();
            if (!$order)
                return ['code' => 0, 'messgae' => 'Terjadi kesalahan | Pembayaran tidak valid'];
            switch ($status_code) {
                            case '200':
                                $order->status = "SUCCESS";
                                break;
                            case '201':
                                $order->status = "PENDING";
                                break;
                            case '202':
                                $order->status = "CANCEL";
                                break;
                        }
            $order->save();
                        return response('Ok', 200)->header('Content-Type', 'text/plain');
                    } catch (\Exception $e) {
                        return response('Error', 404)->header('Content-Type', 'text/plain');
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

    } else {
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
    }

    // $update_trx = MTransaksiDetailAkademik::where('kode_transaksi_detail', $data['order_id'])
    // ->update(['status' => $status, 'bank' => $bank, 'virtual_account' => $virtual_account]);
  }
}
