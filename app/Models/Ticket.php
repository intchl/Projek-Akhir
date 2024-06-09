<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory;
    protected $table = "ticket";
    protected $fillable = ["price", "film_id"];

    public function film()
    {
        return $this->belongsTo(Film::class);
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
