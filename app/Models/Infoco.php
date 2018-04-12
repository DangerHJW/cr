<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Infoco extends Model
{
  protected $table = 'infocos';
  
  protected $fillable = ['img', 'content', 'title'];
    
  public function infolm(){
    return $this->belongsTo(Infolm::class, 'infolm_id');
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
