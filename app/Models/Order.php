<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function customer()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function orderDetail()
    {
        return $this->hasOne('App\Models\OrderDetail', 'order_id','id');
    }
}
