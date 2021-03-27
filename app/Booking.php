<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $guarded = [];

    public function m_booking()
    {
        return $this->belongsTo(Property::class, 'id', 'id');
    }

}
