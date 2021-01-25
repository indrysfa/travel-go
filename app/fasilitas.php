<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fasilitas extends Model
{
    protected $guarded = [];

    public function m_fasilitas()
    {
        return $this->hasMany(fasilitas::class, 'nm_fasilitas_id', 'id');
    }
}
