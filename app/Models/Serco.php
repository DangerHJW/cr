<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serco extends Model
{
  //一对多
  protected $fillable = ['content', 'serimgs'];

  public function serlm()
  {
    return $this->belongsTo(Serlm::class, 'ser_id');
  }
  
  //多图
  public function setSerimgsAttribute($serimgs)
    {
        if (is_array($serimgs)) {
            $this->attributes['serimgs'] = json_encode($serimgs);
        }
    }

    public function getSerimgsAttribute($serimgs)
    {
        return json_decode($serimgs, true);
    }
  
}
