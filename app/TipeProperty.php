<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipeProperty extends Model
{
    public function m_tipeproperty()
    {
        return $this->hasMany(TipeProperty::class, 'tipe_property_id', 'id');
    }
}
