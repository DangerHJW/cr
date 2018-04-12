<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
  protected $fillable = ['title', 'link', 'cover'];

  public function proco()
  {
    return $this->belongsTo(Proco::class, 'proco_id');
  }
}
