<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class GarbageRecord extends Model
{
    protected $connection = 'mongodb';

    protected $collection = 'garbage_record';
    //protected $table='garbage_record';

    public function client()
    {
        return $this->belongsTo('App\Client');
    }
}
