<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'payment_date',
        'expiration_date',
        'user_id',
        'cost_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cost()
    {
        return $this->belongsTo(Cost::class);
    }
}
