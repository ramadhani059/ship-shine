<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $table = 'destinations';

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }

    public function gallery()
    {
        return $this->belongsToMany(gallery::class);
    }
}
