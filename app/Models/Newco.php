<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newco extends Model
{
  protected $fillable = ['title', 'content', 'img', 'hot'];
    
  public function newlm(){
    return $this->belongsTo(Newlm::class, 'newlm_id');
  }
}
