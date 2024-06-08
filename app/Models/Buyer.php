<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;
    protected $table = "buyer";
    protected $fillable = ["age", "bio", "users_id"];

    public function user()
    {
    return $this->belongsTo(User::class, 'users_id');
    }
}

