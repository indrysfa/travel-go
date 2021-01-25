<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class building extends Model
{
    protected $guarded = [];

    public function m_building()
    {
        return $this->hasMany(building::class, 'nm_building_id', 'id');
    }
}
