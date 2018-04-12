<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Infolm extends Model
{
  protected $table = 'infolms';
  
  public function infoco(){
      return $this->hasMany(Infoco::class, 'infolm_id');
  }
  
  public function setPicturesAttribute($img)
  {
      if (is_array($img)) {
          $this->attributes['img'] = json_encode($img);
      }
  }

  public function getPicturesAttribute($img)
  {
      return json_decode($img, true);
  }
}
