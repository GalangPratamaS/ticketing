<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_items extends Model
{
    protected $table = 'order_items';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'order_codes',
        'ticket_id',
        'ticket_name',
        'ticket_price',
        'qty',
        'status',
        'claimed_date',
    ];

    use HasFactory;
}
