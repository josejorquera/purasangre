<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
	use SoftDeletes;
    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function payment_type()
    {
        return $this->belongsTo('App\Payment_type');
    }

    protected $dates = ['deleted_at'];
}

//payment_types o type?????