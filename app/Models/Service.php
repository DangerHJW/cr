<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /* public function setImgsAttribute($imgs)
    {
        if (is_array($imgs)) {
            $this->attributes['imgs'] = json_encode($imgs);
        }
    }

    public function getImgsAttribute($imgs)
    {
        return json_decode($imgs, true);
    } */
    
    public function servicecos()
    {
        return $this->hasMany(Serviceco::class, 'service_id');
    }
}
