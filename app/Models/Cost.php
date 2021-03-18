<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'amount',
        'duration_months',
        'offer',
    ];

    public static $months = [
        1 => '1 mes',
        2 => '2 meses',
        3 => '3 meses',
        4 => '4 meses',
        5 => '5 meses',
        6 => '6 meses',
        7 => '7 meses',
        8 => '8 meses',
        9 => '9 meses',
        10 =>  '10 meses',
        11 =>  '11 meses',
        12 =>  '12 meses',
    ];
}
