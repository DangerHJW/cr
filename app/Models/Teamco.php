<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teamco extends Model
{
    protected $table = 'teamco';
    
    protected $fillable = ['name', 'bio', 'picture','job'];
    
    public function teamlm(){
      return $this->belongsTo(Teamlm::class, 'teamlm_id');
    }
}
