<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // App/Order.php
    public function user()
    {
        return $this->belongsTo('App\User')->withDefault();   // an order belongs to a user
    }
    // App/Order.php
    public function orderlines()
    {
        return $this->hasMany('App\Orderline');   // an order has many orderlines
    }

}
