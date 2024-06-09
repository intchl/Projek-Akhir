<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;
    protected $table = "buyers";
    protected $fillable = ["age", "bio", "data_buyers_id"];

    public function dataBuyer()
    {
        return $this->belongsTo(DataBuyer::class, 'data_buyers_id');
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
