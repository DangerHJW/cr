<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  public function setPictureAttribute($picture)
  {
    if (is_array($picture)) {
        $this->attributes['picture'] = json_encode($picture);
    }
  }

  public function getPictureAttribute($picture)
  {
      return json_decode($picture, true);
  }
}
