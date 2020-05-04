<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $fillable = [
        'date',
        'hour',
        'numPerson',
        'message'
    ];
    public function user() {
        return $this->belongsTo('App\User');
    }
}
