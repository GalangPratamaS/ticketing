<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'customer_name',        
        'customer_email',
        'customer_phone',
        'cust_gender',
        'order_code',
        'total_ticket',
        'payment_method',
        'bank',
        'va_number',
        'grand_total',
        'payment_status',
        'payment_code',
        'admin_fee',
        'expired_time',
        'ticket_date',
    ];

    use HasFactory;
}
