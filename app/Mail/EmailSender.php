<?php
 
namespace App\Mail;

use App\Models\Order_items;
use App\Models\Orders;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
 
class EmailSender extends Mailable
{
    use Queueable, SerializesModels;
    public $order;
    public $order_items;
 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Orders $order, $order_items)
    {
        $this->order = $order;
        $this->order_items = $order_items;
    }
 
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       return $this->from('ticketing@pekanrayakarawang.co.id')
                   ->subject('Tiket Pekan Raya Karawang')       
                   ->view('email/invoices')
                //    ->with(
                //     [
                //         'nama' => 'Diki Alfarabi Hadi',                        
                //         'website' => 'www.malasngoding.com',
                //     ])
                    ;
    }
}