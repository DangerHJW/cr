<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teamlm extends Model
{
    protected $table = 'teamlm';
    
    public function teamco(){
      return $this->hasMany(Teamco::class, 'teamlm_id');
    }
}
