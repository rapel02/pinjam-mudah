<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    public $primarykey = 'id';
    public function userborrower()
    {
        return $this->belongsTo('App\UserBorrower','user_borrower_id');
    }
    public function transaction()
    {
        return $this->hasMany('App\Transaction');
    }
    public function review()
    {
        return $this->hasMany('App\Review');
    }
}
