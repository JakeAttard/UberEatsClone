<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Order Class
class Order extends Model
{
    // Returning the order to the user
    public function users(){
        return $this->belongsTo('App\User');
    }
}