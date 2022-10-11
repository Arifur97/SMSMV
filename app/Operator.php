<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    protected $guarded = ['id'];

    public function getOperatorName(){
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
}
