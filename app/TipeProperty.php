<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipeProperty extends Model
{
    public function m_property()
    {
        return $this->hasMany(Property::class, 'tipe_property_id', 'id');
    }
}
