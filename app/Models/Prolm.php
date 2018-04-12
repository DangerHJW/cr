<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prolm extends Model
{
  public function procos()
    {
        return $this->hasMany(Proco::class, 'prolm_id');
    }
}
