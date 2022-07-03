<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function statustransaction()
    {
        return $this->belongsTo('App\Models\StatusTransaction', 'status_id');
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
