<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $fillable = ['user_id','amount','reference','duration','status','type','month','year'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
