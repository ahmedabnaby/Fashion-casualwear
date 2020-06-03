<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdersByCard extends Model
{
    protected $fillable = ['cart','current_date'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
