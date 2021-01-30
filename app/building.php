<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class building extends Model
{
    protected $guarded = [];

    public function m_property()
    {
        return $this->hasMany(Property::class, 'nm_building_id', 'id');
    }
}
