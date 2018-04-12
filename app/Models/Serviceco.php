<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serviceco extends Model
{
  //多图
    public function setImgAttribute($img)
    {
        if (is_array($img)) {
            $this->attributes['img'] = json_encode($img);
        }
    }

    public function getImgAttribute($img)
    {
        return json_decode($img, true);
    }
    
    protected $fillable = ['img', 'content'];
    
    public function service(){
      return $this->belongsTo(Service::class, 'service_id');
    }
}
