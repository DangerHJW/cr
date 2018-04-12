<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NewController extends Controller
{
    //
    function index($lm=1){
      
      $newlms = DB::table('newlms')->get();
      
      $newcos = DB::table('newcos')->where('newlm_id',$lm)->paginate(8);
      
      
      return view('news',['ac' => 'news', 'newlms' => $newlms, 'newcos' => $newcos, 'lm' => $lm ]);
    }
    
    function show($id){
      $newco = DB::table('newcos')->where('id',$id)->get();
      
      return view('newshow',['ac' => 'news', 'newco' => $newco]);
    }
}