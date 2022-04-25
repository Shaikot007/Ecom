<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    public function orderProduct()
    {
        return $this->hasOne('App\Models\Product', 'id', 'product_id');
    }
}
