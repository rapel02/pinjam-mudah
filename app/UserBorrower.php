<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserBorrower extends Model
{
    public $primarykey = 'id';
    public function items()
    {
        return $this->hasMany('App\Items');
    }
}
