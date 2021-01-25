<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['nm_building_id', 'nm_fasilitas_id'];

    public function m_property()
    {
        return $this->belongsTo(TipeProperty::class, 'tipe_property_id', 'id');
    }

    public function m_building()
    {
        return $this->belongsTo(building::class, 'nm_building_id', 'id');
    }

    public function m_fasilitas()
    {
        return $this->belongsTo(fasilitas::class, 'nm_fasilitas_id', 'id');
    }
}
