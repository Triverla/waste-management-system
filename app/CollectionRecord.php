<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\HybridRelations;

class CollectionRecord extends Model
{
    protected $connection = 'mongodb';

    protected $collection = 'collection_record';

    //protected $primaryKey = 'id';

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function truck()
    {
        return $this->belongsTo('App\Truck');
    }
}
