<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fasilitas extends Model
{
    protected $table = 'fasilitases';
    protected $guarded = [];

    public function m_property()
    {
        return $this->hasMany(Property::class, 'nm_fasilitas_id', 'id');
    }
}
