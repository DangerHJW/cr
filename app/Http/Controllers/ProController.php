<?php

namespace App\Http\Controllers;

//use App\Models\Prolm
//use App\Models\Proco
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProController extends Controller
{
    //
    function index(){
      
      $prolm = DB::table('prolms')->get();
      
      $procos = DB::table('procos')->paginate(9);
      
      foreach ($procos as $proco) {
        $proco->painters = json_decode($proco->painters, true);
      }
      $lm = 'all';
      return view('pro',['ac' => 'pro', 'prolms' => $prolm, 'procos' => $procos, 'lm'=> $lm]);
    }
     
    function prolm($lm){
       
      $prolm = DB::table('prolms')->get();
      
      $procos = DB::table('procos')->where('prolm_id',$lm)->paginate(3);
      
      foreach ($procos as $proco) {
        $proco->painters = json_decode($proco->painters, true);
      }
      
      return view('pro',['ac' => 'pro', 'prolms' => $prolm, 'procos' => $procos, 'lm' => $lm]);
    }
    
    function show($id){

      $pro = DB::table('procos')->where('id', $id)->get();
   
      $painters = json_decode($pro[0]->painters, true);
      
      //视频
      $videos = DB::table('videos')->where('proco_id', $pro[0]->id )->get();
       
      return view('proshow',['ac' => 'pro', 'pro' => $pro, 'painters' => $painters, 'videos' => $videos]);
    }
    
    function video($id){
      
      //视频
      $video = DB::table('videos')->where('id', $id )->get();
      
      return view('provideo',['ac' => 'pro', 'video' => $video]);
    }
}
