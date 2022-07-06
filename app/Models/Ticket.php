<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
     protected $table = 'tickets';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'ticket_name',
        'ticket_price',
        'ticket_grup',
        'created_at',
        'updated_at',
        'status',
    ];

    use HasFactory;
}
