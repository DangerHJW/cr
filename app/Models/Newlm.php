<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newlm extends Model
{
    public function newco(){
        return $this->hasMany(Newco::class, 'newlm_id');
    }
}
