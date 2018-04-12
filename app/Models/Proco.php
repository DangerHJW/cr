<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proco extends Model
{
  protected $fillable = ['title', 'content', 'painters','hot', 'cover'];

  public function prolm()
  {
    return $this->belongsTo(Prolm::class, 'prolm_id');
  }
  
  public function setPaintersAttribute($painters)
    {
        if (is_array($painters)) {
            $this->attributes['painters'] = json_encode($painters);
        }
    }

    public function getPaintersAttribute($painters)
    {
        return json_decode($painters, true);
    }
    
    public function videos()
    {
        return $this->hasMany(Video::class, 'proco_id');
    }
}
