<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'stock',
        'price'
    ];

    public function incomingGoods()
    {
        return $this->hasMany(IncomingGoods::class);
    }

    public function outgoingGoods()
    {
        return $this->hasMany(OutgoingGoods::class);
    }
}