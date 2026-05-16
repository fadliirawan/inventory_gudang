<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OutgoingGoods extends Model
{
    protected $fillable = [
        'product_id',
        'qty',
        'date',
        'destination'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}