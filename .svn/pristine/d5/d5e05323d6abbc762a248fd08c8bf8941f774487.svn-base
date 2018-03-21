<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
	use SoftDeletes;

    public function plan()
    {
        return $this->belongsTo('App\Plan');
    }

    public function payments()
    {
        return $this->hasMany('App\Payment');
    }

	protected $dates = ['deleted_at'];

}
