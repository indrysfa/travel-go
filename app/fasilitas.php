<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fasilitas extends Model
{
<<<<<<< HEAD
    protected $table = "fasilitases";
=======
    protected $table = 'fasilitases';
>>>>>>> 00de3cf3de8867c58f256b553b96b16a18f6f023
    protected $guarded = [];

    public function m_property()
    {
        return $this->hasMany(Property::class, 'nm_fasilitas_id', 'id');
    }
}
