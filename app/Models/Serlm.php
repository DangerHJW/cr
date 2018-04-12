<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serlm extends Model
{
  //一对多
  public function sercos()
  {
    return $this->hasMany(Serco::class, 'ser_id');
  }
}
