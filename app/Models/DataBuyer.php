<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBuyer extends Model
{
    use HasFactory;
    protected $table = "data_buyers";
    protected $fillable = ["name", "email"];

    public function buyer()
    {
        return $this->hasOne(Buyer::class, 'data_buyers_id');
    }
}
