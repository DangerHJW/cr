<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProlmController extends Controller
{
    //
    function index($id=1){
      
      $prolms = DB::table('serlms')->get();
      
      $prolmc = DB::table('serlms')->where('id',$id)->get();
     
      $prolmcos = DB::table('sercos')->where('ser_id',$id)->get();
      foreach ($prolmcos as $pro) {
        $pro->serimgs = json_decode($pro->serimgs, true);
      }
      
       return view('prolm',[
        'ac' => 'prolm', 
        'prolms' => $prolms,
        'prolmc' => $prolmc, 
        'prolmcos' => $prolmcos,
        'id' => $id
      ]); 
    }
}
