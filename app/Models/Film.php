<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Film extends Model
{
    use HasFactory;
    protected $table = "film";
    protected $fillable = ["title", "synopsis", "schedule", 'poster'];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
