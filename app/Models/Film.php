<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Film extends Model
{
    use HasFactory;
    protected $table = "film";
    protected $fillable = ["title", "synopsis", "schedule"];

    public function studio(): HasOne
    {
        return $this->hasOne(Studio::class, 'film_id');
    }
}
