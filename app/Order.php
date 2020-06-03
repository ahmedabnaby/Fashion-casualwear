<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'cart',
        'firstname',
        'lastname',
        'street-address',
        'lastname',
        'apartment',
        'city-state',
        'post-zipcode',
        'email',
        'phone-number',
        'current_date'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
