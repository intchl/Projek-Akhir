<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = "transaction";
    protected $fillable = ['date', 'seat_number', 'ticket_id', 'buyers_id'];

    public function buyer()
    {
        return $this->belongsTo(Buyer::class, 'buyers_id');
    }

    public function ticket()
    {
        return $this->belongsTo(Ticket::class, 'ticket_id');
    }
}
