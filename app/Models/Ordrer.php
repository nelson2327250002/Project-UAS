<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordrer extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'shipping_phonenumber',
        'shipping_city',
        'shipping_postalcode',
        'product_name',
        'quantity',
    ];
}
