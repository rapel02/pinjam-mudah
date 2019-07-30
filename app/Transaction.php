<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public $primarykey = 'id';

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function items()
    {
        return $this->belongsTo('App\Items','item_id');
    }
}
