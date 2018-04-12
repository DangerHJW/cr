<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Painter extends Model
{
  public function paintings()
  {
    return $this->hasMany(Painting::class, 'painter_id');
  }
}
